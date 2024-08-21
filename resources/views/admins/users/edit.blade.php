@extends('layout.admin')
@section('content')
<h2>Edit Account</h2>
{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
<form action="{{route('users.update', $user->id)}}" method="POST" enctype="multipart/form-data">
    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name"  value="{{$user->name}}">
    </div>

    <div class="form-group">
        <label for="avatar" class="form-label">Avatar</label>
        <input type="file" class="form-control" name="avatar">
        <img src="{{Storage::url($user->avatar)}}"  width="100px" alt="Không có ảnh">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="text" class="form-control" value="{{$user->password}}" readonly>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" value="{{$user->email}}">
    </div>

    <div class="form-group">
        <label for="number"><Nav></Nav>Number</label>
        <input type="text" class="form-control" name="number" value="{{$user->number}}">
    </div>

    <div class="form-group">
        <label for="gender" class="form-label">Gender</label>
        <select name="gender" id="gender" class="form-select">
            <option value="">Choose</option>
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option> 
        </select>
    </div>
    

    <div class="form-group">
        <label for="address"><Nav></Nav>Address</label>
        <input type="text" class="form-control" name="address" value="{{$user->address}}">
    </div>

    <div class="form-group">
        <label for="date"><Nav></Nav>Date</label>
        <input type="date" class="form-control" name="date" value="{{$user->date}}">
    </div>

    <div class="form-group">
        <label for="role">Role</label>
        <select class="form-control" name="role_id">
            <option value="" selected>Choose...</option>
            @foreach ($roles as $id => $name)
                <option value="{{$id}}" {{$user->role_id == $id ? 'selected' : ''}}>{{$name}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Edit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
</form>
@endsection