<?php

namespace App\Http\Controllers;

use App\Models\Penitipan;
use App\Models\Pricelist;
use App\Models\TransactionDetail;
use App\Models\TransactionMaster;
use Illuminate\Http\Request;

class TransactionDetailController extends Controller
{
    public function create(TransactionMaster $transactionMaster)
    {
        $pets = Penitipan::with('category')
            ->get();

        $pricelists = Pricelist::with('category')
            ->get();

        return view(
            'transaction_detail.create',
            compact(
                'transactionMaster',
                'pets',
                'pricelists'
            )
        );
    }

    public function store(
        Request $request,
        TransactionMaster $transactionMaster
    ) {
        $request->validate([
            'pet_id' => 'required|exists:penitipans,id',
        ]);

        $pet = Penitipan::with('category')
            ->findOrFail($request->pet_id);

        /*
        |--------------------------------------------------------------------------
        | Cari Pricelist berdasarkan kategori hewan
        |--------------------------------------------------------------------------
        */

        $pricelist = Pricelist::where(
            'category_id',
            $pet->category_id
        )->first();

        if (!$pricelist) {
            return back()
                ->withInput()
                ->with(
                    'error',
                    'Pricelist untuk kategori hewan ini belum tersedia.'
                );
        }

        /*
        |--------------------------------------------------------------------------
        | Hitung lama penitipan
        |--------------------------------------------------------------------------
        */

        $days = $transactionMaster
            ->date_start
            ->diffInDays(
                $transactionMaster->date_pickup
            );

        /*
        |--------------------------------------------------------------------------
        | Minimal 1 hari
        |--------------------------------------------------------------------------
        */

        if ($days < 1) {
            $days = 1;
        }

        /*
        |--------------------------------------------------------------------------
        | Hitung harga
        |
        | 30 hari = 1 bulan
        | 7 hari  = 1 minggu
        | sisanya = harian
        |--------------------------------------------------------------------------
        */

        $months = intdiv($days, 30);

        $remainingDays = $days % 30;

        $weeks = intdiv($remainingDays, 7);

        $dailyDays = $remainingDays % 7;

        $total =
            ($months * $pricelist->harga_bulanan) +
            ($weeks * $pricelist->harga_mingguan) +
            ($dailyDays * $pricelist->harga_harian);

        /*
        |--------------------------------------------------------------------------
        | Simpan Transaction Detail
        |--------------------------------------------------------------------------
        */

        TransactionDetail::create([
            'transaction_id' => $transactionMaster->id,
            'pet_id' => $pet->id,
            'pricelist_id' => $pricelist->id,
            'total' => $total,
        ]);

        /*
        |--------------------------------------------------------------------------
        | Hitung ulang subtotal transaksi
        |--------------------------------------------------------------------------
        */

        $subtotal = $transactionMaster
            ->details()
            ->sum('total');

        $transactionMaster->update([
            'subtotal' => $subtotal,
        ]);

        return redirect()
            ->route(
                'transaction-master.show',
                $transactionMaster->id
            )
            ->with(
                'success',
                'Hewan berhasil ditambahkan ke transaksi.'
            );
    }

    public function destroy(
        TransactionDetail $transactionDetail
    ) {
        $transaction = $transactionDetail->transaction;

        $transactionDetail->delete();

        /*
        |--------------------------------------------------------------------------
        | Hitung ulang subtotal
        |--------------------------------------------------------------------------
        */

        $subtotal = $transaction
            ->details()
            ->sum('total');

        $transaction->update([
            'subtotal' => $subtotal,
        ]);

        return redirect()
            ->route(
                'transaction-master.show',
                $transaction->id
            )
            ->with(
                'success',
                'Detail transaksi berhasil dihapus.'
            );
    }
}