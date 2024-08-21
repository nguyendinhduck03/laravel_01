@extends('layout.client')
@section('content')
<div class="breadcrumbs_aree breadcrumbs_bg mb-110" data-bgimg="assets/img/others/breadcrumbs-bg.png">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs_text">
                    <h1>Checkout</h1>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li> // Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs area end -->
<div class="checkout-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <form action="{{route('order.completed')}}" method="POST">
                    @csrf
                    <!-- Các trường ẩn cho sản phẩm -->
                        @foreach ($products as $index => $product)
                        <input type="hidden" name="products[{{ $index }}][product_id]" value="{{ $product['product_id'] }}">
                        <input type="hidden" name="products[{{ $index }}][name]" value="{{ $product['name'] }}">
                        <input type="hidden" name="products[{{ $index }}][quantity]" value="{{ $product['quantity'] }}">
                        <input type="hidden" name="products[{{ $index }}][price]" value="{{ $product['price'] }}">
                        <input type="hidden" name="products[{{ $index }}][total_price]" value="{{ $product['total_price'] }}">
                    @endforeach

                    <!-- Các trường ẩn khác -->
                    <input type="hidden" name="user_id" value="{{ $user_id }}">
                    <input type="hidden" name="order_amount" value="{{ $order_amount }}">
                    <div class="checkbox-form">
                        <h3>Billing Details</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Address <span class="required">*</span></label>
                                    <input placeholder="" type="text" name="address" value="{{$user->address}}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Name<span class="required">*</span></label>
                                    <input placeholder="" type="text" name="name" value="{{$user->name}}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Number <span class="required">*</span></label>
                                    <input placeholder="" type="text" name="number" value="{{$user->number}}" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Email</label>
                                    <input placeholder="" type="text" name="email" value="{{$user->email}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="different-address">
                            <div class="order-notes">
                                <div class="checkout-form-list checkout-form-list-2">
                                    <label>Order Notes</label>
                                    <textarea id="checkout-mess" cols="30" rows="10" name="note"
                                        placeholder="Notes about your order, e.g. special notes for delivery." required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order-button-payment">
                        <input value="Place order" type="submit">
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-12">
                <div class="your-order">
                    <h3>Your order</h3>
                    <div class="your-order-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="cart-product-name">Product</th>
                                    <th class="cart-product-total">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($products as $product)
                               <tr class="cart-item">
                                    <td class="cart-product-name"> {{$product['name']}}<strong
                                            class="product-quantity">
                                            × {{$product['quantity']}}</strong></td>
                                    <td class="cart-product-total"><span class="amount">{{$product['total_price']. " VND"}}</span></td>
                                </tr>
                               @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="cart-subtotal">
                                    <th>Cart Subtotal</th>
                                    <td><span class="amount">{{$order_amount." VND"}}</span></td>
                                </tr>
                                <tr class="order-total">
                                    <th>Order Total</th>
                                    <td><strong><span class="amount">{{$order_amount." VND"}}</span></strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="payment-method">
                        <div class="payment-accordion">
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="#payment-1">
                                        <h5 class="panel-title">
                                            <a href="#" class="" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true">
                                                Direct Bank Transfer.
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <p class="mb-3">Make your payment directly into our bank account. Please
                                                use your
                                                Order
                                                ID as the payment
                                                reference. Your order won’t be shipped until the funds have cleared
                                                in
                                                our account.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="#payment-2">
                                        <h5 class="panel-title">
                                            <a href="#" class="collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false">
                                                Cheque Payment
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <p class="mb-3">Make your payment directly into our bank account. Please
                                                use your
                                                Order
                                                ID as the payment
                                                reference. Your order won’t be shipped until the funds have cleared
                                                in
                                                our account.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="#payment-3">
                                        <h5 class="panel-title">
                                            <a href="#" class="collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false">
                                                PayPal
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <p>Make your payment directly into our bank account. Please use your
                                                Order
                                                ID as the payment
                                                reference. Your order won’t be shipped until the funds have cleared
                                                in
                                                our account.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection