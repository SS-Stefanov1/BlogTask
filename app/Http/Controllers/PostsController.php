<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    // show all blog posts
    public function index()
    {
        return view('blog.index')->with('posts', Post::orderBy('updated_at', 'DESC')->get());
    }

    // show form to create a blog post
    public function create()
    {

    }

    // store a new post
    public function store(Request $request)
    {

    }

    // show a blog post
    public function show(string $id)
    {

    }

    // show form to edit the post
    public function edit(string $id)
    {

    }

    // save the edited post
    public function update(Request $request, string $id)
    {

    }

    // delete a post
    public function destroy(string $id)
    {

    }
}
