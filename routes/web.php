<?php

use Illuminate\Support\Facades\Route;

//Admin Namespace
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\UsersController;

//Admin Namespace
use App\Http\Controllers\Alumni\AlumniController;
use App\Http\Controllers\Alumni\PembelajaranController;
use App\Http\Controllers\Alumni\WajibController;
use App\Http\Controllers\Alumni\PekerjaanController;
use App\Http\Controllers\Alumni\KompetensiController;
use App\Http\Controllers\Alumni\SikonController;
//Controllers Namespace
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\LowonganController;


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

//Home
Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');

//Artikel 
Route::get('/artikel',[ArtikelController::class,'index'])->name('artikel');
Route::get('/artikel/search',[ArtikelController::class,'search'])->name('artikel.search');

Route::get('/artikel/{artikel:slug}',[ArtikelController::class,'show'])->name('artikel.show');

//Pengumuman
Route::get('/pengumuman',[PengumumanController::class,'index'])->name('pengumuman');
Route::get('/pengumuman/{pengumuman:slug}',[PengumumanController::class,'show'])->name('pengumuman.show');

//Lowongan
Route::get('/lowongan',[LowonganController::class,'index'])->name('lowongan');
Route::get('/lowongan/{lowongan:slug}',[LowonganController::class,'show'])->name('lowongan.show');

//Agenda
Route::get('/agenda',[AgendaController::class,'index'])->name('agenda');
Route::get('/agenda/{agenda:slug}',[AgendaController::class,'show'])->name('agenda.show');

//Admin

Route::group(['namespace' => 'Admin','prefix' => 'admin','middleware' => ['auth']],function(){
	Route::name('admin.')->group(function(){

		Route::get('/',[AdminController::class,'index'])->name('index');
		Route::get('/profile',[ProfileController::class,'index'])->name('profile.index');
		Route::get('/change-password',[ChangePasswordController::class,'index'])->name('change-password.index');

		//Resource Controller
		Route::resource('users','UsersController');
		Route::resource('pengumuman','PengumumanController');
		Route::resource('agenda','AgendaController');
		Route::resource('artikel','ArtikelController');
		Route::resource('perusahaan','PerusahaanController');
		Route::resource('lowongan','LowonganController');
		Route::resource('kategori-artikel','KategoriArtikelController');
		Route::resource('kategori-perusahaan','KategoriPerusahaanController');
		Route::resource('prodi','ProdiController');
		Route::resource('alumni','AlumniController');
		Route::resource('pembelajaran','PembelajaranController');
		Route::resource('wajib','PembelajaranController');
		Route::resource('pekerjaan','PekerjaanController');
		Route::resource('sikon','SikonController');
		Route::resource('kompetensi','KompetensiController');
	});
});

//karyawan
Route::group(['namespace' => 'Alumni','prefix' => 'alumni','middleware' => ['auth']],function(){
	Route::name('alumni.')->group(function(){

		Route::get('/',[AlumniController::class,'index'])->name('index');
		Route::get('/profile',[ProfileController::class,'index'])->name('profile.index');
		Route::get('/change-password',[ChangePasswordController::class,'index'])->name('change-password.index');
		
		//Resource Controller
		Route::resource('pengumuman','PengumumanController');
		Route::resource('agenda','AgendaController');
		Route::resource('artikel','ArtikelController');
		Route::resource('perusahaan','PerusahaanController');
		Route::resource('lowongan','LowonganController');
		Route::resource('alumni','AlumniController');
		Route::resource('wajib','WajibController');
		Route::resource('pembelajaran','PembelajaranController');
		Route::resource('pekerjaan','PekerjaanController');
		Route::resource('sikon','SikonController');
		Route::resource('kompetensi','KompetensiController');
	});
});