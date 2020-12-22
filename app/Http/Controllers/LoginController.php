<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function index() 
    {
    	return view('admin.index');
    }

    public function login(Request $request)
    {

		$data = User::where('username', $request->username)->first();
		
    	if ($data != null) {
    		if (Hash::check($request->password, $data->password)) {
    			session(['login' => true]);
    			return redirect('/admin/dashboard');
    		}
    	}
    	return redirect('/admin')->with('pesan', "Username Atau Password Yang di Inputkan Salah");
    }

    public function logout(Request $request)
    {
    	$request->session()->flush();
    	return redirect('/admin');
    }
}
