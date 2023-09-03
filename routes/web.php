<?php

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



Route::get('/program', function () {
    $program_post = Post::all();

    return view('program', [
        'title' => "Program SI",
        'posts' => $program_post
    ]);
});

Route::get('program/{slug}', function($slug){
    

    return view('post', [
        'title' => "Halaman Post",
        'post' => Post::find($slug)
    ]);
});


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
