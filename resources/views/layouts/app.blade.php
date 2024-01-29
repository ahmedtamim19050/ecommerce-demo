<!doctype html>
<html lang="en">

<head>
    <title>Fixmart</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/frontend-assets/css/plugins/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend-assets/css/plugins/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/new-app.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/shop-card.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}" />


    @yield('css')

</head>

<body>
    {{-- <header class=" d-lg-block d-none">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Logo Section -->
                <div class="logo-box">
                    <a class="navbar-brand" href="{{ route('homepage') }}"><img src="{{ asset('assets/img/1.png') }}"
                            alt="" width="90" class="img-fluid blur-up lazyloaded"></a>
                </div>

                <!-- Middle Box Section -->
                <div class="middle-box">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">shops</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Porducts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Menu 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Menu 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Menu 3</a>
                        </li>

                    </ul>
                </div>

                <!-- Right Side Box Section -->
                <div class="rightside-box">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item right-side">
                            <a class="nav-link" href="#"><i class="fa-solid fa-phone"></i></a>
                        </li>
                        <li class="nav-item right-side">
                            <a class="nav-link" aria-current="page" href="#"><i
                                    class="fa-regular fa-heart"></i></a>
                        </li>
                        <li class="nav-item right-side">
                            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i>

                            </a>

                        </li>
                        <li class="nav-item right-side">
                            <a class="nav-link" href="#">
                                <i class="fa-regular fa-circle-user"></i>
                            </a>
                            <div class="dropdown_hover ">
                                <ul>
                                    <li><a class="dropdown-item" href="#">Log in</a></li>
                                    <li><a class="dropdown-item" href="#">Register</a></li>
                                    <li><a class="dropdown-item" href="#">Forgot Password</a></li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header> --}}
    @include('components.header.header')

    <main>
        @yield('content')
    </main>
    <footer class="section-t-space bg-light mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-logo">
                        <a href="index.html">
                            <img src="../assets/images/logo/1.png" class="img-fluid" alt="Fastkart Logo" />
                        </a>
                    </div>
                    <p class="footer-description">
                        We are a friendly bar serving a variety of cocktails, wines, and
                        beers. Our bar is a perfect place for a couple.
                    </p>
                    <ul class="footer-address list-unstyled">
                        <li>
                            <i class="bi bi-house-door"></i>
                            1418 Riverwood Drive, CA 96052, US
                        </li>
                        <li>
                            <i class="bi bi-envelope"></i>
                            <a href="mailto:support@fastkart.com">support@fastkart.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-2">
                    <h4 class="footer-title">Categories</h4>
                    <ul class="list-unstyled">
                        <li><a href="shop-left-sidebar.html">Vegetables & Fruit</a></li>
                        <li><a href="shop-left-sidebar.html">Beverages</a></li>
                        <li><a href="shop-left-sidebar.html">Meats & Seafood</a></li>
                        <li><a href="shop-left-sidebar.html">Frozen Foods</a></li>
                        <li><a href="shop-left-sidebar.html">Biscuits & Snacks</a></li>
                        <li><a href="shop-left-sidebar.html">Grocery & Staples</a></li>
                    </ul>
                </div>

                <div class="col-md-2">
                    <h4 class="footer-title">Useful Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="shop-left-sidebar.html">Shop</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="blog-list.html">Blog</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                    </ul>
                </div>

                <div class="col-md-2">
                    <h4 class="footer-title">Help Center</h4>
                    <ul class="list-unstyled">
                        <li><a href="order-success.html">Your Order</a></li>
                        <li><a href="user-dashboard.html">Your Account</a></li>
                        <li><a href="order-tracking.html">Track Order</a></li>
                        <li><a href="wishlist.html">Your Wishlist</a></li>
                        <li><a href="search.html">Search</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                    </ul>
                </div>

                <div class="col-md-2">
                    <h4 class="footer-title">Contact Us</h4>
                    <ul class="list-unstyled">
                        <li>
                            <i class="bi bi-phone"></i>
                            Hotline 24/7: +91 888 104 2340
                        </li>
                        <li>
                            <i class="bi bi-envelope"></i>
                            <a href="mailto:fastkart@hotmail.com">fastkart@hotmail.com</a>
                        </li>
                    </ul>

                </div>
            </div>
            <hr>
            <div class="sub-footer section-small-space">
                <div class="reserve">
                    <h6 class="text-content">©2022 Fastkart All rights reserved</h6>
                </div>

                <div class="payment">
                    <img src="../assets/images/payment/1.png" class="blur-up lazyload" alt="">
                </div>
            </div>
        </div>

        <x-alert />
    </footer>
    <script src="{{ asset('assets/frontend-assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/frontend-assets/js/plugins/owl.carousel.min.js') }}"></script>
    @yield('js')
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}" />

    <script src="{{ asset('assets/js/custom_slick.js') }}"></script>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 3,
                    },
                    1000: {
                        items: 5,
                    },
                },
            });
        });
    </script>

    <script>
        function wishlist(id) {

            $.ajax({
                url: '/wishlist/add',
                method: 'GET',
                data: {
                    productId: id
                }

            });
        }
    </script>
</body>

</html>
