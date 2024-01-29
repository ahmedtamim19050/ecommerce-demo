@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/header-extra.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}" />
@endsection

@section('header')
    <header class="header-compact header-absolute">
        <div class="top-nav top-header sticky-header">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-12">
                        <div class="navbar-top">
                            <button class="navbar-toggler d-xl-none d-inline navbar-menu-button me-3" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                                <span class="navbar-toggler-icon">
                                    <i class="fa-solid fa-bars"></i>
                                </span>
                            </button>
                            <a href="index.html" class="web-logo nav-logo">
                                <img src="{{ asset('assets/img/1.png') }}" class="img-fluid blur-up lazyload"
                                    alt="">
                            </a>

                            <div class="middle-box">
                                <div class="header-nav-middle">
                                    <div class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky">
                                        <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">
                                            <div class="offcanvas-header navbar-shadow">
                                                <h5>Menu</h5>
                                                <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item ">
                                                        <a class="nav-link" href="javascript:void(0)">Home</a>

                                                    </li>

                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                            data-bs-toggle="dropdown">Shop</a>


                                                    </li>

                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                            data-bs-toggle="dropdown">Product</a>


                                                    </li>

                                                    <li class="nav-item dropdown dropdown-mega">
                                                        <a class="nav-link dropdown-toggle ps-xl-2 ps-0"
                                                            href="javascript:void(0)" data-bs-toggle="dropdown">Mega
                                                            Menu</a>


                                                    </li>

                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                            data-bs-toggle="dropdown">Blog</a>

                                                    </li>

                                                    <li class="nav-item dropdown new-nav-item">
                                                        <label class="new-dropdown">New</label>
                                                        <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                            data-bs-toggle="dropdown">Pages</a>

                                                    </li>

                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                            data-bs-toggle="dropdown">Seller</a>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="rightside-box">

                                <ul class="right-side-menu">
                                    <li class="right-side">
                                        <a href="contact-us.html" class="delivery-login-box">
                                            <div class="delivery-icon">
                                                <i data-feather="phone-call"></i>
                                            </div>
                                            <div class="delivery-detail">
                                                <h6>24/7 Delivery</h6>
                                                <h5>+91 888 104 2340</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="right-side">
                                        <a href="wishlist.html" class="btn p-0 position-relative header-wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                    </li>
                                    <li class="right-side">
                                        <div class="onhover-dropdown header-badge">
                                            <button type="button" class="btn p-0 position-relative header-wishlist">
                                                <i class="fa-solid fa-cart-shopping"></i>
                                                <span class="position-absolute top-0 start-100 translate-middle badge">2
                                                    <span class="visually-hidden">unread messages</span>
                                                </span>
                                            </button>

                                            <div class="onhover-div">
                                                <ul class="cart-list">
                                                    <li class="product-box-contain">
                                                        <div class="drop-cart">
                                                            <a href="product-left-thumbnail.html" class="drop-image">
                                                                <img src="../assets/images/vegetable/product/1.png"
                                                                    class="blur-up lazyload" alt="">
                                                            </a>

                                                            <div class="drop-contain">
                                                                <a href="product-left-thumbnail.html">
                                                                    <h5>Fantasy Crunchy Choco Chip Cookies</h5>
                                                                </a>
                                                                <h6><span>1 x</span> $80.58</h6>
                                                                <button class="close-button close_button">
                                                                    <i class="fa-solid fa-xmark"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="product-box-contain">
                                                        <div class="drop-cart">
                                                            <a href="product-left-thumbnail.html" class="drop-image">
                                                                <img src="../assets/images/vegetable/product/2.png"
                                                                    class="blur-up lazyload" alt="">
                                                            </a>

                                                            <div class="drop-contain">
                                                                <a href="product-left-thumbnail.html">
                                                                    <h5>Peanut Butter Bite Premium Butter Cookies 600 g
                                                                    </h5>
                                                                </a>
                                                                <h6><span>1 x</span> $25.68</h6>
                                                                <button class="close-button close_button">
                                                                    <i class="fa-solid fa-xmark"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>

                                                <div class="price-box">
                                                    <h5>Total :</h5>
                                                    <h4 class="theme-color fw-bold">$106.58</h4>
                                                </div>

                                                <div class="button-group">
                                                    <a href="cart.html" class="btn btn-sm cart-button">View Cart</a>
                                                    <a href="checkout.html"
                                                        class="btn btn-sm cart-button theme-bg-color
                                                text-white">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="right-side onhover-dropdown">
                                        <div class="delivery-login-box">
                                            <div class="delivery-icon">
                                                <i class="fa-regular fa-circle-user"></i>
                                            </div>
                                            <div class="delivery-detail">
                                                <h6>Hello,</h6>
                                                <h5>My Account</h5>
                                            </div>
                                        </div>

                                        <div class="onhover-div onhover-div-login">
                                            <ul class="user-box-name">
                                                <li class="product-box-contain">
                                                    <i></i>
                                                    <a href="login.html">Log In</a>
                                                </li>

                                                <li class="product-box-contain">
                                                    <a href="sign-up.html">Register</a>
                                                </li>

                                                <li class="product-box-contain">
                                                    <a href="forgot.html">Forgot Password</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-menu d-md-none d-block mobile-cart">
        <ul>
            <li class="active">
                <a href="index.html">
                    <i class="iconly-Home icli"></i>
                    <span>Home</span>
                </a>
            </li>

            <li class="mobile-category">
                <a href="javascript:void(0)">
                    <i class="iconly-Category icli js-link"></i>
                    <span>Category</span>
                </a>
            </li>

            <li>
                <a href="search.html" class="search-box">
                    <i class="iconly-Search icli"></i>
                    <span>Search</span>
                </a>
            </li>

            <li>
                <a href="wishlist.html" class="notifi-wishlist">
                    <i class="iconly-Heart icli"></i>
                    <span>My Wish</span>
                </a>
            </li>

            <li>
                <a href="cart.html">
                    <i class="iconly-Bag-2 icli fly-cate"></i>
                    <span>Cart</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-search-full pt-0 overflow-hidden">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="slider-animate">
                        <div>
                            <div class="home-contain rounded-0 p-0">
                                <img src="{{ asset('assets/img/bg-img.jpg') }}" class="img-fluid bg-img  lazyload bg-top"
                                    alt="">
                                <div class="home-detail p-center text-center home-overlay position-relative">
                                    <div>
                                        <div class="content">
                                            <h1>Get your grocery in 25 minutes</h1>
                                            <h3>Better ingredients, better food, and beverages, at low prices</h3>
                                            <div class="search-box">
                                                <input type="search" class="form-control"
                                                    placeholder="I'm searching for..." aria-label="Recipient's username">
                                                <i data-feather="search"></i>
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
    </section>
@endsection
