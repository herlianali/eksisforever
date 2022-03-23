<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = Produk::latest()->get();
        return view('admin.produk.index', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produk.input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaProduk' => 'required',
            'harga'      => 'required',
            'jumlah'     => 'required',
            'keterangan' => 'required',
            'gambar'     => 'required|file|image|nullable|max:2999|mimes:jpg,jpeg,png',
        ]);

        $file = $request->file('gambar');
        $nama_file = time().".".$file->getClientOriginalExtension();
        $file->storeAs('public/foto/produk',$nama_file);

        produk::create([
            'nama_produk' => $request->namaProduk,
            'harga'       => $request->harga,
            'jumlah'      => $request->jumlah,
            'keterangan'  => $request->keterangan,
            'gambar'      => $nama_file,
        ]);

        return redirect()->route('produk.index')
                ->with(['success' => 'Produk berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        return view('admin.produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produks = Produk::where('id', $id)
                        ->first();

        if ($request->has('gambar')) {
            $file   = $request->file('gambar');
            $gambar = time().".".$file->getClientOriginalExtension();
            $file->storeAs('public/foto/produk',$gambar);
        }else{
            $gambar = $produks['gambar'];
        }

        Produk::where('id', $id)
                ->update([
                    'nama_produk' => $request->namaProduk,
                    'harga'       => $request->harga,
                    'jumlah'      => $request->jumlah,
                    'keterangan'  => $request->keterangan,
                    'gambar'      => $gambar
                ]);
                
        return redirect()->route('produk.index')
                ->with(['success' => 'Produk berhasil ditambahkan']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        $produk->delete();

        return redirect()->route('produk.index')
                ->with(['successD' => 'Produk berhasil dihapus']);
    }
}
