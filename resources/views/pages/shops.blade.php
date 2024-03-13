@php
    $route = route('shops');
@endphp
@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/shops.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css" />
@endsection
@section('content')
    <!-- Category Section Start -->
    <section class="mt-5">
        <div class="container-fluid">
            <div class="title">


                <p class="title-subtext customSectionSideBorder">All Categories</p>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-9 owl-carousel owl-theme">
                        @foreach ($categories as $prodcat)
                            <div class="p-2">
                                <a href="javascript::void(0)" id="categoryId"
                                    onclick='updateSearchParams("category","{{ $prodcat->slug }}","{{ $route }}")'
                                    class="category-box wow fadeInUp @if (request()->category == $prodcat->slug) active-category @endif">
                                    <div>
                                        <img src="{{ $prodcat->logo }}" class="blur-up lazyload" alt="" />
                                        <h5>{{ $prodcat->name }}({{ $prodcat->products->count() }})</h5>
                                    </div>
                                </a>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Section End -->

    <!-- Shop Section Start -->
    <section class="section-b-space shop-section mt-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 wow fadeInUp">
                    <div class="left-box">
                        <div class="shop-left-sidebar">


                            <div class="accordion custome-accordion" id="accordionExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            <span style="border-bottom: 2px solid #0da487 ">Price</span>
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse show"
                                        aria-labelledby="panelsStayOpen-headingThree">
                                        <div class="accordion-body">
                                            <div class="range-slider">
                                                <input type="text" class="js-range-slider" value=""
                                                    data-min="{{ $minPrice }}" data-max="{{ $maxPrice }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            <span>Rating</span>
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse show"
                                        aria-labelledby="panelsStayOpen-headingSix">
                                        <div class="accordion-body">
                                            <ul class="category-list custom-padding">
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox">
                                                        <div class="form-check-label">
                                                            <ul class="rating">
                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                <li><i class="fa-solid fa-star"></i></li>
                                                            </ul>
                                                            <span class="text-content">(5 Star)</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox">
                                                        <div class="form-check-label">
                                                            <ul class="rating">

                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                <li><i class="fa-regular fa-star"></i></li>
                                                            </ul>
                                                            <span class="text-content">(4 Star)</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox">
                                                        <div class="form-check-label">
                                                            <ul class="rating">
                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                <li><i class="fa-regular fa-star "></i></li>
                                                                <li><i class="fa-regular fa-star"></i></li>
                                                            </ul>
                                                            <span class="text-content">(3 Star)</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox">
                                                        <div class="form-check-label">
                                                            <ul class="rating">
                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                <li><i class="fa-regular fa-star "></i></li>
                                                                <li><i class="fa-regular fa-star "></i></li>
                                                                <li><i class="fa-regular fa-star"></i></li>
                                                            </ul>
                                                            <span class="text-content">(2 Star)</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox">
                                                        <div class="form-check-label">
                                                            <ul class="rating">
                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                <li><i class="fa-regular fa-star "></i></li>
                                                                <li><i class="fa-regular fa-star "></i></li>
                                                                <li><i class="fa-regular fa-star "></i></li>
                                                                <li><i class="fa-regular fa-star"></i></li>
                                                            </ul>
                                                            <span class="text-content">(1 Star)</span>
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

                <div class="col-md-9 wow fadeInUp">
                    <div class="show-button">

                        <div class="top-filter-menu">
                            <div class="category-dropdown">
                                <h5 class="text-content me-4">Sort By :</h5>
                                <div class="dropdown me-1">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        id="dropdownMenuButton1" data-bs-toggle="dropdown">
                                        <span id="selectedSort">Popularity</span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <a class="dropdown-item" id="pop"
                                                href="{{ route('shops', ['sort' => 'popularity']) }}">Popularity</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="low"
                                                href="{{ route('shops', ['sort' => 'low']) }}">Low - High Price</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="high"
                                                href="{{ route('shops', ['sort' => 'high']) }}">High - Low Price</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="aToz"
                                                href="{{ route('shops', ['sort' => 'aToz']) }}">A - Z Order</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="zToa"
                                                href="{{ route('shops', ['sort' => 'zToa']) }}">Z - A Order</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div
                            class="row g-sm-4 g-3 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section">
                            @foreach ($products as $product)
                                <x-products.product-1 :product="$product" />
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>

    <script>
        $(".js-range-slider").ionRangeSlider({
            type: "double",
            skin: "flat",
            min: $('.js-range-slider').data('min'),
            max: $('.js-range-slider').data('max'),
            from: $('.js-range-slider').data('min'),
            to: $('.js-range-slider').data('max'),
            grid: true,
            prefix: "$",
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectedSortElement = document.getElementById('selectedSort');
            const savedSort = localStorage.getItem('selectedSort');

            // Set initial or saved sort
            selectedSortElement.innerText = savedSort || 'Popularity';

            document.querySelectorAll('.dropdown-item').forEach(item => {
                item.addEventListener('click', function() {
                    selectedSortElement.innerText = item.innerText;
                    localStorage.setItem('selectedSort', item.innerText);
                });
            });
        });
    </script>
@endsection
