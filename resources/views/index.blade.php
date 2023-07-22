<footer>
    <div>
        <div>
            <h3>
                Pages
            </h3>

            <ul>
                <li>
                    <a href="/BlogTask/public/">
                        Home
                    </a>
                </li>
                <li>
                    <a href="/BlogTask/public/blog">
                        Blog Posts
                    </a>
                </li>
                <li>
                    <a href="/BlogTask/public/register">
                        Register
                    </a>
                </li>
                <li>
                    <a href="/BlogTask/public/login">
                        Login
                    </a>
                </li>
            </ul>
        </div>

        <div>
            <h3>
                More Information
            </h3>

            <ul>
                <li>
                    <a href="./about">
                        About us
                    </a>
                </li>
                <li>
                    <a href="./contact">
                        Contact
                    </a>
                </li>
            </ul>
        </div>

        <div>
            <h3>
                Latest Posts
            </h3>


                    <div class="col-8">

                @forelse($posts as $post)
                    <ul>
                        <li><a href="./blog/{{ $post->id }}">{{ ucfirst($post->title) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No blog Posts available</p>
                @endforelse
</div>
        </div>
    </div>
    <p>
        Copyright 1994-2023 S.S.
    </p>
</footer>
