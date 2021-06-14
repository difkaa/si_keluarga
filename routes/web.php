<?php

use App\Http\Controllers\AnggotaKeluargaController;
use App\Http\Controllers\RumahTanggaController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/rumah-tangga',[RumahTanggaController::class, 'index'])->name('rumahtangga.index');
Route::get('/rumah-tangga/create',[RumahTanggaController::class, 'create'])->name('rumahtangga.create');
Route::post('/rumah-tangga',[RumahTanggaController::class,'store'])->name('rumahtangga.store');
Route::get('/rumah-tangga/{rumahTangga}/edit',[RumahTanggaController::class,'edit'])->name('rumahtangga.edit');
Route::put('/rumah-tangga/{rumahTangga}/update',[RumahTanggaController::class,'update'])->name('rumahtangga.update');
Route::delete('/rumah-tangga/{rumahTangga}/delete',[RumahTanggaController::class,'destroy'])->name('rumahtangga.destroy');



Route::get('/anggota-keluarga',[AnggotaKeluargaController::class, 'index'])->name('anggotakeluarga.index');
Route::get('/anggota-keluarga/create',[AnggotaKeluargaController::class, 'create'])->name('anggotakeluarga.create');
Route::post('/anggota-keluarga',[AnggotaKeluargaController::class,'store'])->name('anggotakeluarga.store');
Route::get('/anggota-keluarga/{anggotaKeluarga}/edit',[AnggotaKeluargaController::class,'edit'])->name('anggotakeluarga.edit');
Route::put('/anggota-keluarga/{anggotaKeluarga}/update',[AnggotaKeluargaController::class,'update'])->name('anggotakeluarga.update');
Route::delete('/anggota-keluarga/{anggotaKeluarga}/delete',[AnggotaKeluargaController::class,'destroy'])->name('anggotakeluarga.destroy');


