@extends('layouts.app')
@section('content')
    <a href="{{ route('tag.create') }}" class="btn btn-sm btn-success mb-3">Add New Tag</a>
    <table class="table table-striped table-hover">
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>Action</td>
        </tr>
        @php
            $i = 1;
        @endphp
        @foreach($tags as $t)
        <tr>
            <td>
                @php
                echo $i;
                $i++;
                @endphp
            </td>
            <td>{{ $t->name }}</td>
            <td>
                <a href="{{ route('tag.edit',$t->id) }}" class="btn btn-sm btn-warning text-decoration-none">Update</a>
                <form action="{{ route('tag.destroy',$t->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
