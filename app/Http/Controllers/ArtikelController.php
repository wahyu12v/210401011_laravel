<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Author;
use App\Models\Kategori;
use Illuminate\Http\Request;


class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $artikels = Artikel::orderBy('created_at', 'DESC')->get();
        return view('halaman.artikel.index', compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        $ketegori = new Kategori();
        $data = $ketegori->getKategori();

        $ResultAuthor = new Author();
        $dataAuthor = $ResultAuthor->getauthor();

        return view('halaman.artikel.create')
        ->with('kategori', $data)
        ->with('dataAuthor', $dataAuthor)
        ;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {

        $foto = round(microtime(true) * 1000).'-'.str_replace(' ', '-', $request->file('gambar')->getClientOriginalName());

        $data = [
            'judul' => $request->judul,
             'author' =>  $request->author,
            'kategori' =>  $request->kategori,
            // 'jurusan' => $request->jurusan,
            'description' =>  $request->description,
            'img'=>$foto,
        ];

        // simpan foto
            $request->file('gambar')->move(public_path('images'), $foto);
        Artikel::create($data);
        return redirect()->route('artikel.index')->with('success', 'Artikel Behasil di Tambahkan')->with('kategori', $data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $artikel = Artikel::findOrFail($id);

    
        $ketegori = new Kategori();
        $data = $ketegori->getKategori();

        return view('halaman.artikel.show',compact('artikel'))->with('kategori', $data, );
    }
    public function edit(string $id)
    {
        $artikel = Artikel::findOrFail($id);
        $author = new Author();
        $dataauthor = $author->getAuthor();
        $kategori = new Kategori();
        $datakategori = $kategori->getKategori();

        return view('halaman.artikel.edit', compact('artikel', 'datakategori', 'dataauthor'));
    }
    public function update(Request $request, string $id)

    {

        $artikel = Artikel::findOrFail($id);
        $artikel->update($request->all());
        return redirect()->route('artikel.index')->with('success', 'Artikel Behasil di Update');

    }
    public function destroy(string $id)
    {

        $artikel = Artikel::findOrFail($id);
        $artikel->delete();
        return redirect()->route('artikel.index')->with('success', 'Artikel Behasil di Hapus');

    }
}