@extends('layout.admin')
@section('content')
    <h2>Product Management</h2>
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <a href="{{ route('products.create') }}" class="btn btn-success mb-3">Add Product</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Image</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Day_add</th>
                <th>Description</th>
                <th>Category</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->name }}</td>
                    <td>
                        @if ($product->ImageProduct->isNotEmpty())
                            @if ($product->ImageProduct->first()->link)
                                <img src="{{ Storage::url($product->ImageProduct->first()->link) }}" alt="Ảnh chưa được thêm" width="100px" height="100px">
                            @endif
                        @else
                            <span>Ảnh chưa được thêm</span>
                        @endif
                    </td>
                    
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->price}}</td>
                    <td>{{ $product->day_add }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->Category->name }}</td>
                    <td>{!! $product->status == 1 ? '<i class="fa-solid fa-circle" style="color: #00c70d;"></i>' : '' !!} </td>
                    {{-- <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm" >Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit"
                                onclick="return confirm('Bạn có chắc muốn xóa không?')">Delete</button>
                        </form>
                    </td> --}}
                    <td>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
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
    <a href="{{ route('products.trash') }}" class="btn btn-primary mb-3">Trash Basket</a>
@endsection
