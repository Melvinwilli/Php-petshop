<?php

namespace App\Http\Controllers;

use App\Models\Penitipan;
use App\Models\Category;
use App\Models\Member;
use Illuminate\Http\Request;

class PenitipanController extends Controller
{
    public function index()
    {
        $penitipans = Penitipan::with(['member', 'category'])->get();

        return view('penitipan.index', compact('penitipans'));
    }

    public function create()
    {
        $members = Member::all();
        $categories = Category::all();

        return view(
            'penitipan.create',
            compact('members', 'categories')
        );
    }

    public function store(Request $request)
{
    $request->validate([
        'member_id' => 'required|exists:members,id',
        'name' => 'required',
        'gender' => 'required|in:Laki-laki,Perempuan',
        'weight' => 'required|numeric|min:0',
        'height' => 'required|numeric|min:0',
        'age' => 'required|integer|min:0',
        'category_id' => 'required|exists:categories,id',
    ]);

    Penitipan::create([
        'member_id' => $request->member_id,
        'name' => $request->name,
        'gender' => $request->gender,
        'weight' => $request->weight,
        'height' => $request->height,
        'age' => $request->age,
        'category_id' => $request->category_id,
    ]);

    return redirect()
        ->route('penitipan.index')
        ->with('success', 'Data hewan berhasil ditambahkan.');
}
    public function show($id)
    {
        $penitipan = Penitipan::with(['member', 'category'])
            ->findOrFail($id);

        return view('penitipan.show', compact('penitipan'));
    }

    public function edit($id)
    {
        $penitipan = Penitipan::findOrFail($id);

        $members = Member::all();
        $categories = Category::all();

        return view(
            'penitipan.edit',
            compact('penitipan', 'members', 'categories')
        );
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'member_id' => 'required|exists:members,id',
        'name' => 'required',
        'gender' => 'required|in:Laki-laki,Perempuan',
        'weight' => 'required|numeric|min:0',
        'height' => 'required|numeric|min:0',
        'age' => 'required|integer|min:0',
        'category_id' => 'required|exists:categories,id',
    ]);

    $penitipan = Penitipan::findOrFail($id);

    $penitipan->update([
        'member_id' => $request->member_id,
        'name' => $request->name,
        'gender' => $request->gender,
        'weight' => $request->weight,
        'height' => $request->height,
        'age' => $request->age,
        'category_id' => $request->category_id,
    ]);

    return redirect()
        ->route('penitipan.index')
        ->with('success', 'Data hewan berhasil diperbarui.');
}

    public function destroy($id)
    {
        $penitipan = Penitipan::findOrFail($id);

        $penitipan->delete();

        return redirect()
            ->route('penitipan.index')
            ->with('success', 'Data penitipan berhasil dihapus.');
    }
}