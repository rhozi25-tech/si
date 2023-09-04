<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('program', [
            'title' => "Program SI",
            'posts' => Post::all()
        ]);
    }

    public function show($slug){
        return view('post', [
            'title' => "Halaman Post",
            'post' => Post::find($slug)
        ]);
    }
}
