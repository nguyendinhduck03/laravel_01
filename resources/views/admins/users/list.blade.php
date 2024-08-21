@extends('layout.admin')
@section('content')
    <h2>Acount Management</h2>
    <a href="{{ route('users.create') }}" class="btn btn-success mb-3">Add Product</a>
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
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->Role->name }}</td>
                    <td>{!! $user->status == 1 ? '<i class="fa-solid fa-circle" style="color: #00c70d;"></i>' : '' !!} </td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-info btn-sm me-2">Detail</a>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Bạn có chắc muốn xóa không?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('users.trash') }}" class="btn btn-primary mb-3">Trash Basket</a>
@endsection
