<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function agendaAView ()
    {
        $agendas = Agenda::latest()->paginate(10);

        return view('admin.agenda.index', compact('agendas'))
                ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function agendaAInputV ()
    {
        return view('admin.agenda.input');
    }

    public function agendaAInput (Request $request)
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

        return redirect()->route('admin/agendaV')
                ->with('success', 'Agenda berhasil ditambahkan');
    }

    // public function agendaAShow (Agenda $agenda)
    // {
    //     return view('admin.agenda.show', compact('agenda'));
    // }
    
    public function agendaAEdit (Agenda $agenda)
    {
        return view('admin.agenda.edit', compact('agendas'));
    }

    public function agendaAUpdate (Request $request, Agenda $agenda)
    {
        $request->validate([
            'temaAgenda' => 'required',
            'isiAgenda'  => 'required',
            'author'     => 'required|min:3',
            'tanggal'    => 'required|date',
        ]);

        $agenda->update([
            'tema_agenda'       => $request->temaAgenda,
            'isi_agenda'        => $request->isiAgenda,
            'author'            => $request->author,
            'tanggal_posting'   => $request->tanggal,
        ]);

        return redirect()->route('admin/agendaV')
                ->with('success', 'Agenda telah terubah');
    }
}
