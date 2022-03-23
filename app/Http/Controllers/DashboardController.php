<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statis;
use App\Models\Kegiatan;
use App\Models\Galeri;
use App\Models\Produk;
use App\Models\Pembelian;

class DashboardController extends Controller
{

    public function index()
    {
        $statis    = Statis::select('*')->first();
        $produks   = Produk::select('*')->limit(4)->get();
        $galeris   = Galeri::select('*')->limit(6)->get();
        $kegiatan1 = Kegiatan::select('*')->take(2)->first();
        $kegiatan2 = Kegiatan::select('*')->take(2)->latest()->first();

        // dd($statis);
        return view('index', compact('statis', 'produks', 'galeris', 'kegiatan1', 'kegiatan2'));

    }

    public function produk()
    {
        $produks = Produk::latest()->get();
        return view('listProduk', compact('produks'));
    }

    public function pembelian(Request $request)
    {
        $request->validate([
            'jumlah' => 'required|numeric',
            'pembeli' => 'required',
            'alamat' => 'required',
            'noTelp' => 'required',
        ]);
        
        $totalHarga = $request->harga * $request->jumlah;

        Pembelian::create([
            'nama_produk' => $request->namaProduk,
            'harga_satuan' => $request->harga,
            'jumlah' => $request->jumlah,
            'total' => $totalHarga,
            'nama_pembeli' => $request->pembeli,
            'alamat_pembeli' => $request->alamat,
            'nomor_telp' => $request->noTelp,
        ]);

        return redirect('produk');
    }

    public function kegiatan()
    {
        $kegiatans = Kegiatan::latest()->get();
        return view('kegiatan', compact('kegiatans'));
    }

    public function galeri()
    {
        $galeris = Galeri::orderBy('nama_album','asc')->get();
        return view('galeri', compact('galeris'));
    }

}
