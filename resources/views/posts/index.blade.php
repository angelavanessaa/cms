@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('posts.create') }}" class="btn btn-success">Create Post</a>
    </div>

    <div class="card">
        <div class="card-header">Posts</div>
            <div class="card-body">
                @if($posts->count() > 0)
                    <table class="table">
                        <thead>
                            <th>Image</th>
                            <th>Title</th>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td><img src="storage/{{$post->image}}" class="img-thumbnail img-responsive" width="100px" height="100px" /></td>
                                    <td>{{ $post->title }}</td>

                                    @if(!$post->trashed())
                                    <td>
                                        <a href="" class="btn btn-info btn-sm">Edit</a>
                                    </td>
                                    @endif

                                    <td>
                                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn-danger btn-sm">
                                                {{ $post->trashed() ? 'Delete Permanently' : 'Trash' }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <h3 class="text-center">No Posts Yet</h3>
                @endif
            </div>
        </div>
    </div>
@endsection