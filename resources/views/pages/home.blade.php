@extends('layouts.app')
@section('content')
    <section class="slider-section">
        <div id="carouselExample" class="carousel slide " style="height: 430px">
            <div class="carousel-inner" style="height: 400px">
                <div class="carousel-item active">
                    <img src="https://cdn.shopify.com/s/files/1/0070/7032/files/new-product-development-process.jpg?v=1600652722&width=1024"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://codup.co/wp-content/uploads/2021/07/The-7-Step-Process-to-Digital-Product-Development.webp"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://emeritus.org/wp-content/uploads/2022/08/Featured-Image-33.png" class="d-block w-100"
                        alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="title">
                <h2 class="title-heading">Browse by Categories</h2>

                <p class="title-subtext">Top Categories Of The Week</p>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-9 owl-carousel owl-theme">
                        <div class="p-2">
                            <a href="shop-left-sidebar.html" class="category-box wow fadeInUp">
                                <div>
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/vegetable.svg"
                                        class="blur-up lazyload" alt="" />
                                    <h5>Vegetables & Fruit</h5>
                                </div>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section Start -->
    <section>
        <div class="container mt-5">
            <div class="title">
                <h2 class="title-heading">Latest Products</h2>
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
        <div class="container m-5">
            <div class="title">
                <h2 class="title-heading">Top Shops</h2>
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
