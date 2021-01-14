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
    		if (Hash::check($request->password, $data->password) && $data->level === "admin") {
    			session([
					'login' => true,
					'level' => 'admin',
					]);
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
	
	public function indexUS()
	{
		return view('user.login');
	}

	public function loginUS(Request $request)
	{
		$data = User::where('username', $request->username)->first();

		if ($data != null) {
			if (Hash::check($request->password, $data->password) && $data->level === "user") {
    			session([
					'login' => true,
					'level' => 'user',
					]);
    			return redirect('/user/dashboard');
    		}
		}

		return redirect('/user')->with('pesan', "Username Atau Password Yang di Inputkan Salah");
	}

	public function logoutUS(Request $request)
    {
    	$request->session()->flush();
    	return redirect('/user');
	}
}
