<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BeritaKTController;
use App\Http\Controllers\BeritaRWController;

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

		// Karang taruna route block
		Route::get('/beritaKT', 			[BeritaKTController::class, 'indexKT'])->name('berita.indexKT');
		Route::post('/beritaKT', 			[BeritaKTController::class, 'storeKT'])->name('berita.storeKT');
		Route::get('/beritaKT/create', 		[BeritaKTController::class, 'createKT'])->name('berita.createKT');
		Route::delete('/beritaKT/{id}',		[BeritaKTController::class, 'destroyKT'])->name('berita.destroyKT');
		Route::put('/statusB/{id}', 		[BeritaKTController::class, 'status'])->name('berita.status');
		Route::get('/beritaKT/{id}/edit',	[BeritaKTController::class, 'editKT'])->name('berita.editKT');
		Route::put('/beritaKT/{id}', 		[BeritaKTController::class, 'updateKT'])->name('berita.updateKT');

		Route::get('/beritaRW', 			[BeritaRWController::class, 'indexRW'])->name('beritaRW.index');
		Route::post('/beritaRW', 			[BeritaRWController::class, 'storeRW'])->name('beritaRW.store');
		Route::get('/beritaRW/create', 		[BeritaRWController::class, 'createRW'])->name('beritaRW.create');
		Route::delete('/beritaRW/{id}',		[BeritaRWController::class, 'destroyRW'])->name('beritaRW.destroy');
		Route::put('/statusBW/{id}', 		[BeritaRWController::class, 'status'])->name('beritaRW.status');
		Route::get('/beritaRW/{id}/edit',	[BeritaRWController::class, 'editRW'])->name('beritaRW.edit');
		Route::put('/beritaRW/{id}', 		[BeritaRWController::class, 'updateRW'])->name('beritaRW.update');

		//Block route agenda
		Route::get('/agenda', 			[AgendaController::class, 'index'])->name('agenda.index');
		Route::post('/agenda', 			[AgendaController::class, 'store'])->name('agenda.store');
		Route::get('/agenda/create',	[AgendaController::class, 'create'])->name('agenda.create');
		Route::delete('/agenda/{id}',	[AgendaController::class, 'destroy'])->name('agenda.destroy');
		Route::put('/agenda/{id}',		[AgendaController::class, 'update'])->name('agenda.update');
		Route::get('/agenda/{id}/edit',	[AgendaController::class, 'edit'])->name('agenda.edit');
		//End block route agenda
		
		//Block route pengumuman
		Route::get('/pengumuman', 			[PengumumanController::class, 'index'])->name('pengumuman.index');
		Route::post('/pengumuman', 			[PengumumanController::class, 'store'])->name('pengumuman.store');
		Route::get('/pengumuman/create',	[PengumumanController::class, 'create'])->name('pengumuman.create');
		Route::delete('/pengumuman/{id}',	[PengumumanController::class, 'destroy'])->name('pengumuman.destroy');
		Route::put('/pengumuman/{id}',		[PengumumanController::class, 'update'])->name('pengumuman.update');
		Route::get('/pengumuman/{id}/edit',	[PengumumanController::class, 'edit'])->name('pengumuman.edit');
		//End block route pengumuman

		// Block route user
		Route::resource('user', UserController::class);
		// End block route

	});

	Route::prefix('user')->group(function() {

		Route::get('/dashboard', function() {
			return view('user.index');
		});

	});


});