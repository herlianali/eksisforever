<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agendas = Agenda::latest()->paginate(10);

        return view('admin.agenda.index', compact('agendas'))
                ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agenda.input');
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
            'temaAgenda' => 'required',
            'isiAgenda'  => 'required',
            'author'     => 'required',
            'tanggal'    => 'required|date',
        ]);

        Agenda::create([
            'tema_agenda'       => $request->temaAgenda,
            'isi_agenda'        => $request->isiAgenda,
            'author'            => $request->author,
            'tanggal_posting'   => $request->tanggal,
        ]);

        return redirect()->route('agenda.index')
                ->with(['success' => 'Agenda berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show(Agenda $agenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agendas = Agenda::where('id_agenda', $id)
                        ->get();
        return view('admin.agenda.edit', compact('agendas'));
        // return $agendas;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'temaAgenda' => 'required',
            'isiAgenda'  => 'required',
            'author'     => 'required',
            'tanggal'    => 'required|date',
        ]);
        
        $agenda = Agenda::where('id_agenda', $id)
                        ->update([
                            'tema_agenda'       => $request->temaAgenda,
                            'isi_agenda'        => $request->isiAgenda,
                            'author'            => $request->author,
                            'tanggal_posting'   => $request->tanggal,
                        ]);

        return redirect()->route('agenda.index')
                ->with(['success' => 'Agenda telah terubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Agenda::where('id_agenda', $id)->delete();
        return redirect()->route('agenda.index')
                ->with(['successD' => 'Agenda Telah terhapus']);
    }
}
