@extends('layout')

@section('content')
    <div class="card">
        <div class="card-header bg-warning text-white">
            <h1>Edit Post</h1>
        </div>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('posts.update', $post->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}"
                        required>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea name="content" class="form-control" id="content" rows="5" required>{{ $post->content }}</textarea>
                </div>

                <button type="submit" class="btn btn-warning">Update Post</button>
            </form>
        </div>
    </div>
@endsection
