<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statis;

class statisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statis = Statis::latest()->first();
        return view('admin.statis.index',compact('statis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        $request->validate([
            'nama_desa'      => 'required',
            'about_web'      => 'required',
            'contact_person' => 'required',
            'email'          => 'required|email',
        ]);
        
        $statis = Statis::where('id', $id)
                        ->update([
                            'nama_desa'         => $request->nama_desa,
                            'about_web'         => $request->about_web,
                            'contact_person'    => $request->contact_person,
                            'email'             => $request->email,
                        ]);

        return redirect()->route('statis.index')
                ->with(['success' => 'Data statis telah terubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
