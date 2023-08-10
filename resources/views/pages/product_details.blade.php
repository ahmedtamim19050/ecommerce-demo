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
                        <h2>Creamy Chocolate Cake</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('homepage') }}">
                                        <i class="fas fa-home"></i> Home
                                    </a>
                                </li>
                                <li class="breadcrumb-item active ps-0">/ Creamy Chocolate Cake</li>
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
                                            <div class="slider-image">
                                                <img src="https://www.dreamhost.com/blog/wp-content/uploads/2019/06/afa314e6-1ae4-46c5-949e-c0a77f042e4f_DreamHost-howto-prod-descrips-full.jpeg"
                                                    style="height: 350px" width="500px" id="img-1"
                                                    data-zoom-image="https://www.dreamhost.com/blog/wp-content/uploads/2019/06/afa314e6-1ae4-46c5-949e-c0a77f042e4f_DreamHost-howto-prod-descrips-full.jpeg"
                                                    class="img-fluid image_zoom_cls-0 blur-up lazyload" alt="" />
                                            </div>
                                            <div class="slider-image">
                                                <img src="./7up.png" style="height: 350px" width="500px" id="img-1"
                                                    data-zoom-image="./7up.png"
                                                    class="img-fluid image_zoom_cls-0 blur-up lazyload" alt="" />
                                            </div>
                                            <div class="slider-image">
                                                <img src="./7up.png" style="height: 350px" width="500px" id="img-1"
                                                    data-zoom-image="./7up.png"
                                                    class="img-fluid image_zoom_cls-0 blur-up lazyload" alt="" />
                                            </div>
                                            <div class="slider-image">
                                                <img src="./7up.png" style="height: 350px" width="500px" id="img-1"
                                                    data-zoom-image="./7up.png"
                                                    class="img-fluid image_zoom_cls-0 blur-up lazyload" alt="" />
                                            </div>
                                            <div class="slider-image">
                                                <img src="./7up.png" style="height: 350px" width="500px" id="img-1"
                                                    data-zoom-image="./7up.png"
                                                    class="img-fluid image_zoom_cls-0 blur-up lazyload" alt="" />
                                            </div>
                                            <div class="slider-image">
                                                <img src="./7up.png" style="height: 350px" width="500px" id="img-1"
                                                    data-zoom-image="./7up.png"
                                                    class="img-fluid image_zoom_cls-0 blur-up lazyload" alt="" />
                                            </div>
                                            <!-- Repeat for other images -->
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-lg-12 col-md-2 order-xxl-1 order-lg-2 order-md-1">
                                        <div class="left-slider-image-2 left-slider no-arrow slick-top">
                                            <!-- Sidebar Images -->
                                            <div class="sidebar-image">
                                                <img src="./7up.png" class="img-fluid blur-up lazyload" alt="" />
                                            </div>
                                            <div class="sidebar-image">
                                                <img src="./7up.png" class="img-fluid blur-up lazyload" alt="" />
                                            </div>
                                            <div class="sidebar-image">
                                                <img src="./7up.png" class="img-fluid blur-up lazyload" alt="" />
                                            </div>
                                            <div class="sidebar-image">
                                                <img src="./7up.png" class="img-fluid blur-up lazyload" alt="" />
                                            </div>
                                            <div class="sidebar-image">
                                                <img src="./7up.png" class="img-fluid blur-up lazyload" alt="" />
                                            </div>
                                            <div class="sidebar-image">
                                                <img src="./7up.png" class="img-fluid blur-up lazyload" alt="" />
                                            </div>
                                            <!-- Repeat for other images -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-details">
                                <div class="product-header">
                                    <h6 class="offer-top">30% Off</h6>
                                    <h2 class="name">Creamy Chocolate Cake</h2>
                                </div>
                                <div class="d-flex align-items-baseline justify-content-between">
                                    <div class="price-rating">
                                        <h6 class="theme-color">
                                            $49.50 <del class="text-content">$58.46</del>
                                           
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
                                        Lollipop cake chocolate chocolate cake dessert jujubes.
                                        Shortbread sugar plum dessert powder cookie sweet
                                        brownie. Cake cookie apple pie dessert sugar plum muffin
                                        cheesecake.
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

                                        <li>SKU: <span>SDFVW65467</span></li>

                                        <li>Stock: <span>2 Items Left</span></li>
                                        <li>
                                            Tags: <a href="javascript:void(0)">Cake,</a>
                                            <a href="javascript:void(0)">Bakery</a>
                                        </li>
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
                                        <button class="nav-link" id="info-tab" data-bs-toggle="tab"
                                            data-bs-target="#info" type="button" role="tab" aria-controls="info"
                                            aria-selected="false">
                                            Additional info
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
                                                    Jelly beans carrot cake icing biscuit oat cake
                                                    gummi bears tart. Lemon drops carrot cake pudding
                                                    sweet gummi bears. Chocolate cake tart cupcake
                                                    donut topping liquorice sugar plum chocolate bar.
                                                    Jelly beans tiramisu caramels jujubes biscuit
                                                    liquorice chocolate. Pudding toffee jujubes oat
                                                    cake sweet roll. Lemon drops dessert croissant
                                                    danish cake cupcake. Sweet roll candy chocolate
                                                    toffee jelly sweet roll halvah brownie topping.
                                                    Marshmallow powder candy sesame snaps jelly beans
                                                    candy canes marshmallow gingerbread pie.
                                                </p>
                                            </div>

                                            <div class="nav-desh">
                                                <div class="desh-title">
                                                    <h5>Organic:</h5>
                                                </div>
                                                <p>
                                                    vitae et leo duis ut diam quam nulla porttitor
                                                    massa id neque aliquam vestibulum morbi blandit
                                                    cursus risus at ultrices mi tempus imperdiet nulla
                                                    malesuada pellentesque elit eget gravida cum
                                                    sociis natoque penatibus et magnis dis parturient
                                                    montes nascetur ridiculus mus mauris vitae
                                                    ultricies leo integer malesuada nunc vel risus
                                                    commodo viverra maecenas accumsan lacus vel
                                                    facilisis volutpat est velit egestas dui id ornare
                                                    arcu odio ut sem nulla pharetra diam sit amet nisl
                                                    suscipit adipiscing bibendum est ultricies integer
                                                    quis auctor elit sed vulputate mi sit amet mauris
                                                    commodo quis imperdiet massa tincidunt nunc
                                                    pulvinar sapien et ligula ullamcorper malesuada
                                                    proin libero nunc consequat interdum varius sit
                                                    amet mattis vulputate enim nulla aliquet porttitor
                                                    lacus luctus accumsan.
                                                </p>
                                            </div>

                                            <div class="banner-contain nav-desh">
                                                <img src="../assets/images/vegetable/banner/14.jpg"
                                                    class="bg-img blur-up lazyload" alt="" />
                                                <div class="banner-details p-center banner-b-space w-100 text-center">
                                                    <div>
                                                        <h6 class="ls-expanded theme-color mb-sm-3 mb-1">
                                                            SUMMER
                                                        </h6>
                                                        <h2>VEGETABLE</h2>
                                                        <p class="mx-auto mt-1">Save up to 5% OFF</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="nav-desh">
                                                <div class="desh-title">
                                                    <h5>From The Manufacturer:</h5>
                                                </div>
                                                <p>
                                                    Jelly beans shortbread chupa chups carrot cake
                                                    jelly-o halvah apple pie pudding gingerbread.
                                                    Apple pie halvah cake tiramisu shortbread cotton
                                                    candy croissant chocolate cake. Tart cupcake
                                                    caramels gummi bears macaroon gingerbread
                                                    fruitcake marzipan wafer. Marzipan dessert cupcake
                                                    ice cream tootsie roll. Brownie chocolate cake
                                                    pudding cake powder candy ice cream ice cream
                                                    cake. Jujubes soufflé chupa chups cake candy
                                                    halvah donut. Tart tart icing lemon drops
                                                    fruitcake apple pie.
                                                </p>

                                                <p>
                                                    Dessert liquorice tart soufflé chocolate bar apple
                                                    pie pastry danish soufflé. Gummi bears halvah
                                                    gingerbread jelly icing. Chocolate cake chocolate
                                                    bar pudding chupa chups bear claw pie dragée donut
                                                    halvah. Gummi bears cookie ice cream jelly-o
                                                    jujubes sweet croissant. Marzipan cotton candy
                                                    gummi bears lemon drops lollipop lollipop
                                                    chocolate. Ice cream cookie dragée cake sweet roll
                                                    sweet roll.Lemon drops cookie muffin carrot cake
                                                    chocolate marzipan gingerbread topping chocolate
                                                    bar. Soufflé tiramisu pastry sweet dessert.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="info" role="tabpanel"
                                        aria-labelledby="info-tab">
                                        <div class="table-responsive">
                                            <table class="table info-table">
                                                <tbody>
                                                    <tr>
                                                        <td>Specialty</td>
                                                        <td>Vegetarian</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ingredient Type</td>
                                                        <td>Vegetarian</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Brand</td>
                                                        <td>Lavian Exotique</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Form</td>
                                                        <td>Bar Brownie</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Package Information</td>
                                                        <td>Box</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Manufacturer</td>
                                                        <td>Prayagh Nutri Product Pvt Ltd</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Item part number</td>
                                                        <td>LE 014 - 20pcs Crème Bakes (Pack of 2)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Net Quantity</td>
                                                        <td>40.00 count</td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                                    <img src="https://static.dezeen.com/uploads/2023/03/7up-rebrands-uplifting-pepsico_dezeen_2364_hero_14-600x600.jpg"
                                        class="blur-up lazyload" alt="Vendor Image" />
                                </div>
                                <div class="vendor-name">
                                    <h5 class="fw-500">Noodles Co.</h5>
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
                                Noodles & Company is an American fast-casual restaurant that
                                offers international and American noodle dishes and pasta.
                            </p>
                            <div class="vendor-list">
                                <ul>
                                    <li>
                                        <div class="address-contact">
                                            <i data-feather="map-pin"></i>
                                            <h5>
                                                Address:
                                                <span class="text-content">1288 Franklin Avenue</span>
                                            </h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="address-contact">
                                            <i data-feather="headphones"></i>
                                            <h5>
                                                Contact Seller:
                                                <span class="text-content">(+1)-123-456-789</span>
                                            </h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pt-25">
                            <div class="category-menu">
                                <h3>Trending Products</h3>
                                <ul class="product-list product-right-sidebar border-0 p-0">
                                    <li>
                                        <div class="offer-product">
                                            <a href="#" class="offer-image">
                                                <img src="https://www.dreamhost.com/blog/wp-content/uploads/2019/06/afa314e6-1ae4-46c5-949e-c0a77f042e4f_DreamHost-howto-prod-descrips-full.jpeg"
                                                    class="img-fluid blur-up lazyload" alt="Product Image" />
                                            </a>
                                            <div class="offer-detail">
                                                <div>
                                                    <a href="#">
                                                        <h6 class="name">Meatigo Premium Goat Curry</h6>
                                                    </a>
                                                    <span>450 G</span>
                                                    <h6 class="price theme-color">$ 70.00</h6>
                                                </div>
                                            </div>
                                        </div>
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
