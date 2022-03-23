<?php

namespace App\Http\Controllers;

use App\Models\Berita;

use Illuminate\Http\Request;

class BeritaRWController extends Controller
{
    public function indexRW()
    {
        $RWNews = Berita::where('jenis_berita', 'berita rw')
                            ->paginate(10);

        return view('admin.berita.beritaRW', compact('RWNews'))
                ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function status(Request $request, $id)
    {
        $status = Berita::where('id_berita', $id)
                        ->update(['status' => $request->status]);
        return redirect()->route('beritaRW.index')
                         ->with(['success' => 'Status berita telah berganti']);
    }

    public function createRW()
    {
        return view('admin.berita.inputBeritaRW');
    }

    public function storeRW(Request $request)
    {
        $request->validate([
            'judulBerita' => 'required',
            'isiBerita'   => 'required',
            'gambar'      => 'required|file|image|nullable|max:2999|mimes:jpg,jpeg,png',
            'tanggal'     => 'required',
            'author'      => 'required',
        ]);
        
        $file = $request->file('gambar');
        $nama_file = time().".".$file->getClientOriginalExtension();
        $file->storeAs('public/foto/berita',$nama_file);

        Berita::create([
            'jenis_berita'    => $request->jenisBerita,
            'judul_berita'    => $request->judulBerita,
            'isi_berita'      => $request->isiBerita,
            'gambar'          => $nama_file,
            'tanggal_posting' => $request->tanggal,
            'status'          => $request->status,
            'author'          => $request->author,
        ]);

        return redirect()->route('beritaRW.index')
                         ->with(['success' => 'Berita baru telah ditambahkan']);
    }

    public function editRW($id)
    {
        $beritas = Berita::where('id_berita', $id)
                        ->get();
        return view('admin.berita.editBeritaRW', compact('beritas'));
    }

    public function updateRW(Request $request, $id)
    {
        $beritas = Berita::where('id_berita', $id)
                        ->first();

        if ($request->has('gambar')) {
            $file   = $request->file('gambar');
            $gambar = time().".".$file->getClientOriginalExtension();
            $file->storeAs('public/foto/berita',$gambar);
        }else{
            $gambar = $beritas['gambar'];
        }

        Berita::where('id_berita', $id)
                ->update([
                    'jenis_berita'    => $request->jenisBerita,
                    'judul_berita'    => $request->judulBerita,
                    'isi_berita'      => $request->isiBerita,
                    'gambar'          => $gambar,
                    'tanggal_posting' => $request->tanggal,
                    'status'          => $request->status,
                    'author'          => $request->author,
                ]);
        
        return redirect()->route('beritaRW.index')
                         ->with(['success' => 'Berita lama telah terupdate']);
    }

    public function destroyRW($id)
    {
        Berita::where('id_berita', $id)
                ->delete();
        return redirect()->route('beritaRW.index')
                         ->with(['successD' => 'Berita telah terhapus']);
    }
}
