<?php

namespace App\Http\Controllers;

use App\Models\Pricelist;
use App\Models\Category;
use Illuminate\Http\Request;

class PricelistController extends Controller
{
    public function index()
    {
        $pricelists = Pricelist::with('category')
            ->latest()
            ->get();

        return view('pricelist.index', compact('pricelists'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();

        return view('pricelist.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'harga_harian' => 'required|numeric|min:0',
            'harga_mingguan' => 'required|numeric|min:0',
            'harga_bulanan' => 'required|numeric|min:0',
        ]);

        Pricelist::create($validated);

        return redirect()
            ->route('pricelist.index')
            ->with('success', 'Pricelist berhasil ditambahkan.');
    }

    public function show(Pricelist $pricelist)
    {
        $pricelist->load('category');

        return view('pricelist.show', compact('pricelist'));
    }

    public function edit(Pricelist $pricelist)
    {
        $categories = Category::orderBy('name')->get();

        return view('pricelist.edit', compact(
            'pricelist',
            'categories'
        ));
    }

    public function update(Request $request, Pricelist $pricelist)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'harga_harian' => 'required|numeric|min:0',
            'harga_mingguan' => 'required|numeric|min:0',
            'harga_bulanan' => 'required|numeric|min:0',
        ]);

        $pricelist->update($validated);

        return redirect()
            ->route('pricelist.index')
            ->with('success', 'Pricelist berhasil diperbarui.');
    }

    public function destroy(Pricelist $pricelist)
    {
        $pricelist->delete();

        return redirect()
            ->route('pricelist.index')
            ->with('success', 'Pricelist berhasil dihapus.');
    }
}