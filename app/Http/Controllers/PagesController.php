<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;

class PagesController extends Controller
{
    public function index()
    {
        $posts = BlogPost::orderBy('created_at', 'DESC')->take(10)->get();
        return view('index', [
            'posts' => $posts,
        ]);
        #return view('index');
    }
}
