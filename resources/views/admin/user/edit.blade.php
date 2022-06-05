@extends('layouts.app')
@section('content')
    <a href="{{ route('home') }}" class="btn btn-sm btn-warning mb-3">Back</a>
    <form action="{{ url('admin/user/'.$user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Enter User Name</label>
            <input type="text" name="name" class="form-control" required value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <label for="">Enter Email</label>
            <input type="email" name="email" class="form-control" required value="{{ $user->email }}">
        </div>
        <div class="form-group">
            <label for="">Enter Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Enter Facebook Link</label>
            <input type="text" name="facebook_link" class="form-control" required value="{{ $user->profile->facebook_link }}">
        </div>
        <div class="form-group">
            <label for="">Enter Youtube Link</label>
            <input type="text" name="youtube_link" class="form-control" required value="{{ $user->profile->youtube_link }}">
        </div>
        <div class="form-group">
            <label for="">Choose Image</label>
            <input type="file" name="image" class="form-control">
            <img src="{{ asset('profile/'.$user->profile->profile_image) }}" alt="" style="width:150px; height: 150px;" class="mt-3 rounded-circle">
        </div>
        <div class="form-group">
            <label for="">Enter About</label>
            <textarea name="about" id="" cols="30" rows="4" class="form-control">{{ $user->profile->about }}</textarea>
        </div>
        <input type="submit" class="btn btn-sm btn-primary mt-3" value="Update">
    </form>
@endsection
