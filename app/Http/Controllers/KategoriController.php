<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use Illuminate\Http\Request;
class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::orderBy('created_at', 'DESC')->get();
        return view('halaman.kategori.index', compact('kategoris'));
    }

    public function create()
    {
        return view('halaman.kategori.create');
    }

    public function store(Request $request)
    {
        Kategori::create($request->all());
        return redirect()->route('kategori.index')->with('success', 'Kategori Behasil di Tambahkan');
    }

    public function show(string $id)
    {
        // $kategori = Kategori::findOrFail($id);
        // return view('halaman.kategori.show',compact('kategori'));
    }

    public function edit(string $id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('halaman.kategori.edit',compact('kategori'));
    }

    public function update(Request $request, string $id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->update($request->all());
        return redirect()->route('kategori.index')->with('success', 'Kategori Behasil di Update');

    }

    public function destroy(string $id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        return redirect()->route('kategori.index')->with('success', 'Kategori Behasil di Hapus');
    }
}
