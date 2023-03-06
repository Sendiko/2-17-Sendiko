<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Models\Book;

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

Route::get('/about', [DashboardController::class, 'about']);

Route::get('/porto', [DashboardController::class, 'portofolio']);

Route::get('/contacts', function () {
    return view('contacts', [
        "title" => "Contact Us"
    ]);
});

Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/books/index', [BookController::class, 'index'])->name('books.index'); 
Route::get('/book/{id}/show', [BookController::class, 'show'])->name('book.show');
Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/contacts/index', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::post('/contacts/{id}/update', [ContactController::class, 'update'])->name('contacts.update');
    Route::get('/contacts/{id}/destroy', [ContactController::class, 'destroy'])->name('contacts.destroy');

    // Book routes
    Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
    Route::post('/book/store', [BookController::class, 'store'])->name('book.store');
    Route::get('/book/{id}/edit', [BookController::class, 'edit'])->name('book.edit');
    Route::get('/books/admin/index', [BookController::class, 'adminIndex'])->name('books.admin.index'); 
    Route::get('/book/admin/{id}/show', [BookController::class, 'adminShow'])->name('book.admin.show');
    Route::post('/book/{id}/update', [BookController::class, 'update'])->name('book.update');
    Route::get('/book/{id}/destroy', [BookController::class, 'destroy'])->name('book.destroy');
});
