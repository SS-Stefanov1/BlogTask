<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    // show all blog posts
    public function index()
    {
        #return view('blog.index')->with('posts', Post::orderBy('updated_at', 'DESC')->get());

        $posts = BlogPost::all();
        return $posts;
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
    public function show(BlogPost $blogPost)
    {
        return $blogPost;
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
