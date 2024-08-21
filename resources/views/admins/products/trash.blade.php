@extends('layout.admin')
@section('content')
    <h2>Trash Basket</h2>
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
            @foreach ($product_trashs as $pro_trash)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pro_trash->name }}</td>
                    <td>
                        @if ($pro_trash->ImageProduct->isNotEmpty() && $pro_trash->ImageProduct->first()->link)
                            <img src="{{ Storage::url($pro_trash->ImageProduct->first()->link) }}" alt="Ảnh chưa được thêm" width="70px" height="70px">
                        @else
                            <p class="text-muted">No image available</p>
                        @endif
                    </td>
                    <td>{{ $pro_trash->quantity }}</td>
                    <td>{{ $pro_trash->price }}</td>
                    <td>{{ $pro_trash->day_add }}</td>
                    <td>{{ $pro_trash->description }}</td>
                    <td>{{ $pro_trash->Category->name }}</td>
                    <td>{!! $pro_trash->status == 1 ? '' : '<i class="fa-solid fa-circle" style="color: #ff0000;"></i>' !!}</td>
                    <td>
                        <a href="{{ route('products.restore', $pro_trash->id) }}" class="btn btn-success btn-sm">Khôi phục</a>
                        <a href="{{ route('products.forceDelete', $pro_trash->id) }}" onclick="return confirm('Xóa vĩnh viễn ?')" class="btn btn-danger btn-sm">Xóa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        
    </table>
    <a href="{{ route('products.index') }}" class="btn btn-success mb-3">List Product</a>
@endsection
