<?php

namespace App\Http\Controllers;

use App\Models\Berita;

use Illuminate\Http\Request;

class BeritaKTController extends Controller
{
    public function indexKt()
    {
        $kartarNews = Berita::where('jenis_berita', 'berita kartar')
                            ->paginate(10);

        return view('admin.berita.beritaKT', compact('kartarNews'))
                ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function status(Request $request, $id)
    {
        $status = Berita::where('id_berita', $id)
                        ->update(['status' => $request->status]);
        return redirect()->route('berita.indexKT')
                         ->with(['success' => 'Status berita telah berganti']);
    }

    public function createKT()
    {
        return view('admin.berita.inputBeritaKT');
    }

    public function storeKT(Request $request)
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

        return redirect()->route('berita.indexKT')
                         ->with(['success' => 'Berita baru telah ditambahkan']);
    }

    public function editKT($id)
    {
        $beritas = Berita::where('id_berita', $id)
                        ->get();
        return view('admin.berita.editBeritaKT', compact('beritas'));
    }

    public function updateKT(Request $request, $id)
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
        
        return redirect()->route('berita.indexKT')
                         ->with(['success' => 'Berita lama telah terupdate']);
    }

    public function destroyKT($id)
    {
        Berita::where('id_berita', $id)
                ->delete();
        return redirect()->route('berita.indexKT')
                         ->with(['successD' => 'Berita telah terhapus']);
    }
}
