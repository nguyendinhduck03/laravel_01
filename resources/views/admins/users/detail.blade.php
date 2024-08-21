@extends('layout.admin')

@section('content')
<div class="container">
    <h1>User Details</h1>
    <div class="card">
        <div class="card-header">
            <h3>{{ $user->name }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Role:</strong> {{ $user->role->name }}</p>
            <p><strong>Number:</strong> {{ $user->number }}</p>
            <p><strong>Gender:</strong> {{ $user->gender }}</p>
            <p><strong>Address:</strong> {{ $user->address }}</p>
            <p><strong>Date:</strong> {{ $user->date }}</p>
            @if($user->avatar)
                <p><strong>Avatar:</strong></p>
                <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar" style="width: 150px; height: 150px;">
            @endif
        </div>
        <div class="card-footer">
            <a href="{{ route('users.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection
