@extends('layout')

@section('content')
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h1>Create Post</h1>
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

            <form action="{{ route('posts.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="title" required>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea name="content" class="form-control" id="content" rows="5" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
        </div>
    </div>
@endsection
