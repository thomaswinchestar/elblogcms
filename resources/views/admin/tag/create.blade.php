@extends('layouts.app')
@section('content')
    <a href="{{ route('tag.index') }}" class="btn btn-sm btn-warning mb-3">Back</a>
    <form action="{{ route('tag.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Enter Tag Name</label>
            <input type="text" name="name" class="form-control" required>
            <input type="submit" class="btn btn-sm btn-primary mt-3" value="Add">
        </div>
    </form>
@endsection
