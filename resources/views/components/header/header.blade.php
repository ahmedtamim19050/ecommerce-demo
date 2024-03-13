@php
    $route = route('shops');
@endphp
<header>
    <!-- First Navbar with Logo and Search Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-desktop">
        <div class="container-fluid">
            <div class="navbar-header col-md-2">
                <a class="navbar-brand" href="{{ route('homepage') }}">
                    <img src="{{ asset('assets/img/1.png') }}" alt="Logo" width="150" class="logo" />
                </a>
            </div>
            <div class="d-flex align-items-center col-md-10">
                <form class="d-flex col-md-8">
                    <input class="form-control search-bar rounded-start rounded-end-0" type="search"
                        placeholder="Search" aria-label="Search" />
                    <button class="btn btn-dark text-white rounded-end rounded-start-0" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>

                <!-- Add ms-auto to move the ul to the right -->
                <div class="col-md-4">
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link custom-icon border rounded-circle mx-2" href="#">
                                <i class="icon-menu fa-regular fa-heart"></i>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link custom-icon border rounded-circle mx-2" href="#">
                                <i class="fa-solid fa-cart-shopping icon-menu"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link border custom-icon rounded-circle mx-2" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-regular fa-user icon-menu"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Login</a></li>
                                <li><a class="dropdown-item" href="#">Register</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Second Navbar with Menu Items and Icons -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-desktop">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto align-items-center second-nav">
                    <li class="nav-item">
                        <a class="nav-link menu-item-line" href="{{ route('homepage') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-item-line" href="{{ route('shops') }}">Shops</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-item-line" href="#">Products</a>
                    </li>
                    @php
                        $popularCategories = App\Models\Prodcat::select(
                            'prodcats.*',
                            DB::raw('COUNT(prodcat_product.product_id) as popularCategories'),
                        )
                            ->leftJoin('prodcat_product', 'prodcats.id', '=', 'prodcat_product.prodcat_id')
                            ->groupBy('prodcats.id')
                            ->orderByDesc('popularCategories')
                            ->limit(3)
                            ->get();
                    @endphp

                    @foreach ($popularCategories as $item)
                        {{-- @dd($item) --}}
                        <li class="nav-item">
                            <a id="categoryId" class="nav-link menu-item-line " href="javascript::void(0)"
                                onclick='updateSearchParams("category","{{ $item->slug }}","{{ $route }}")'>{{ $item->name }}</a>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </nav>

    {{-- Mobile version --}}

    <div class="navbar-mobile">
        <a href="#">
            <img src="{{ asset('assets/img/1.png') }}" alt="Logo" class="navbar-mobile-logo" />
        </a>
        <div class="navbar-mobile-search">
            <input class="form-control search-bar" type="search" placeholder="Search" aria-label="Search" />
        </div>
        <div class="navbar-mobile-icons">
            <a class="custom-icon" href="#">
                <i class="fa-regular fa-user icon-menu"></i>
            </a>
        </div>
    </div>


    <div class="container-fluid">
        <div class="navbar-bottom">
            <a class="nav-link" href="#">
                <div class="d-flex flex-column align-items-center">
                    <i class="fa-solid fa-house-chimney"></i>
                    <span>Home</span>
                </div>
            </a>
            <a class="nav-link" href="#">
                <div class="d-flex flex-column align-items-center">
                    <i class="fa-solid fa-table"></i>
                    <span>Categories</span>
                </div>
            </a>
            <a class="nav-link" href="#">
                <div class="d-flex flex-column align-items-center">
                    <i class="fa-solid fa-shop"></i>
                    <span>Shops</span>
                </div>
            </a>
            <a class="nav-link" href="#">
                <div class="d-flex flex-column align-items-center">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span>Cart</span>
                </div>
            </a>
            <a class="nav-link" href="#">
                <div class="d-flex flex-column align-items-center">
                    <i class="fa-solid fa-heart"></i>
                    <span>Wishlist</span>
                </div>
            </a>
        </div>
    </div>
</header>
