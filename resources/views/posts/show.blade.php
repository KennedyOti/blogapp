@extends('layout')

@section('content')
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h1>{{ $post->title }}</h1>
        </div>
        <div class="card-body">
            <p>{{ $post->content }}</p>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to all posts</a>
        </div>
    </div>
@endsection
