<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatans = Kegiatan::latest()->paginate(10);

        return view('admin.kegiatan.index', compact('kegiatans'))
                ->with('i',(request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kegiatan.input');
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
            'judul'       => 'required',
            'keterangan'  => 'required',
            'tanggal'     => 'required|date',
            'gambar'      => 'required|file|image|nullable|max:2999|mimes:jpg,jpeg,png',
        ]);
        
        $file = $request->file('gambar');
        $nama_file = time().".".$file->getClientOriginalExtension();
        $file->storeAs('public/foto/kegiatan',$nama_file);

        Kegiatan::create([
            'judul'           => $request->judul,
            'keterangan'      => $request->keterangan,
            'gambar'          => $nama_file,
            'tanggal'         => $request->tanggal,
        ]);

        return redirect()->route('kegiatan.index')
                         ->with(['success' => 'Kegiatan baru telah ditambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kegiatans = Kegiatan::where('id', $id)->first();
        return view('admin.kegiatan.edit', compact('kegiatans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kegiatan = Kegiatan::where('id', $id)
                        ->first();

        if ($request->has('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time().".".$file->getClientOriginalExtension();
            $file->storeAs('public/foto/kegiatan',$nama_file);
        }else{
            $nama = $galeri->nama_file;
        }
        // dd($nama);

        Kegiatan::where('id',$id)
                ->update([
                    'judul'           => $request->judul,
                    'keterangan'      => $request->keterangan,
                    'gambar'          => $nama_file,
                    'tanggal'         => $request->tanggal,
                ]);

        return redirect()->route('kegiatan.index')
                ->with(['success' => 'Kegiatan berhasil diedit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();

        return redirect()->route('kegiatan.index')
                ->with(['successD' => 'Kegiatan berhasil diedit']);
    }
}
