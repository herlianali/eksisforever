<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumumans = Pengumuman::latest()->paginate(10);

        return view('admin.pengumuman.index', compact('pengumumans'))
                ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pengumuman.input');
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
            'judulPengumuman' => 'required',
            'isiPengumuman'   => 'required',
            'tanggal'         => 'required|date',
            'author'          => 'required',
        ]);

        Pengumuman::create([
            'judul_pengumuman' => $request->judulPengumuman,
            'isi_pengumuman'   => $request->isiPengumuman,
            'tanggal_posting'  => $request->tanggal,
            'author'           => $request->author,
        ]);

        return redirect()->route('pengumuman.index')
                ->with(['success' => 'Pengumuman berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengumuman $pengumuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengumumans = Pengumuman::where('id_pengumuman', $id)
                        ->get();
        return view('admin.pengumuman.edit',compact('pengumumans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judulPengumuman' => 'required',
            'isiPengumuman'   => 'required',
            'author'          => 'required',
            'tanggal'         => 'required|date',
        ]);
        Pengumuman::where('id_pengumuman', $id)
                    ->update([
                        'judul_pengumuman' => $request->judulPengumuman,
                        'isi_pengumuman'   => $request->isiPengumuman,
                        'tanggal_posting'  => $request->tanggal,
                        'author'           => $request->author,
                    ]);

        return redirect()->route('pengumuman.index')
                ->with('success', 'Pengumuman berhasil diedit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pengumuman::where('id_pengumuman',$id)->delete();
        return redirect()->route('pengumuman.index')
                ->with('successD', 'Pengumuman berhasil dihapus');
    }
}
