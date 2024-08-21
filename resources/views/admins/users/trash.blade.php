@extends('layout.admin')
@section('content')
    <h2>Trash Basket</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user_trashs as $user_trash)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user_trash->name }}</td>
                    <td>{{ $user_trash->email }}</td>
                    <td>{{ $user_trash->Role->name}}</td>
                    <td>{!! $user_trash->status == 1 ? '' : '<i class="fa-solid fa-circle" style="color: #ff0000;"></i>' !!} </td>
                    <td>
                        <a href="{{ route('users.restore', $user_trash->id) }}" class="btn btn-success btn-sm">Khôi phục</a>
                        <a href="{{ route('users.forceDelete', $user_trash->id) }}" onclick="return confirm('Xóa vĩnh viễn ?')" class="btn btn-danger btn-sm">Xóa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('users.index') }}" class="btn btn-success mb-3">List Product</a>
@endsection
