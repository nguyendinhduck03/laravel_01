@extends('layout.client')
@section('content')
<div class="breadcrumbs_aree breadcrumbs_bg mb-100" style="background-image: url('{{ asset('assets/client/img/others/breadcrumbs-bg.png') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs_text">
                    <h1>Products</h1>
                    <ul>
                        <li><a href="/">Home </a></li>
                        <li> // Shop Fullwidth</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- breadcrumbs area end -->

<!-- product page section start -->
<div class="product_page_section mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product_page_wrapper">
                    <!--shop toolbar area start-->
                    <div class="product_sidebar_header mb-60 d-flex justify-content-between align-items-center">
                        <div class="page__amount border">
                            <p><span>12</span> Product Found of <span>30</span></p>
                        </div>
                        <div class="product_header_right d-flex align-items-center">
                            <div class="sorting__by d-flex align-items-center">
                                <span class="me-2">Search:</span>
                                <form class="d-flex" action="{{ route('menu') }}" method="GET">
                                    <input type="text" class="form-control me-2" placeholder="Search..." name="query" value="">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                    <!--shop toolbar area end-->


                    <!--shop gallery start-->
                    <div class="product_page_gallery">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="grid">
                                <div class="row grid__product">
                                    @foreach ($products as $product)
                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <article class="single_product wow fadeInUp" data-wow-delay="0.1s"
                                            data-wow-duration="1.1s">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="{{route('detail.product', $product->id)}}"><img
                                                            src="{{ Storage::url($product->imageproduct->first()->link) }}" alt=""></a>
                                                    <div class="action_links">
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="add_to_cart"><a href=""
                                                                    title="Add to cart">
                                                                    <span class="pe-7s-shopbag"></span></a></li>
                                                            <li class="wishlist"><a href="#"
                                                                    title="Add to Wishlist"><span
                                                                        class="pe-7s-like"></span></a></li>
                                                            <li class="quick_button"><a href="{{route('detail.product', $product->id)}}" title="Quick View"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal_box"> <span
                                                                        class="pe-7s-look"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content text-center">
                                                    <h4><a href="{{route('detail.product', $product->id)}}">{{$product->name}}</a></h4>
                                                    <div class="price_box">
                                                        <span class="current_price">{{$product->price." VND"}}</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="list">
                                <div class="list__product">
                                    <article class="product_list_items border-bottom">
                                        <figure class="product_list_flex d-flex align-items-center">
                                            <div class="product_thumb">
                                                <a href="#"><img
                                                        src="assets/img/product/product12.png" alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="#"
                                                                title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="#"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a></li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_list_content">
                                                <h4><a href="#">Products Name Here</a></h4>
                                                <div class="product__ratting">
                                                    <ul class="d-flex">
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="current_price">$22.00</span>
                                                </div>
                                                <div class="product__desc">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Dignissimos aliquam maiores impedit temporibus ratione
                                                        eveniet adipisci ab quisquam in quam.</p>
                                                </div>
                                                <div class="action_links product_list_action">
                                                    <ul class="d-flex">
                                                        <li class="add_to_cart"><a href="#"
                                                                title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="#"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a></li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="product_list_items border-bottom">
                                        <figure class="product_list_flex d-flex align-items-center">
                                            <div class="product_thumb">
                                                <a href="single-product.html"><img
                                                        src="assets/img/product/product1.png" alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="#"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a></li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_list_content">
                                                <h4><a href="#">Lorem, ipsum dolor.</a></h4>
                                                <div class="product__ratting">
                                                    <ul class="d-flex">
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="current_price">$24.00</span>
                                                </div>
                                                <div class="product__desc">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Dignissimos aliquam maiores impedit temporibus ratione
                                                        eveniet adipisci ab quisquam in quam.</p>
                                                </div>
                                                <div class="action_links product_list_action">
                                                    <ul class="d-flex">
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="#"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a></li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="product_list_items border-bottom">
                                        <figure class="product_list_flex d-flex align-items-center">
                                            <div class="product_thumb">
                                                <a href="#"><img
                                                        src="assets/img/product/product3.png" alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="#"
                                                                title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="#"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a></li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_list_content">
                                                <h4><a href="#">Sit amet consecte elit.</a></h4>
                                                <div class="product__ratting">
                                                    <ul class="d-flex">
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="current_price">$26.00</span>
                                                </div>
                                                <div class="product__desc">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Dignissimos aliquam maiores impedit temporibus ratione
                                                        eveniet adipisci ab quisquam in quam.</p>
                                                </div>
                                                <div class="action_links product_list_action">
                                                    <ul class="d-flex">
                                                        <li class="add_to_cart"><a href="#"
                                                                title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="#"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a></li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="product_list_items border-bottom">
                                        <figure class="product_list_flex d-flex align-items-center">
                                            <div class="product_thumb">
                                                <a href="#"><img
                                                        src="assets/img/product/product4.png" alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="#"
                                                                title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="#"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a></li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_list_content">
                                                <h4><a href="#">Atque earum ullam non.</a></h4>
                                                <div class="product__ratting">
                                                    <ul class="d-flex">
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="current_price">$22.00</span>
                                                </div>
                                                <div class="product__desc">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Dignissimos aliquam maiores impedit temporibus ratione
                                                        eveniet adipisci ab quisquam in quam.</p>
                                                </div>
                                                <div class="action_links product_list_action">
                                                    <ul class="d-flex">
                                                        <li class="add_to_cart"><a href="#"
                                                                title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="#"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a></li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination poduct_pagination">
                        <ul>
                            <li class="current"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next"><a href="#"><i class="ion-chevron-right"></i></a></li>
                        </ul>
                    </div>
                    <!--shop gallery end-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product page section end -->

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
                                            <a href="#"><img src="assets/img/product/product1.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="assets/img/product/product2.png"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="assets/img/product/product3.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="assets/img/product/product4.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal_tab_button">
                                    <ul class="nav product_navactive owl-carousel" role="tablist">
                                        <li>
                                            <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab"
                                                aria-controls="tab1" aria-selected="false"><img
                                                    src="assets/img/product/mini-product/product1.png" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-toggle="tab" href="#tab2" role="tab"
                                                aria-controls="tab2" aria-selected="false"><img
                                                    src="assets/img/product/mini-product/product2.png" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link button_three" data-toggle="tab" href="#tab3"
                                                role="tab" aria-controls="tab3" aria-selected="false"><img
                                                    src="assets/img/product/mini-product/product3.png" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-toggle="tab" href="#tab4" role="tab"
                                                aria-controls="tab4" aria-selected="false"><img
                                                    src="assets/img/product/mini-product/product4.png" alt=""></a>
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste
                                        laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti
                                        nam
                                        in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum
                                        vel
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
                                        <li class="twitter"><a href="#"><i class="ion-social-twitter"></i></a>
                                        </li>
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
@endsection