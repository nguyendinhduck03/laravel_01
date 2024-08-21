@extends('layout.admin')
@section('content')
    <h2>Categories Management</h2>
    <a href="{{ route('categories.create') }}" class="btn btn-success mb-3">Add Categories</a>
    <table class="table table-striped">
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Image</th>
            <th>Description</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <img src="{{ Storage::url($category->image) }}" alt="Ảnh chưa được thêm"
                            width="100px" height="100px">
                    </td>
                    <td>{{ $category->description }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="ms-1 d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit"
                                onclick="return confirm('Bạn có chắc muốn xóa không?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table
@endsection
