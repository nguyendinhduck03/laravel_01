@extends('layout.admin')
@section('content')
    <h2>Comment Management</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Product</th>
                <th>Comments</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>
                    <img src="{{Storage::url($product->imageproduct->first()->link)}}" alt="Không có ảnh" width="70" height="70">
                </td>
                <td>{{$product->name}}</td>
                <td>{{$product->comment_count}}</td>
                <td>
                    <a href="{{route('comments.show', $product->id)}}" class="btn btn-info mb-3">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
