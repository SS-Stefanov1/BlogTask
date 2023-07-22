@extends('layouts.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="./" class="btn btn-outline-primary btn-sm">Go back to blog list</a>
                <h1 class="display-one">{{ ucfirst($post->title) }}</h1>
                <p>{{ ucfirst($post->description) }}</p>
                <img src="{{ ucfirst($post->image_path) }}" alt="BlogImage" width="300" height="150">
                                <p>{{ ucfirst($post->created_at) }}</p>
                <p>{!! $post->body !!}</p>
                <hr>
                <a href="./{{ $post->id }}/edit" class="btn btn-outline-primary">Edit Post</a>
                <br><br>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete Post</button>
                </form>
            </div>
        </div>
    </div>

@endsection
