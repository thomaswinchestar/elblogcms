@extends('layouts.app')
@section('content')
    <a href="{{ route('post.create') }}" class="btn btn-sm btn-success mb-3">Add New Post</a>
    <table class="table table-striped table-hover">
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>Action</td>
        </tr>
        @php
            $i = 1;
        @endphp
        @foreach($posts as $c)
        <tr>
            <td>
                @php
                echo $i;
                $i++;
                @endphp
            </td>
            <td>{{ $c->title }}</td>
            <td>
                <a href="{{ route('post.show',$c->id) }}" class="badge rounded-pill bg-primary text-decoration-none">View</a>
                <a href="{{ route('post.edit',$c->id) }}" class="badge rounded-pill bg-warning text-decoration-none">Edit</a>
                <form action="{{ route('post.destroy',$c->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="d-inline badge rounded-pill bg-danger delete-post">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
