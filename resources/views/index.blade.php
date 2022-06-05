@extends('layouts.main')
@section('content')
<div class="row">
    @foreach ($posts as $p)
        <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="{{ asset('images/'.$p->featured) }}"
                        class="img-fluid rounded" />
                    <a href="{{ route('post.detail',$p->slug) }}">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-red">{{ $p->title }}</h5>
                    <small>Category:</small>
                    <a href="">
                        <span class="badge bg-secondary">{{ $p->category->name }}</span>
                    </a>
                    <small>Tag:</small>
                    @foreach ($p->tags as $t)
                        <a href="{{ route('post.tag',$t->slug) }}">
                            <span class="badge bg-success">{{ $t->name }}</span>
                        </a>
                    @endforeach
                    <p class="card-text mt-3">
                        @php
                            echo substr($p->content,0,150);
                        @endphp
                    </p>
                    <a href="{{ route('post.detail',$p->slug) }}" class="btn btn-primary">Read</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
