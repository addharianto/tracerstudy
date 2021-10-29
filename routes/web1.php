<?php

use Illuminate\Support\Facades\Route;

//Admin Namespace
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\UsersController;


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


Route::group(['middleware' => ['auth','ceklevel:admin,karyawan']], function () {
    route::get('/home',[HomeController::class,'index'])->name('home');    
});
//Admin
Route::group(['middleware' => ['auth','ceklevel:admin']], function () {
	Route::resource('users','UsersController');
	Route::resource('pengumuman','PengumumanController');
	Route::resource('agenda','AgendaController');
	Route::resource('artikel','ArtikelController');
	Route::resource('perusahaan','PerusahaanController');
	Route::resource('lowongan','LowonganController');
	Route::resource('kategori-artikel','KategoriArtikelController');
	Route::resource('kategori-perusahaan','KategoriPerusahaanController');
});
//Karyawan
Route::group(['middleware' => ['auth','ceklevel:karyawan']], function () {
	Route::resource('users','UsersController');
	Route::resource('pengumuman','PengumumanController');
	Route::resource('agenda','AgendaController');
	Route::resource('artikel','ArtikelController');
	Route::resource('perusahaan','PerusahaanController');
	Route::resource('lowongan','LowonganController');
});
// Route::group(['namespace' => 'Admin','prefix' => 'admin','middleware' => ['auth']],function(){
// 	Route::name('admin.')->group(function(){

// 		Route::get('/',[AdminController::class,'index'])->name('index');
// 		Route::get('/profile',[ProfileController::class,'index'])->name('profile.index');
// 		Route::get('/change-password',[ChangePasswordController::class,'index'])->name('change-password.index');

// 		//Resource Controller
// 		Route::resource('users','UsersController');
// 		Route::resource('pengumuman','PengumumanController');
// 		Route::resource('agenda','AgendaController');
// 		Route::resource('artikel','ArtikelController');
// 		Route::resource('perusahaan','PerusahaanController');
// 		Route::resource('lowongan','LowonganController');
// 		Route::resource('kategori-artikel','KategoriArtikelController');
// 		Route::resource('kategori-perusahaan','KategoriPerusahaanController');
// 	});
// });