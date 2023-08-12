@extends('layouts.app')
@section('css')
  
    <link rel="stylesheet" href="{{ asset('assets/css/cart.css') }}">
@endsection
@section('content')
    <section class="mt-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-12">
                    <div class="tables">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="product-detail">
                                        <div class="product border-0">
                                            <a href="" class="product-image">
                                                <img src="./7up.png" class="img-fluid blur-up lazyloaded" alt="" />
                                            </a>
                                            <div class="product-details">
                                                <ul>
                                                    <li class="name">
                                                        <a href="" class="">Product Name</a>
                                                    </li>
                                                    <li class="text-content">
                                                        <span>Sold By: </span>Buyer Name
                                                    </li>
                                                    <li class="text-content">
                                                        <span>Weight: </span> Weight
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="price">
                                        <h4 class="table-title text-content">Price</h4>
                                        <h5>$35 <del class="text-content ms-1">$45</del></h5>
                                    </td>
                                    <td class="qty">
                                        <h4 class="table-title text-content">Qty</h4>
                                        <form action="">
                                            <input type="text" name="" class="form-control" />
                                        </form>
                                    </td>
                                    <td class="total">
                                        <h4 class="table-title text-content">Total</h4>
                                        <h5>$35</h5>
                                    </td>
                                    <td class="action">
                                        <h4 class="table-title text-content">Action</h4>
                                        <a class="btn btn-danger" href="">Remove</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="cart-box p-2">
                        <div class="cart-header">
                            <h4>Cart Total</h4>
                        </div>
                        <div class="cart-contain">
                            <div class="couppon">
                                <h6 class="text-content mb-2">Couppon Apply</h6>
                                <form action="" class="mb-3 input-group coupon-box">
                                    <input type="text" class="form-control" />
                                    <button class="btn btn-success">Apply</button>
                                </form>
                            </div>
                            <ul class="p-0">
                                <li class="d-flex">
                                    <h4>Subtotal</h4>
                                    <h4 class="price text-end">$123</h4>
                                </li>
                                <li class="d-flex">
                                    <h4>Couppon Discount</h4>
                                    <h4 class="price text-end">$123</h4>
                                </li>
                                <li class="d-flex">
                                    <h4>Shipping</h4>
                                    <h4 class="price text-end">$123</h4>
                                </li>
                            </ul>
                        </div>
                        <ul class="cart-total px-3">
                            <li class="list-total border-top-0">
                                <h4>Total (USD)</h4>
                                <h4 class="price theme-color">$132.58</h4>
                            </li>
                        </ul>
                        <div class="button-group cart-button">
                            <ul class="p-0">
                                <li>
                                    <button onclick="location.href = 'checkout.html';"
                                        class="btn btn-animation proceed-btn fw-bold mb-2">
                                        Process To Checkout
                                    </button>
                                </li>

                                <li>
                                    <button onclick="location.href = 'index.html';"
                                        class="btn btn-light shopping-button text-dark">
                                        <i class="fa-solid fa-arrow-left-long"></i>Return To
                                        Shopping
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
