@extends('layout.client')
@section('content')


    <!--slide banner section start-->
    <div class="hero_banner_section d-flex align-items-center mb-110">
        <div class="container">
            <div class="hero_banner_inner">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="hero_content">
                            <h3 class="wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s"><span>70%</span>
                                Sale Off</h3>
                            <h1 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">Quality Products
                                Bakery Items</h1>
                            <a class="btn btn-link wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s"
                                href="shop-left-sidebar.html">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="hero_shape_banner">
                            <img class="banner_keyframes_animation wow" src="{{asset('assets/client/img/bg/hero-banner-shape.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero_mini_shape shape1">
            <img src="{{asset('assets/client/img/others/hero-mini-shape1.png') }}" alt="">
        </div>
        <div class="hero_mini_shape shape2">
            <img src="{{asset('assets/client/img/others/hero-mini-shape2.png') }}" alt="">
        </div>
        <div class="hero_mini_shape shape3">
            <img src="{{asset('assets/client/img/others/hero-mini-shape3.png') }}" alt="">
        </div>
        <div class="hero_mini_shape shape4">
            <img src="{{asset('assets/client/img/others/hero-mini-shape4.png') }}" alt="">
        </div>
        <div class="hero_mini_shape shape5">
            <img src="{{asset('assets/client/img/others/hero-mini-shape5.png') }}" alt="">
        </div>
    </div>
    <!--slider area end-->

    <!-- service section start-->
    <div class="service_section mb-86">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="services_section_inner d-flex justify-content-between">
                        @foreach ($categories as $category)
                            <div class="single_services one text-center wow fadeInUp" data-wow-delay="0.1s"
                                data-wow-duration="1.1s">
                                <div class="services_thumb">
                                    <img src="{{ Storage::url($category->image) }}" alt="">
                                </div>
                                <div class="services_content">
                                    <h3><a href="shop-left-sidebar.html">{{$category->name}}</a></h3>
                                    <p>{{ \Illuminate\Support\Str::limit($category->description, 100, '...') }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service section end-->

    <!-- banner section  start -->
    <div class="banner_section mb-105">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                        <div class="banner_thumb">
                            <a href="#"><img src="{{asset('assets/client/img/bg/banner1.png') }}" alt=""></a>
                            <div class="banner_text">
                                <h3><span>70%</span> Sale Off</h3>
                                <h2>Best Quality <br>
                                    Products</h2>
                                <a class="btn btn-link" href="shop-left-sidebar.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                        <div class="banner_thumb">
                            <a href="#"><img src="{{asset('assets/client/img/bg/banner2.png') }}" alt=""></a>
                            <div class="banner_text">
                                <h3><span>25%</span> Sale Off</h3>
                                <h2>Hot & Spicy <br>
                                    Pastry</h2>
                                <a class="btn btn-link" href="shop-left-sidebar.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner section  end -->

    <!-- product section start -->
    <div class="product_section mb-80 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
        <div class="container">
            <div class="product_header">
                <div class="section_title text-center">
                    <h2>Favorite Products</h2>
                </div>
            </div>
            <div class="tab-content product_container">
                <div class="tab-pane fade show active" id="features" role="tabpanel">
                    <div class="product_gallery">
                        <div class="row">
                            @foreach ($products as $product)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            @if ($product->imageproduct->first())
                                                <a href="{{route('detail.product', $product->id)}}">
                                                    <div class="image-container">
                                                        <img src="{{ Storage::url($product->imageproduct->first()->link) }}" alt="">
                                                    </div>
                                                </a>
                                            @else
                                                <a href="{{route('detail.product', $product->id)}}">
                                                    <div class="image-container">
                                                        <img src="path/to/default-image.jpg" alt="">
                                                    </div>
                                                </a>
                                            @endif
                                          
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="{{route('detail.product', $product->id)}}">{{ $product->name }}</a></h4>
                                            <p class="product_price" style="color: red">{{ $product->price." VND" }}</p>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product section end -->

    <!-- banner fullwidth section start -->
    <div class="banner_fullwidth_section mb-105 " data-bgimg="{{asset('assets/client/img/bg/banner-fullwidth1.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner_discount_text text-center">
                        <h3 class="wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s"><span>45%
                            </span> Sale
                            Off</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">Best Quality
                            Bakery
                            Products</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s">Lorem ipsum
                            dolor sit
                            amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt ut
                            labore et
                            dolore magna</p>
                        <a class="btn btn-link wow fadeInUp" href="shop-left-sidebar.html" data-wow-delay="0.3s"
                            data-wow-duration="1.3s">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner fullwidth section end -->

    <!-- product section start -->
    <div class="product_section mb-80 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
        <div class="container">
            <div class="section_title text-center mb-55">
                <h2>Best Seller</h2>
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
                <div class="col-lg-3">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a href="single-product.html"><img src="{{asset('assets/client/img/product/product1.png') }}" alt=""></a>
                                <div class="action_links">
                                    <ul class="d-flex justify-content-center">
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"> <span
                                                    class="pe-7s-shopbag"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                    class="pe-7s-like"></span></a></li>
                                        <li class="quick_button"><a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#modal_box">
                                                <span class="pe-7s-look"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <figcaption class="product_content text-center">
                                <h4><a href="single-product.html">Products Name Here</a></h4>
                                <div class="price_box">
                                    <span class="current_price">$22.00</span>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a href="single-product.html"><img src="{{asset('assets/client/img/product/product2.png') }}" alt=""></a>
                                <div class="action_links">
                                    <ul class="d-flex justify-content-center">
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"> <span
                                                    class="pe-7s-shopbag"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                    class="pe-7s-like"></span></a></li>
                                        <li class="quick_button"><a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#modal_box">
                                                <span class="pe-7s-look"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <figcaption class="product_content text-center">
                                <h4><a href="single-product.html">Lorem, ipsum dolor.</a></h4>
                                <div class="price_box">
                                    <span class="current_price">$24.00</span>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a href="single-product.html"><img src="{{asset('assets/client/img/product/product3.png') }}" alt=""></a>
                                <div class="action_links">
                                    <ul class="d-flex justify-content-center">
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"> <span
                                                    class="pe-7s-shopbag"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                    class="pe-7s-like"></span></a></li>
                                        <li class="quick_button"><a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#modal_box">
                                                <span class="pe-7s-look"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <figcaption class="product_content text-center">
                                <h4><a href="single-product.html">Praesentium vero nesciu.</a></h4>
                                <div class="price_box">
                                    <span class="current_price">$28.00</span>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a href="single-product.html"><img src="{{asset('assets/client/img/product/product4.png') }}" alt=""></a>
                                <div class="action_links">
                                    <ul class="d-flex justify-content-center">
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"> <span
                                                    class="pe-7s-shopbag"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                    class="pe-7s-like"></span></a></li>
                                        <li class="quick_button"><a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#modal_box">
                                                <span class="pe-7s-look"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <figcaption class="product_content text-center">
                                <h4><a href="single-product.html">Sit amet consectetur elit.</a></h4>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a href="single-product.html"><img src="{{asset('assets/client/img/product/product5.png') }}" alt=""></a>
                                <div class="action_links">
                                    <ul class="d-flex justify-content-center">
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"> <span
                                                    class="pe-7s-shopbag"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                    class="pe-7s-like"></span></a></li>
                                        <li class="quick_button"><a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#modal_box">
                                                <span class="pe-7s-look"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <figcaption class="product_content text-center">
                                <h4><a href="single-product.html">Atque earum ullam non.</a></h4>
                                <div class="price_box">
                                    <span class="current_price">$35.00</span>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a href="single-product.html"><img src="{{asset('assets/client/img/product/product6.png') }}" alt=""></a>
                                <div class="action_links">
                                    <ul class="d-flex justify-content-center">
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"> <span
                                                    class="pe-7s-shopbag"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                    class="pe-7s-like"></span></a></li>
                                        <li class="quick_button"><a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#modal_box">
                                                <span class="pe-7s-look"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <figcaption class="product_content text-center">
                                <h4><a href="single-product.html">Modi excepturi ut ipsam.</a></h4>
                                <div class="price_box">
                                    <span class="current_price">$38.00</span>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a href="single-product.html"><img src="{{asset('assets/client/img/product/product7.png') }}" alt=""></a>
                                <div class="action_links">
                                    <ul class="d-flex justify-content-center">
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"> <span
                                                    class="pe-7s-shopbag"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                    class="pe-7s-like"></span></a></li>
                                        <li class="quick_button"><a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#modal_box">
                                                <span class="pe-7s-look"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <figcaption class="product_content text-center">
                                <h4><a href="single-product.html">Provident odio, are Unde.</a></h4>
                                <div class="price_box">
                                    <span class="current_price">$28.00</span>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a href="single-product.html"><img src="{{asset('assets/client/img/product/product1.png') }}" alt=""></a>
                                <div class="action_links">
                                    <ul class="d-flex justify-content-center">
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"> <span
                                                    class="pe-7s-shopbag"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                    class="pe-7s-like"></span></a></li>
                                        <li class="quick_button"><a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#modal_box">
                                                <span class="pe-7s-look"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <figcaption class="product_content text-center">
                                <h4><a href="single-product.html">Products Name Here</a></h4>
                                <div class="price_box">
                                    <span class="current_price">$22.00</span>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <!-- product section end -->

    <!-- brand section start -->
    <div class="brand_section_area mb-100 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_inner slick__activation" data-slick='{
                        "slidesToShow": 5,
                        "slidesToScroll": 1,
                        "arrows": false,
                        "dots": false,
                        "autoplay": false,
                        "speed": 300,
                        "infinite": true ,  
                        "responsive":[  
                          {"breakpoint":992, "settings": { "slidesToShow": 4 } },  
                          {"breakpoint":768, "settings": { "slidesToShow": 3 } }, 
                          {"breakpoint":576, "settings": { "slidesToShow": 2 } }, 
                          {"breakpoint":300, "settings": { "slidesToShow": 1 } }  
                         ]                                                     
                    }'>
                        <div class="single_brand ">
                            <a class="primary" href="#"><img src="{{asset('assets/client/img/others/brand1.png') }}" alt=""></a>
                            <a class="secondary" href="#"><img src="{{asset('assets/client/img/others/brand-hover1.png') }}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a class="primary" href="#"><img src="{{asset('assets/client/img/others/brand2.png') }}" alt=""></a>
                            <a class="secondary" href="#"><img src="{{asset('assets/client/img/others/brand-hover2.png') }}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a class="primary" href="#"><img src="{{asset('assets/client/img/others/brand3.png') }}" alt=""></a>
                            <a class="secondary" href="#"><img src="{{asset('assets/client/img/others/brand-hover3.png') }}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a class="primary" href="#"><img src="{{asset('assets/client/img/others/brand4.png') }}" alt=""></a>
                            <a class="secondary" href="#"><img src="{{asset('assets/client/img/others/brand-hover4.png') }}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a class="primary" href="#"><img src="{{asset('assets/client/img/others/brand5.png') }}" alt=""></a>
                            <a class="secondary" href="#"><img src="{{asset('assets/client/img/others/brand-hover5.png') }}" alt=""></a>
                        </div>
                        <div class="single_brand ">
                            <a class="primary" href="#"><img src="{{asset('assets/client/img/others/brand1.png') }}" alt=""></a>
                            <a class="secondary" href="#"><img src="{{asset('assets/client/img/others/brand-hover1.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand section end -->

    <!-- blog section start -->
    <div class="blog_section mb-90">
        <div class="container">
            <div class="section_title text-center wow fadeInUp mb-50" data-wow-delay="0.1s" data-wow-duration="1.1s">
                <h2>Latest Blog</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor
                    incididunt ut
                    labore et dolore magna</p>
            </div>
            <div class="row blog_inner slick__activation" data-slick='{
                "slidesToShow": 3,
                "slidesToScroll": 1,
                "arrows": false,
                "dots": false,
                "autoplay": false,
                "speed": 300,
                "infinite": true ,  
                "responsive":[  
                  {"breakpoint":992, "settings": { "slidesToShow": 2 } },  
                  {"breakpoint":576, "settings": { "slidesToShow": 1 } }  
                 ]                                                     
            }'>
                <div class="col-lg-4">
                    <div class="single_blog wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                        <div class="blog_thumb">
                            <a href="blog-detail-left-sidebar.html"><img src="{{asset('assets/client/img/blog/blog1.png') }}" alt=""></a>
                        </div>
                        <div class="blog_content">
                            <div class="blog_arrow_btn">
                                <a href="blog-detail-left-sidebar.html"><i class="ion-arrow-right-c"></i></a>
                            </div>
                            <span>Brakery</span>
                            <h3><a href="blog-detail-left-sidebar.html">Lorem ipsum doloril
                                    sit amet consepy.</a></h3>
                            <div class="blog__meta d-flex align-items-center">
                                <div class="blog__meta__thumb">
                                    <img src="{{asset('assets/client/img/others/meta-img1.png') }}" alt="">
                                </div>
                                <div class="blog__meta__text">
                                    <ul class="d-flex">
                                        <li>By: Admin</li>
                                        <li><i class="icofont-calendar"></i> 22 Aug, 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single_blog wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                        <div class="blog_thumb">
                            <a href="blog-detail-left-sidebar.html"><img src="{{asset('assets/client/img/blog/blog2.png') }}" alt=""></a>
                        </div>
                        <div class="blog_content">
                            <div class="blog_arrow_btn">
                                <a href="blog-detail-left-sidebar.html"><i class="ion-arrow-right-c"></i></a>
                            </div>
                            <span class="color2">Brakery</span>
                            <h3><a href="blog-detail-left-sidebar.html">Lorem ipsum dolor sit, elit,
                                    dolores is .</a>
                            </h3>
                            <div class="blog__meta d-flex align-items-center">
                                <div class="blog__meta__thumb">
                                    <img src="{{asset('assets/client/img/others/meta-img2.png') }}" alt="">
                                </div>
                                <div class="blog__meta__text">
                                    <ul class="d-flex">
                                        <li>By: Admin</li>
                                        <li><i class="icofont-calendar"></i> 22 Aug, 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single_blog wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s">
                        <div class="blog_thumb">
                            <a href="blog-detail-left-sidebar.html"><img src="{{asset('assets/client/img/blog/blog3.png') }}" alt=""></a>
                        </div>
                        <div class="blog_content">
                            <div class="blog_arrow_btn">
                                <a href="blog-detail-left-sidebar.html"><i class="ion-arrow-right-c"></i></a>
                            </div>
                            <span class="color3">Brakery</span>
                            <h3><a href="blog-detail-left-sidebar.html"> harum dolorum culpa quas are
                                    veniam</a></h3>
                            <div class="blog__meta d-flex align-items-center">
                                <div class="blog__meta__thumb">
                                    <img src="{{asset('assets/client/img/others/meta-img3.png') }}" alt="">
                                </div>
                                <div class="blog__meta__text">
                                    <ul class="d-flex">
                                        <li>By: Admin</li>
                                        <li><i class="icofont-calendar"></i> 22 Aug, 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single_blog wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                        <div class="blog_thumb">
                            <a href="blog-detail-left-sidebar.html"><img src="{{asset('assets/client/img/blog/blog1.png') }}" alt=""></a>
                        </div>
                        <div class="blog_content">
                            <div class="blog_arrow_btn">
                                <a href="blog-detail-left-sidebar.html"><i class="ion-arrow-right-c"></i></a>
                            </div>
                            <span>Brakery</span>
                            <h3><a href="blog-detail-left-sidebar.html">There are many of Lorem
                                    Ipsum.</a></h3>
                            <div class="blog__meta d-flex align-items-center">
                                <div class="blog__meta__thumb">
                                    <img src="{{asset('assets/client/img/others/meta-img1.png') }}" alt="">
                                </div>
                                <div class="blog__meta__text">
                                    <ul class="d-flex">
                                        <li>By: Admin</li>
                                        <li><i class="icofont-calendar"></i> 22 Aug, 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section end -->

    <!--footer area start-->
   
    <!--footer area end-->



    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="ion-android-close"></i></span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="single-product.html"><img src="{{asset('assets/client/img/product/product1.png') }}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="single-product.html"><img src="{{asset('assets/client/img/product/product2.png') }}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{asset('assets/client/img/product/product3.png') }}" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{asset('assets/client/img/product/product4.png') }}" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li>
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab"
                                                    aria-controls="tab1" aria-selected="false"><img
                                                        src="{{asset('assets/client/img/product/mini-product/product1.png') }}" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab2" role="tab"
                                                    aria-controls="tab2" aria-selected="false"><img
                                                        src="{{asset('assets/client/img/product/mini-product/product2.png') }}" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link button_three" data-toggle="tab" href="#tab3"
                                                    role="tab" aria-controls="tab3" aria-selected="false"><img
                                                        src="{{asset('assets/client/img/product/mini-product/product3.png') }}" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab4" role="tab"
                                                    aria-controls="tab4" aria-selected="false"><img
                                                        src="{{asset('assets/client/img/product/mini-product/product4.png') }}" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Donec Ac Tempus</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>
                                        <span class="old_price">$78.99</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Mollitia iste
                                            laborum ad impedit pariatur esse optio tempora sint
                                            ullam autem deleniti nam
                                            in quos qui nemo ipsum numquam, reiciendis maiores
                                            quidem aperiam, rerum vel
                                            recusandae </p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                            <h2>size</h2>
                                            <select class="select_option">
                                                <option selected value="1">s</option>
                                                <option value="1">m</option>
                                                <option value="1">l</option>
                                                <option value="1">xl</option>
                                                <option value="1">xxl</option>
                                            </select>
                                        </div>
                                        <div class="variants_color">
                                            <h2>color</h2>
                                            <select class="select_option">
                                                <option selected value="1">purple</option>
                                                <option value="1">violet</option>
                                                <option value="1">black</option>
                                                <option value="1">pink</option>
                                                <option value="1">orange</option>
                                            </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="1" max="100" step="1" value="1" type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="ion-social-facebook"></i></a>
                                            </li>
                                            <li class="twitter"><a href="#"><i class="ion-social-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="ion-social-pinterest"></i></a>
                                            </li>
                                            <li class="google-plus"><a href="#"><i
                                                        class="ion-social-googleplus"></i></a>
                                            </li>
                                            <li class="linkedin"><a href="#"><i class="ion-social-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal area end-->

    <!-- JS
============================================ -->

        <script src="{{asset('assets/client/js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{asset('assets/client/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
        <script src="{{asset('assets/client/js/vendor/bootstrap.bundle.min.js') }}"></script>
        <script src="{{asset('assets/client/js/slick.min.js') }}"></script>
        <script src="{{asset('assets/client/js/owl.carousel.min.js') }}"></script>
        <script src="{{asset('assets/client/js/wow.min.js') }}"></script>
        <script src="{{asset('assets/client/js/jquery.scrollup.min.js') }}"></script>
        <script src="{{asset('assets/client/js/jquery.nice-select.js') }}"></script>
        <script src="{{asset('assets/client/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{asset('assets/client/js/mailchimp-ajax.js') }}"></script>
        <script src="{{asset('assets/client/js/jquery-ui.min.js') }}"></script>
        <script src="{{asset('assets/client/js/jquery.zoom.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{asset('assets/client/js/main.js') }}"></script>


@endsection