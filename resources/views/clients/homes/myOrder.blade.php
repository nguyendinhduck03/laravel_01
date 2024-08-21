@extends('layout.client')
@section('content')
<div class="container mt-5">
    <h1>My Orders</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Day</th>
                <th>Customer</th>
                <th>Order Amount</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($orders as $order)
           <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$order->day}}</td>
                <td>{{$order->user->name}}</td>
                <td>{{$order->order_amount}}</td>
                <td>
                    @if ($order->status_order_id == 1)
                        Đang xử lý
                    @elseif ($order->status_order_id == 2)
                        Đã nhận
                    @elseif ($order->status_order_id == 3)
                        Đã hủy
                    @else
                        Không xác định
                    @endif
                </td>
                
                <td>
                    <a href="{{route('myOrder.view', $order->id)}}" class="btn btn-info btn-sm">View</a>
                    <a href="{{route('myOrder.delete', $order->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('chắc chứ ?')">Delete</a>
                </td>
            </tr>
           @endforeach
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>
@endsection