
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/style.css') }}">


<footer class="red">
    <div class="bg">
    <table class="menu">
        <tr>
            <td>
                <a href="/BlogTask/public/">Home</a>
                <a href="/BlogTask/public/blog">Blog Posts</a>
                <a href="/BlogTask/public/register">Register</a>
                <a href="/BlogTask/public/login">Login</a>
            </td>
        </tr>
    </table>


    <div class="blogs">
        <h3>Latest Posts</h3>
        @forelse($posts as $post)
            <table class="blogs_inner">
                <tr>
                    <td><a href="./blog/{{ $post->id }}">{{ ucfirst($post->title) }}</a></td>
                </tr>

                <tr>
                    <td width="350px"><img src="{{ ucfirst($post->image_path) }}" alt="BlogImage" width="250px"></td>
                    <td width="650px"><a href="./blog/{{ $post->id }}">{{ ucfirst($post->description) }}</a></td>
                </tr>
            </table>
        @empty
            <p class="text-warning">No blog Posts available</p>
        @endforelse
     </div>


    <table  class="menu">
        <tr>
            <td>
                <a href="./about">About us</a>
                <a href="./contact">Contact</a>
            </td>
        </tr>
    </table>
    </div>

    <p class="footer">Copyright 1994-2023 S.S.</p>
</footer>
