<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(5);

        return view('admin.user.index', compact('users'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.input');
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
            'username' => 'required',
            'password' => 'required|min:8',
            'email'    => 'required|email',
            'no_telp'  => 'required|numeric',
            'alamat'   => 'required',
            'level'    => 'required',
            'namaL'    => 'required',
        ]);

        User::create([
            'username'     => $request->username,
            'password'     => bcrypt($request->password),
            'email'        => $request->email, 
            'no_telp'      => $request->no_telp,
            'alamat'       => $request->alamat,  
            'level'        => $request->level,   
            'nama_lengkap' => $request->namaL,   
        ]);

        return redirect()->route('user.index')
                ->with(['success', 'User baru telah berhasil di buat']);
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
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'email'    => 'required|email',
            'no_telp'  => 'required|numeric',
            'alamat'   => 'required',
            'level'    => 'required',
            'namaL'    => 'required',
        ]);

        $user->update([
            'username'     => $request->username,
            'password'     => bcrypt($request->password),
            'email'        => $request->email, 
            'no_telp'      => $request->no_telp,
            'alamat'       => $request->alamat,  
            'level'        => $request->level,   
            'nama_lengkap' => $request->namaL,
        ]);

        return redirect()->route('user.index')
                         ->with(['success', 'User telah berhasil di edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect()->route('user.index')
                         ->with(['successD', 'User telah berhasil di hapus']);
    }
}
