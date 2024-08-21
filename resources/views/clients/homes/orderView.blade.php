@extends('layout.client')
@section('content')
<div class="container mt-5">
    <h2>Detail Order</h2>
    
    <div class="card mb-3">
        <div class="card-header">
            Customer Information
        </div>
        <div class="card-body">
            <p><strong>Customer:</strong>{{$order->user->name}}</p>
            <p><strong>Email:</strong>{{$order->user->email}}</p>
            <p><strong>Address:</strong>{{$order->user->address}}</p>
            <p><strong>Number:</strong> {{$order->user->number}}</p>
            <p><strong>Note:</strong>{{$order->note}}</p>
            <p><strong>Order Amount:</strong> {{$order->order_amount}}</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            Product Information
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detail_orders as $do)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$do->name}}</td>
                        <td>{{$do->quantity}}</td>
                        <td>{{$do->price}}</td>
                        <td>{{$do->total_price}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="d-flex justify-content-between mt-4">
        <a href="{{route('my-order')}}" class="btn btn-secondary">Back</a>
        @if ($order->status_order_id == 1)
        <div>
            <a href="{{route('myOrder.accept', $order->id)}}" type="button" class="btn btn-success me-2">Mark as Received</a>
            <a href="{{route('myOrder.cancel', $order->id)}}" type="button" class="btn btn-danger">Cancel Order</a>
        </div>
        @endif 
    </div>
</div>
@endsection