@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/product-details.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}" />
@endsection
@section('content')
    <section class="breadscrumb-section ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain d-flex justify-content-between ">
                        <h2>{{ $product->name }}</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('homepage') }}">
                                        <i class="fas fa-home"></i> Home
                                    </a>
                                </li>
                                <li class="breadcrumb-item active ps-0">/ {{ $product->name }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-section container-fluid mb-4">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-xxl-9 col-xl-8 col-lg-7 wow fadeInUp">
                    <div class="row g-4">
                        <div class="col-xl-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp">
                            <div class="product-left-box">
                                <div class="row g-2">
                                    <div class="col-xxl-10 col-lg-12 col-md-10 order-xxl-2 order-lg-1 order-md-2">
                                        <div class="product-main-2 no-arrow">

                                            <!-- Slider Images -->
                                            @foreach (json_decode($product->images) as $image)
                                                <div class="slider-image">
                                                    <img src="{{ Storage::url($image) }}" style="height: 350px"
                                                        width="500px" id="img-1"
                                                        data-zoom-image="{{ Storage::url($image) }}"
                                                        class="img-fluid image_zoom_cls-0 blur-up lazyload"
                                                        alt="" />
                                                </div>
                                            @endforeach


                                            <!-- Repeat for other images -->
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-lg-12 col-md-2 order-xxl-1 order-lg-2 order-md-1">
                                        <div class="left-slider-image-2 left-slider no-arrow slick-top">
                                            <!-- Sidebar Images -->

                                            {{-- @dd($product) --}}
                                            @foreach (json_decode($product->images) as $image)
                                                <div class="sidebar-image">
                                                    <img src="{{ Storage::url($image) }}" class="img-fluid blur-up lazyload"
                                                        style="height: 120px;width: 100%;
                                                        object-fit: cover;"
                                                        alt="" />
                                                </div>
                                            @endforeach

                                            <!-- Repeat for other images -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-details">
                                <div class="product-header">
                                    <h2 class="name">{{ $product->name }}</h2>
                                </div>
                                <div class="d-flex align-items-baseline justify-content-between">
                                    <div class="price-rating">
                                        <h6 class="theme-color">
                                            {{ Sohoj::price($product->sale_price) }}
                                            <del class="text-content">{{ Sohoj::price($product->price) }}</del>

                                        </h6>
                                    </div>
                                    <div class="product-rating custom-rate">
                                        <ul class="rating">
                                            <li><i class="fas fa-star fill"></i></li>
                                            <li><i class="fas fa-star fill"></i></li>
                                            <li><i class="fas fa-star fill"></i></li>
                                            <li><i class="fas fa-star fill"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="review">(23)</span>
                                    </div>
                                </div>
                                <div class="product-description">
                                    <p>
                                        {{ $product->short_description }}
                                    </p>
                                </div>
                                <div class="product-actions">
                                    <div class="cart-quantity">
                                        <button type="button" class="qty-btn" data-type="minus">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                        <input class="qty-input" type="text" name="quantity" value="0" />
                                        <button type="button" class="qty-btn me-2" data-type="plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <button onclick="location.href = 'cart.html';"
                                        class="btn btn-md bg-dark cart-button text-white">
                                        Add To Cart
                                    </button>
                                </div>
                                <div class="product-options">
                                    <a href="wishlist.html"><i class="fas fa-heart"></i>
                                        <span>Add To Wishlist</span></a>
                                </div>
                                <div class="store-info">
                                    <div class="product-title">
                                        <h4>Product Information</h4>
                                    </div>

                                    <ul class="product-info-list product-info-list-2">

                                        <li>SKU: <span>{{ $product->sku }}</span></li>

                                        <li>Stock: <span>{{ $product->quantity }} Items Left</span></li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="product-section-box">
                                <ul class="nav nav-tabs custom-nav d-flex justify-content-center" id="myTab"
                                    role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                            data-bs-target="#description" type="button" role="tab"
                                            aria-controls="description" aria-selected="true">
                                            Description
                                        </button>
                                    </li>



                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="review-tab" data-bs-toggle="tab"
                                            data-bs-target="#review" type="button" role="tab"
                                            aria-controls="review" aria-selected="false">
                                            Review
                                        </button>
                                    </li>
                                </ul>

                                <div class="tab-content custom-tab" id="myTabContent">
                                    <div class="tab-pane fade show active" id="description" role="tabpanel"
                                        aria-labelledby="description-tab">
                                        <div class="product-description">
                                            <div class="nav-desh">
                                                <p>
                                                    {{ $product->description }}
                                                </p>
                                            </div>


                                        </div>
                                    </div>



                                    <div class="tab-pane fade" id="review" role="tabpanel"
                                        aria-labelledby="review-tab">
                                        <div class="review-box">
                                            <div class="row g-4">
                                                <div class="col-xl-12">
                                                    <div class="review-title">
                                                        <h4 class="fw-500 m-2">Add a review</h4>
                                                    </div>

                                                    <div class="row g-4">
                                                        <div class="col-md-6">
                                                            <div class="form-floating theme-form-floating">
                                                                <input type="text" class="form-control" id="name"
                                                                    placeholder="Name" />
                                                                <label for="name">Your Name</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-floating theme-form-floating">
                                                                <input type="email" class="form-control" id="email"
                                                                    placeholder="Email Address" />
                                                                <label for="email">Email Address</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-floating theme-form-floating">
                                                                <input type="url" class="form-control" id="website"
                                                                    placeholder="Website" />
                                                                <label for="website">Website</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-floating theme-form-floating">
                                                                <input type="url" class="form-control" id="review1"
                                                                    placeholder="Give your review a title" />
                                                                <label for="review1">Review Title</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-floating theme-form-floating">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 150px"></textarea>
                                                                <label for="floatingTextarea2">Write Your Comment</label>
                                                                <div class="text-end mt-2">
                                                                    <button class="btn btn-success text-center">
                                                                        Submit
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="review-title">
                                                        <h4 class="fw-500">
                                                            Customer questions & answers
                                                        </h4>
                                                    </div>
                                                    <hr />
                                                    <div class="review-people">
                                                        <ul class="review-list">
                                                            <li>
                                                                <div class="people-box">
                                                                    <div>
                                                                        <div class="people-image">
                                                                            <img src="./0_7up-Flat-Product-Image.png"
                                                                                class="img-fluid blur-up lazyload"
                                                                                alt="" />
                                                                        </div>
                                                                    </div>

                                                                    <div class="people-comment">
                                                                        <a class="name"
                                                                            href="javascript:void(0)">Tracey</a>
                                                                        <div class="date-time">
                                                                            <h6 class="text-content">
                                                                                14 Jan, 2022 at 12.58 AM
                                                                            </h6>

                                                                            <div class="product-rating">
                                                                                <ul class="rating">
                                                                                    <li>
                                                                                        <i class="fas fa-star fill"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        <i class="fas fa-star fill"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        <i class="fas fa-star fill"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        <i class="fas fa-star fill"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        <i class="fas fa-star"></i>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>

                                                                        <div class="reply">
                                                                            <p>
                                                                                Icing cookie carrot cake chocolate
                                                                                cake sugar plum jelly-o danish.
                                                                                Dragée dragée shortbread tootsie
                                                                                roll croissant muffin cake I love
                                                                                gummi bears. Candy canes ice cream
                                                                                caramels tiramisu marshmallow cake
                                                                                shortbread candy canes cookie.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                </div>

                <div class="col-xxl-3 col-xl-4 col-lg-5 d-none d-lg-block wow fadeInUp">
                    <div class="right-sidebar-box pt-0">
                        <div class="vendor-box">
                            <div class="vendor-contain">
                                <div class="vendor-image">
                                    <img src="{{ Storage::url($product->shop->logo) }}" class="blur-up lazyload"
                                        alt="Vendor Image" />
                                </div>
                                <div class="vendor-name">
                                    <h5 class="fw-500">{{ $product->shop->name }}</h5>
                                    <div class="product-rating mt-1">
                                        <ul class="rating">
                                            <li><i class="fas fa-star fill"></i></li>
                                            <li><i class="fas fa-star fill"></i></li>
                                            <li><i class="fas fa-star fill"></i></li>
                                            <li><i class="fas fa-star fill"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span>(36 Reviews)</span>
                                    </div>
                                </div>
                            </div>
                            <p class="vendor-detail">
                                {{ $product->shop->short_description }}
                            </p>
                            <div class="vendor-list">
                                <ul>
                                    <li>
                                        <div class="address-contact">
                                            <i data-feather="map-pin"></i>
                                            <h5>
                                                Address:
                                                <span class="text-content">{{ $product->shop->fullAddress }}</span>
                                            </h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="address-contact">
                                            <i data-feather="headphones"></i>
                                            <h5>
                                                Contact Seller:
                                                <span class="text-content">{{ $product->shop->phone }}</span>
                                            </h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pt-25">
                            <div class="category-menu">
                                <h3>Latest Products</h3>
                                <ul class="product-list product-right-sidebar border-0 p-0">
                                    <li>
                                        @foreach ($shopProducts as $product)
                                            <div class="offer-product">
                                                <a href="#" class="offer-image">
                                                    <img src="{{ Storage::url($product->image) }}"
                                                        class="img-fluid blur-up lazyload" alt="Product Image" />
                                                </a>
                                                <div class="offer-detail">
                                                    <div>
                                                        <a href="{{ route('product_details', $product->slug) }}">
                                                            <h6 class="name">{{ $product->name }}</h6>
                                                        </a>
                                                        <span>{{ $product->weight }} </span>
                                                        <h6 class="price theme-color">
                                                            {{ Sohoj::price($product->sale_price) }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </li>
                                    <!-- Other product items go here -->
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@section('js')
    <script src="{{ asset('assets/js/slick/slick.js') }}"></script>
    <script src="{{ asset('assets/js/slick/slick-animation.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick/custom-slick-animated.js') }}"></script>
    <script src="{{ asset('assets/js/slick/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick/custom-wow.js') }}"></script>
@endsection
@stop
