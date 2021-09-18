@extends('layouts.app')
@section('content')
    <a href="{{ route('category.index') }}" class="btn btn-sm btn-warning mb-3">Back</a>
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Enter Category Name</label>
            <input type="text" name="category" class="form-control" required>
            <input type="submit" class="btn btn-sm btn-primary mt-3" value="Add">
        </div>
    </form>
@endsection
