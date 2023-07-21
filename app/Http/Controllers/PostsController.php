<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    // show posts
    public function index()
    {
        $posts = BlogPost::all();
        return view('blog.index', ['posts' => $posts]);
    }

    // show form to create a blog post
    public function create()
    {
        return view('blog.create');
    }

    // store a new post
    public function store(Request $request)
    {
        $newPost = BlogPost::create([
            'user_id' => 1,
            'title' => $request->input('title'),
            'description' => $request->input('body'),
            'slug' => "post-",
            'image_path' => "https://img.freepik.com/premium-vector/system-software-update-upgrade-concept-loading-process-screen-vector-illustration_175838-2182.jpg?w=2000",
        ]);

        return redirect('blog/' . $newPost->id);
    }

    // show a blog post
    public function show(BlogPost $blogPost)
    {
        return view('blog.show', ['post' => $blogPost]);
    }

    // show form to edit the post
    public function edit(BlogPost $blogPost)
    {
        return view('blog.edit', ['post' => $blogPost]);
    }

    // save the edited post
    public function update(Request $request, BlogPost $blogPost)
    {
        $blogPost->update([
            'title' => $request->title,
            'description' => $request->body,
        ]);

        return redirect('blog/' . $blogPost->id);
    }

    // delete a post
    public function destroy(BlogPost $blogPost)
    {
        $blogPost->delete();

        return redirect('/blog');
    }
}
