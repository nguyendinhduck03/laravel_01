@extends('layout.admin')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Order Management</h1>
        <form class="filter-form" action="{{route('orders.index')}}" method="GET">
            @csrf
            <select class="form-select" aria-label="Order Status Filter" name="query" onchange="this.form.submit()">
                <option value="">Choose</option>
                <option value="">Tất cả</option>
                <option value="1">Đang xử lý</option>
                <option value="2">Đã nhận</option>
                <option value="3">Đã hủy</option>
                
            </select>
        </form>
    </div>
    <table class="table table-hover no-border">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Day</th>
                <th scope="col">Customer</th>
                <th scope="col">Order Amount</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $order->day }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ $order->order_amount }}</td>
                    <td>{{ $statusMapping[$order->status_order_id] ?? 'Unknown' }}</td>
                    <td>
                        <a href="{{route('orders.detail', $order->id)}}" class="action-link">View | </a>
                        <a href="{{route('orders.delete', $order->id)}}" onclick="return confirm('Chắc chứ ?')" class="action-link">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection