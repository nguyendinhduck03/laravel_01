@extends('layout.client')
@section('content')
<div class="breadcrumbs_aree breadcrumbs_bg mb-110" data-bgimg="assets/img/others/breadcrumbs-bg.png">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs_text">
                    <h1>Cart</h1>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li> // Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs area end -->
<div class="cart-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{route('checkout')}}" method="POST">
                    @csrf
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="product_remove">remove</th>
                                    <th class="product_remove">Image</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="product-price">Unit Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total = 0;
                                @endphp
                               @foreach ($products as $product)
                                    <tr>
                                        <input type="hidden" name="products[{{ $loop->iteration }}][product_id]" value="{{ $product->product->id }}">
                                        <input type="hidden" name="products[{{ $loop->iteration }}][name]" value="{{ $product->product->name }}">
                                        <input type="hidden" name="products[{{ $loop->iteration }}][quantity]" value="{{ $product->quantity }}">
                                        <input type="hidden" name="products[{{ $loop->iteration }}][price]" value="{{ $product->product->price }}">
                                        <input type="hidden" name="products[{{ $loop->iteration }}][total_price]" value="{{ $product->product->price * $product->quantity }}">
                                        
                                    <td class="product_remove">
                                        <a href="{{route('cart.delete', $product->id)}}">
                                            <i class="pe-7s-close" title="Remove"></i>
                                        </a>
                                    </td>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="{{ Storage::url($product->product->imageproduct->first()->link) }}" 
                                                alt="Cart Thumbnail" 
                                                style="height: 70px;">
                                        </a>
                                    </td>
                                    <td class="product-name"><a href="#">{{$product->product->name}}</a>
                                    </td>
                                    <td class="product-price"><span class="amount">{{$product->product->price." VND"}}</span></td>
                                    <td class="product_pro_button quantity">
                                        <div class="pro-qty border">
                                            <input type="text" value="{{$product->quantity}}">
                                        </div>
                                    </td>
                                    <td class="product-subtotal"><span class="amount">{{$product->product->price * $product->quantity." VND"}}</span></td>
                                </tr>
                                @php
                                    $total += $product->product->price * $product->quantity;
                                @endphp
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <ul>
                                    <li>Total <span>{{$total . " VND"}}</span></li>
                                </ul>   
                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                <input type="hidden" name="order_amount" value="{{$total}}">
                                <button type="submit" class="btn btn-dark text-white">Proceed to checkout</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection