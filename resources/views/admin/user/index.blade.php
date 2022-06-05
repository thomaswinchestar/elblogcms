@extends('layouts.app')
@section('content')
    <a href="{{ route('home') }}" class="btn btn-sm btn-warning mb-3">Back</a>
    <a href="{{ route('user.c') }}" class="btn btn-sm btn-success mb-3">Add New User</a>
    <table class="table table-striped table-hover">
        <tr>
            <td>No</td>
            <td>Avatar</td>
            <td>Name</td>
            <td>Role</td>
            <td>Set Permission</td>
        </tr>
        @php $i = 1; @endphp
        @foreach($users as $c)
        <tr>
            <td>@php echo $i; $i++; @endphp</td>
            <td>
                <img src="{{ asset('profile/'. $c->profile->profile_image) }}" width="50" class="rounded-circle" alt="">
            </td>
            <td>{{ $c->name }}</td>
            <td>
                @if($c->is_admin == 1)
                    Admin
                    @else
                    User
                @endif
            </td>
            <td>
                @if($c->is_admin == 0)
                    <a href="{{ route('user.edit.role',[1,$c->id]) }}" class="badge bg-warning text-decoration-none">Set Admin</a>
                    @else
                    <a href="{{ route('user.edit.role',[0,$c->id]) }}" class="badge bg-success text-decoration-none">Set User</a>
                @endif
            </td>
        </tr>
        @endforeach
    </table>
@endsection
