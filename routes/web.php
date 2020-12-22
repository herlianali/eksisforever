<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::prefix('admin')->group(function() {
	Route::get('/', [LoginController::class, 'index']);
	Route::post('/login', [LoginController::class, 'login'])->name('admin/login');
	Route::get('/logout', [LoginController::class, 'logout'])->name('admin/logout');
});

Route::middleware('CekLoginMiddleware')->group(function(){

	Route::prefix('admin')->group(function() {

		Route::get('/dashboard', function () {
			return view('admin.dashboard');
		});

		Route::get('/beritaRW', function () {
			return view('admin.berita.beritaRW');
		})->name('beritaRW');

		Route::get('/inputBeritaRW', function () {
			return view('admin.berita.inputBeritaRW');
		});
		
		Route::get('/beritaKT', function () {
			return view('admin.berita.beritaKT');
		});

		Route::get('/inputBeritaKT', function () {
			return view('admin.berita.inputBeritaKT');
		});

		//Block route agenda
		Route::get('/agenda', 			[AgendaController::class, 'index'])->name('agenda.index');
		Route::post('/agenda', 			[AgendaController::class, 'store'])->name('agenda.store');
		Route::get('/agenda/create',	[AgendaController::class, 'create'])->name('agenda.create');
		Route::delete('/agenda/{id}',	[AgendaController::class, 'destroy'])->name('agenda.destroy');
		Route::put('/agenda/{id}',		[AgendaController::class, 'update'])->name('agenda.update');
		Route::get('/agenda/{id}/edit',	[AgendaController::class, 'edit'])->name('agenda.edit');
		//End block route agenda
		
		//Block route pengumuman
		Route::resource('pengumuman', PengumumanController::class);
		//End block route pengumuman

		Route::resource('user', UserController::class);
		// Route::resource('user', )
		// Route::get('/user', function () {
		// 	return view('admin.user.index');
		// });

		// Route::get('/inputUser', function () {
		// 	return view('admin.user.input');
		// });

	});

	Route::prefix('user')->group(function() {

		Route::get('/dashboard', function() {
			return view('user.index');
		});

	});


});