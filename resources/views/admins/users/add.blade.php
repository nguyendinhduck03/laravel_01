@extends('layout.admin')
@section('content')
<h2>Add new Account</h2>
{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
<form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" @error('name')
            is-invalid
        @enderror  value="{{old('name')}}">
        @error('name')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" value="{{old('email')}}">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="text" class="form-control" name="password" value="{{old('password')}}">
    </div>

    <div class="form-group">
        <label for="role">Role</label>
        <select class="form-control" name="role_id">
            <option value="" selected>Choose...</option>
            @foreach ($roles as $id => $name)
                <option value="{{$id}}" {{old('role_id') == $id ? 'selected' : ''}}>{{$name}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Thêm</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
</form>
@endsection