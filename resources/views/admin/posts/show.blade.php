@extends('layouts.app')
@section('content')
    <a href="{{ route('post.create') }}" class="btn btn-sm btn-success mb-3">Add New Post</a>
    <a href="{{ route('post.index') }}" class="btn btn-sm btn-primary mb-3">View All Posts</a>
{{--    <p>Title : {{ $post->title }}</p>--}}
{{--    <p>Category : {{ $post->category->name }}</p>--}}
{{--    <p>Slug : {{ $post->slug }}</p>--}}
{{--    <p class="text-justify">Description : {{ $post->content }}</p>--}}
{{--    <p>Image : <img src="{{ asset('images/'.$post->featured) }}" alt="" style="width:800px;"></p>--}}

    <div class="card text-white bg-dark mb-3">
        <div class="card-body">
            <img src="{{ asset('images/'.$post->featured) }}" alt="" style="width:100%;" class="mb-3">
            <h5 class="card-title">{{ $post->title }}</h5>
            <h6 class="card-subtitle text-muted mb-3">{{ $post->category->name }}</h6>
            <p class="card-text text-justify mb-2">{{ $post->content }}</p>
        </div>
    </div>
@endsection
