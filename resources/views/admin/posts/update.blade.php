@extends('layouts.app')
@section('content')
    <a href="{{ route('post.index') }}" class="btn btn-sm btn-warning mb-3">Back</a>
    <form action="{{ route('post.update',$post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleSelect1" class="form-label mt-4">Choose Category</label>
            <select class="form-select" id="exampleSelect1" name="category_id">
                @foreach($categories as $c)
                    <option value="{{ $c->id }}" @if($c->id == $post->category_id) selected  @endif>{{ $c->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Choose Tag</label>
            <div class="checkbox">
                @foreach($tags as $t)
                    <label for="">
                        {{$t->name}}
                        <input type="checkbox" name="tags[]" value="{{ $t->id }}"
                        @foreach($post->tags as $tag)
                            @if($tag->id == $t->id)
                                checked
                            @endif
                        @endforeach
                        >
                    </label>
                @endforeach
            </div>
        </div>
        <div class="form-group">
            <label for="">Enter Post Title</label>
            <input type="text" name="title" class="form-control" value="{{ $post->title }}" required>
        </div>
        <div class="form-group">
            <label for="">Enter Description</label>
            <textarea name="description" id="" cols="30" rows="4" required class="form-control">{{ $post->content }}</textarea>
        </div>
        <div class="form-group">
            <label for="formFile" class="form-label">Choose Featured Image</label>
            <input class="form-control mb-3" type="file" id="formFile" name="image">
            <img src="{{ asset('images/'.$post->featured) }}" alt="" style="width: 100%;border-radius: 5px;">
        </div>
        <input type="submit" class="btn btn-sm btn-primary mt-3" value="Update">
    </form>
@endsection
