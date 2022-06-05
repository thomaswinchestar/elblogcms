@extends('layouts.app')
@section('content')
    <a href="{{ url('admin/user') }}" class="btn btn-sm btn-warning mb-3">Back</a>
    <form action="{{ route('user.storee') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Enter User Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">Enter User Email</label>
        <input type="text" name="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">Enter User Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <input type="submit" value="Add" class="btn btn-sm btn-primary">
    </form>
@endsection
