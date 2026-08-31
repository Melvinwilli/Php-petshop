<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\TransactionMaster;
use Illuminate\Http\Request;

class TransactionMasterController extends Controller
{
    public function index()
    {
        $transactions = TransactionMaster::with('member')
            ->latest()
            ->get();

        return view(
            'transaction_master.index',
            compact('transactions')
        );
    }

    public function create()
    {
        $members = Member::all();

        return view(
            'transaction_master.create',
            compact('members')
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'member_id' => 'required|exists:members,id',
            'date_start' => 'required|date',
            'date_pickup' => 'required|date|after_or_equal:date_start',
            'discount' => 'nullable|numeric|min:0',
        ]);

        $invoice = 'INV-' . date('YmdHis');

        $transaction = TransactionMaster::create([
            'invoice' => $invoice,
            'member_id' => $request->member_id,
            'date_start' => $request->date_start,
            'date_pickup' => $request->date_pickup,
            'discount' => $request->discount ?? 0,
            'subtotal' => 0,
        ]);

        return redirect()
            ->route(
                'transaction-master.show',
                $transaction->id
            )
            ->with(
                'success',
                'Transaksi berhasil dibuat. Silakan tambahkan hewan.'
            );
    }

    public function show(TransactionMaster $transactionMaster)
    {
        $transactionMaster->load([
            'member',
            'details.pet.category',
            'details.pricelist.category',
        ]);

        return view(
            'transaction_master.show',
            compact('transactionMaster')
        );
    }

    public function edit(TransactionMaster $transactionMaster)
    {
        $members = Member::all();

        return view(
            'transaction_master.edit',
            compact(
                'transactionMaster',
                'members'
            )
        );
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'member_id' => 'required|exists:members,id',
        'date_start' => 'required|date',
        'date_pickup' => 'required|date|after_or_equal:date_start',
        'discount' => 'nullable|numeric|min:0',
    ]);

    $transaction = TransactionMaster::with('details.pricelist')
        ->findOrFail($id);

    // Update data transaksi
    $transaction->member_id = $request->member_id;
    $transaction->date_start = $request->date_start;
    $transaction->date_pickup = $request->date_pickup;
    $transaction->discount = $request->discount ?? 0;

    // Hitung jumlah hari berdasarkan tanggal BARU
    $dateStart = \Carbon\Carbon::parse($request->date_start);
    $datePickup = \Carbon\Carbon::parse($request->date_pickup);

    $jumlahHari = $dateStart->diffInDays($datePickup);

    // Minimal dihitung 1 hari
    $jumlahHari = max(1, $jumlahHari);

    $subtotal = 0;

    // Hitung ulang setiap hewan
    foreach ($transaction->details as $detail) {

        $pricelist = $detail->pricelist;

        if (!$pricelist) {
            continue;
        }

        /*
         * Perhitungan harga:
         *
         * 30 hari atau lebih:
         * harga bulanan + sisa hari
         *
         * 7 hari atau lebih:
         * harga mingguan + sisa hari
         *
         * kurang dari 7 hari:
         * harga harian
         */

        if ($jumlahHari >= 30) {

            $jumlahBulan = intdiv($jumlahHari, 30);
            $sisaHari = $jumlahHari % 30;

            $totalHewan = $jumlahBulan * $pricelist->harga_bulanan;

            if ($sisaHari > 0) {
                $totalHewan += $sisaHari * $pricelist->harga_harian;
            }

        } elseif ($jumlahHari >= 7) {

            $jumlahMinggu = intdiv($jumlahHari, 7);
            $sisaHari = $jumlahHari % 7;

            $totalHewan = $jumlahMinggu * $pricelist->harga_mingguan;

            if ($sisaHari > 0) {
                $totalHewan += $sisaHari * $pricelist->harga_harian;
            }

        } else {

            $totalHewan = $jumlahHari * $pricelist->harga_harian;
        }

        // Simpan total terbaru ke detail
        $detail->total = $totalHewan;
        $detail->save();

        // Tambahkan ke subtotal
        $subtotal += $totalHewan;
    }

    // Simpan subtotal terbaru
    $transaction->subtotal = $subtotal;

    $transaction->save();

    return redirect()
        ->route('transaction-master.index')
        ->with('success', 'Transaksi berhasil diperbarui dan harga berhasil dihitung ulang.');
}
    public function destroy(TransactionMaster $transactionMaster)
    {
        $transactionMaster->delete();

        return redirect()
            ->route('transaction-master.index')
            ->with(
                'success',
                'Transaksi berhasil dihapus.'
            );
    }
}