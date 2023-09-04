<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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
    return view('home', [
        'title' => "Selamat Datang di Sekolah Impian"
    ]);
});



Route::get('/program', [PostController::class, 'index']);

Route::get('program/{slug}', [PostController::class, 'show']);


Route::get('/tentang', function () {
    return view('about', [
        'title' => "Tentang SI"
    ]);
});

Route::get('/kurikulum', function () {
    return view('kurikulum', [
        'title' => "Kurikulum SI"
    ]);
});


Route::get('/kontak', function () {
    return view('contact', [
        'title' => "Kontak SI"
    ]);
});
