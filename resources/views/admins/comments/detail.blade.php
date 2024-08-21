@extends('layout.admin')
@section('content')
    <h2>{{$product->name}}</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>User</th>
                <th>Content</th>
                <th>Day</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comments as $comment)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$comment->user->name}}</td>
                <td>{{$comment->content}}</td>
                <td>{{$comment->day}}</td>
                <td>{{$comment->status ? 'Hoạt động' : "Dừng hoạt động"}}</td>
                <td>
                    <form action="{{ route('comments.update', $comment->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('PUT')
                        <button type="submit" style="background-color: {{ $comment->status ? 'green' : 'red' }}; color: white; border: none; padding: 5px;">
                            <i class="fa-solid fa-toggle-{{ $comment->status ? 'on' : 'off' }}"></i>
                        </button>
                    </form>
                    <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa?');" style="background-color: red; color: white; border: none; padding: 5px;">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('comments.index') }}" class="btn btn-success mb-3">List Comment</a>
@endsection
