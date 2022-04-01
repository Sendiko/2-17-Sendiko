<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ContactController;

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
    return view('index', [
        "title" => "Beranda"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Muhammad Rizky Sendiko",
        "email" => "3103120150@student.smktelkom-pwt.sch.id",
        "gambar" => "dsc.jpg",
        "sekolah" => "SMK Telkom Puwokerto",
        "umur" => "17 Tahun",
        "kelahiran" => "Banyumas, Purwokerto"
    ]);
});

Route::get('/porto', function () {
    return view('portofolio', [
        "title" => "Gallery",
        "gambar" => "dsc.jpg"
    ]);
});

Route::get('/contacts', function () {
    return view('contacts', [
        "title" => "Contact Us"
    ]);
});

Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');
Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/contacts/index', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::post('/contacts/{id}/update', [ContactController::class, 'update'])->name('contacts.update');
    Route::get('/contacts/{id}/destroy', [ContactController::class, 'destroy'])->name('contacts.destroy');
});
