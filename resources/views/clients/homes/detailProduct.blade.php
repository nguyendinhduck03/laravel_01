@extends('layout.client')
@section('content')
<div class="single_product_section mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="single_product_gallery">
                    <div class="product_gallery_inner d-flex">
                        <!-- Main Image -->
                        <div class="product_gallery_main_img">
                            <img id="main-image" src="{{ Storage::url($product->imageproduct->first()->link) }}" alt="Main Image">
                        </div>

                        <!-- Thumbnail Images -->
                        <div class="product_gallery_btn_img">
                            @foreach ($product->imageproduct as $image)
                                <a class="gallery_btn_img_list" href="#" data-image="{{ Storage::url($image->link) }}">
                                    <img src="{{ Storage::url($image->link) }}" alt="Thumbnail">
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product_details_sidebar">
                    <h2 class="product__title">{{$product->name}}</h2>
                    <div class="price_box">
                        <span class="current_price">{{$product->price ." VND"}}</span>
                    </div>
                    <p class="product_details_desc">{{$product->description}}</p>
                    <div class="product_pro_button quantity d-flex align-items-center">
                        <form action="{{route('cart.add')}}" method="POST">
                            @csrf
                            <div class="pro-qty border">
                                <a href="#" class="qty-btn minus" style="background-color: gray">-</a>
                                <input type="text" class="qty-input" value="1" name="quantity">
                                <input type="hidden" value="{{$product->id}}" name="product_id" id="">
                                <a href="#" class="qty-btn plus" style="background-color: gray">+</a>
                            </div>
                            <button class="btn btn-primary" type="submit">add to cart</button>
                        </form>
                        <a class="wishlist__btn" href="#"><i class="pe-7s-like"></i></a>
                        <a class="serch_btn" href="#"><i class="pe-7s-search"></i></a>
                    </div>
                    <div class="product_paypal">
                        <img src="{{asset('assets/client/img/others/paypal.png') }}" alt="payments">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- product details section end-->

<!-- product tab section start -->
<div class="product_tab_section mb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_tab_navigation">
                    <ul class="nav justify-content-center"><h2>Reviews</h2></ul>
                </div>
                <div class="product_page_content_inner tab-content">
                    <div class="tab-pane fade active show" id="reviews" role="tabpanel">
                        <div class="reviews__wrapper">
                            <h2>Write Your Own Review</h2>
                            <div class="customer__reviews d-flex justify-content-between mb-20">
                                <div class="customer_reviews_left">
                                    <div class="comment__title">
                                        <h2>Add a review </h2>
                                        <p>Chỉ khi đăng nhập, bạn mới có thể viết review về sản phẩm. 
                                        </p>    
                                    </div>
                                </div>
                                <div class="customer_reviews_right">
                                    <h2 class="reviews__title"> Recent Customer Reviews</h2>
                                   @foreach ($comments as $comment)
                                   <div class="reviews__desc">
                                    <h3>{{$comment->user->name}}</h3>
                                    <span>{{$comment->day}}</span>
                                    <p>{{$comment->content}}</p> <br>
                                </div>
                                   @endforeach
                                </div>
                            </div>

                            @if (Auth::check())
                            <div class="product_review_form">
                                <form action="{{route('comment.product', $product->id)}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="review_comment">Your review </label>
                                            <textarea class="border" name="content" id="review_comment"></textarea>
                                        </div>
                                    <button class="btn custom-btn text-white" data-hover="Submit"
                                        type="submit">Submit</button>
                                </form>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product tab section end -->

<!-- product section start -->
<div class="product_section mb-80">
    <div class="container">
        <div class="section_title text-center mb-55">
            <h2>Related Products</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor
                incididunt ut
                labore et dolore magna</p>
        </div>
        <div class="row product_slick slick_navigation slick__activation" data-slick='{
            "slidesToShow": 4,
            "slidesToScroll": 1,
            "arrows": true,
            "dots": false,
            "autoplay": false,
            "speed": 300,
            "infinite": true ,  
            "responsive":[ 
              {"breakpoint":992, "settings": { "slidesToShow": 3 } }, 
              {"breakpoint":768, "settings": { "slidesToShow": 2 } }, 
              {"breakpoint":500, "settings": { "slidesToShow": 1 } }  
             ]                                                     
        }'>
            @foreach ($relateds as $related)
            <div class="col-lg-3">
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a href="{{route('detail.product', $related->id)}}"><img src="{{ Storage::url($related->imageproduct->first()->link) }}" alt=""></a>
                            <div class="action_links">
                                <ul class="d-flex justify-content-center">
                                    <li class="add_to_cart"><a href="" title="Add to cart"> <span
                                                class="pe-7s-shopbag"></span></a></li>
                                    <li class="wishlist"><a href="" title="Add to Wishlist"><span
                                                class="pe-7s-like"></span></a></li>
                                    <li class="quick_button"><a href="{{route('detail.product', $related->id)}}" title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#modal_box"> <span class="pe-7s-look"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <figcaption class="product_content text-center">
                            <h4><a href="single-product.html">{{$related->name}}</a></h4>
                            <div class="price_box">
                                <span class="current_price">{{$related->price ." VND"}}</span>
                            </div>
                        </figcaption>
                    </figure>
                </article>
            </div>
            @endforeach
            
        </div>
    </div>
</div>
<script>
    document.querySelectorAll('.gallery_btn_img_list').forEach(function(thumbnail) {
        thumbnail.addEventListener('click', function(event) {
            event.preventDefault();
            var newSrc = this.getAttribute('data-image');
            document.getElementById('main-image').src = newSrc;
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const minusBtn = document.querySelector('.minus');
        const plusBtn = document.querySelector('.plus');
        const qtyInput = document.querySelector('.qty-input');

        minusBtn.addEventListener('click', function(event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của thẻ <a>
            let currentValue = parseInt(qtyInput.value);
            if (currentValue > 1) {
                qtyInput.value = currentValue - 1;
            }
        });

        plusBtn.addEventListener('click', function(event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của thẻ <a>
            let currentValue = parseInt(qtyInput.value);
            qtyInput.value = currentValue + 1;
        });
    });
    
</script>
    
@endsection