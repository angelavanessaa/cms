<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="list-group">
                <ul class="list-group">
                <li class="list-group-item">
                        <a href="{{ route('posts.index') }}">Posts</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('categories.index') }}">Categories</a>
                    </li>
                </ul>

                <ul class="list-group mt-5">
                    <li class="list-group-item">
                        <a href="{{ route('trashed-posts.index') }}">Trashed Posts</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-10">
            @yield('content')
        </div>
    </div>
</div>
