@extends('layouts.app')
@section('content')
    <a href="{{ route('category.create') }}" class="btn btn-sm btn-success mb-3">Add New Category</a>
    <table class="table table-striped table-hover">
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>Action</td>
        </tr>
        @php
            $i = 1;
        @endphp
        @foreach($category as $c)
        <tr>
            <td>
                @php
                echo $i;
                $i++;
                @endphp
            </td>
            <td>{{ $c->name }}</td>
            <td>
                <a href="{{ route('category.edit',$c->id) }}" class="btn btn-sm btn-warning text-decoration-none">Update</a>
                <form action="{{ route('category.destroy',$c->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
