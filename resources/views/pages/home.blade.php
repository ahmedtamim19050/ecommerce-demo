@extends('layouts.app')
@section('content')
    <section class="mt-5">
        <div class="container-fluid">
            <div class="title">

                <div class="d-flex justify-content-between">
                    <h2 class="title-heading customSectionSideBorder">Browse by Categories</h2>
                    <a href="" class="btn btn-dark">View More <i class="fa-solid fa-circle-arrow-right"></i></a>
                </div>
                <p class="title-subtext">Top Categories Of The Week</p>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-9 owl-carousel owl-theme">
                        @foreach ($prodcats as $prodcat)
                            <div class="p-2">
                                <a href="shop-left-sidebar.html" class="category-box wow fadeInUp">
                                    <div>
                                        <img src="{{ $prodcat->logo }}" class="blur-up lazyload" alt="" />
                                        <h5>{{ $prodcat->name }}</h5>
                                    </div>
                                </a>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section Start -->
    <section>
        <div class="container mt-5">
            <div class="title">
                <div class="d-flex justify-content-between">
                    <h2 class="title-heading customSectionSideBorder">Latest Products</h2>
                    <a href="" class="btn btn-dark">View More <i class="fa-solid fa-circle-arrow-right"></i></a>
                </div>

                <p class="title-subtext">A virtual assistant collects the products from your list</p>
            </div>
            <div class="product-border border-row">
                <div class="slider-6_2 no-arrow">
                    <div class="row">
                        @foreach ($latest_products as $product)
                            <x-products.product-1 :product="$product" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
    <section>
        <div class="container my-5">
            <div class="title">
                <div class="d-flex justify-content-between">
                    <h2 class="title-heading customSectionSideBorder">Top Shops</h2>
                    <a href="" class="btn btn-dark">View More <i class="fa-solid fa-circle-arrow-right"></i></a>
                </div>
                <p class="title-subtext">Discover the Top Shops of the Week</p>
            </div>

            <div class="product-border border-row">
                <div class="slider-6_2 no-arrow">
                    <div class="row">
                        @foreach ($latest_shops as $shop)
                            {{-- @dd($shop) --}}
                            <x-shops-card.card-1 :shop="$shop" />
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
