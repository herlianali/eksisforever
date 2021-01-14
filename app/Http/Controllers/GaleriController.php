<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::latest()->get();
        return view('admin.galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('admin.galeri.input');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_file'     => 'required|file|image|nullable|max:2999|mimes:jpg,jpeg,png',
            'nama_album'    => 'required',
            'nama_kegiatan' => 'required',
        ]);
        
        $file = $request->file('nama_file');
        $nama = time().".".$file->getClientOriginalExtension();
        $file->storeAs('public/foto/galeri',$nama);
        
        Galeri::create([
            'nama_file'     => $nama,
            'nama_album'    => $request->nama_album,
            'nama_kegiatan' => $request->nama_album,
        ]);
        
        return redirect()->route('galeri.index')
               ->with(['success' => 'Galeri berhasil ditambahkan']);
    }

    public function edit(Galeri $galeri)
    {
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, $id)
    {
        // dd($id);
        $galeri = Galeri::where('id', $id)
                        ->first();

        if ($request->has('nama_file')) {
            $file = $request->file('nama_file');
            $nama = time().".".$file->getClientOriginalExtension();
            $file->storeAs('public/foto/galeri',$nama);
        }else{
            $nama = $galeri->nama_file;
        }
        // dd($nama);

        Galeri::where('id',$id)
                ->update([
                    'nama_file'     => $nama,
                    'nama_album'    => $request->nama_album,
                    'nama_kegiatan' => $request->nama_album,
                ]);

        return redirect()->route('galeri.index')
                ->with(['success' => 'Galeri berhasil ditambahkan']);
    }

    public function destroy(Galeri $galeri)
    {
        $galeri->delete();

        return redirect()->route('galeri.index')
                ->with(['successD' => 'Galeri berhasil ditambahkan']);
    }
}
    