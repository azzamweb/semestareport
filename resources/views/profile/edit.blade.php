@extends('layouts.app')

@section('content')

<div class="spacer"></div>
<div class="container">
    <h2>Edit Profile</h2>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH') <!-- Tambahkan ini -->
    
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">New Password</label>
        <input type="password" name="password" class="form-control">
    </div>

    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control">
    </div>

    <div class="mb-3">
        <label for="photo" class="form-label">Profile Photo</label>
        <input type="file" name="profile_picture" class="form-control">
        @if($user->profile_picture)
            <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile Photo" class="mt-2 rounded-circle" width="100" height="100">
        @endif
    </div>

    <button type="submit" class="btn btn-success">Update Profile</button>
    <a href="{{ route('profile') }}" class="btn btn-secondary">Cancel</a>
</form>

</div>

<div class="spacer"></div>
@endsection
