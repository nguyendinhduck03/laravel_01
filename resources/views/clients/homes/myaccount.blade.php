@extends('layout.client')
@section('content')
<div class="container mt-5">
    <h1>My Account</h1>
    <form action="{{route('account.update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-md-5 text-center">
                <img src="{{Storage::url($user->avatar)}}" alt="Avatar" class="avatar mb-3">
                <div class="file-input-wrapper">
                    <button class="btn btn-primary w-100">Change Avatar</button>
                    <input type="file" class="file-input" name="avatar">
                </div>
            </div>
            <div class="col-md-7">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
                </div>
                <div class="mb-3">
                    <label for="number" class="form-label">Number</label>
                    <input type="text" class="form-control" id="number" name="number" value="{{$user->number}}">
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-control" id="gender" name="gender">
                        <option value="Nam" {{$user->gender == 'Nam' ? 'selected' : ''}}>Nam</option>
                        <option value="Nữ" {{$user->gender == 'Nữ' ? 'selected' : ''}}>Nữ</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{$user->address}}">
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{$user->date}}">
                </div>
                <button type="submit" class="btn btn-success">Save Changes</button>
            </div>
        </div>
    </form>
</div>

@endsection