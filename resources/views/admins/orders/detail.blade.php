@extends('layout.admin')
@section('content')
<div class="container">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <h1>Detail Order</h1>
    <div class="row mt-4">
        <div class="col-md-6">
            <h3>Customer Information</h3>
            <p><strong>Customer:</strong> {{$order->name_user}}</p>
            <p><strong>Email:</strong> {{$order->email_user}}</p>
            <p><strong>Address:</strong> {{$order->address_user}}</p>
            <p><strong>Number:</strong> {{$order->number_user}}</p>
            <p><strong>Note:</strong> {{$order->note}}</p>
            <p><strong>Order Amount:</strong> {{$order->order_amount}}</p>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <h3>Product Information</h3>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Total Price</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($detail_orders as $do)
                    <tr>
                        <th>{{$loop->iteration}}</th>
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
    <div class="row mt-4">
        <div class="col-md-6">
            <a href="{{route('orders.index')}}" type="button" class="btn btn-success">Order List</a>
        </div>
        @if ($order->status_order_id == 1) 
        <div class="col-md-6 text-end">
            <a href="{{route('orders.cancel', $order->id)}}" type="button" class="btn btn-danger">Cancel</a>
            <a href="{{route('orders.accept', $order->id)}}" type="button" class="btn btn-primary">Accept</a>
        </div>
        @endif
    </div>
</div>

@endsection
