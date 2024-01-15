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
                                @foreach ($cartCollection as $item)
                                    {{-- @dd($item) --}}
                                    <tr>

                                        <td class="product-detail">
                                            <div class="product border-0">
                                                <a href="" class="product-image">
                                                    <img src="{{ Storage::url($item->model->image) }}"
                                                        class="img-fluid blur-up lazyloaded" alt="{{ $item->name }}" />
                                                </a>
                                                <div class="product-details">
                                                    <ul>
                                                        <li class="name">
                                                            <a href="" class="">{{ $item->name }}</a>
                                                        </li>
                                                        <li class="text-content">
                                                            <span>Sold By: </span>{{ $item->model->shop->name }}
                                                        </li>
                                                        <li class="text-content">
                                                            <span>Weight: </span> {{ $item->model->weight }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="price">
                                            <h4 class="table-title text-content">Price</h4>
                                            <h5>{{ Sohoj::price($item->price) }} </h5>
                                        </td>
                                        <td class="qty">
                                            <h4 class="table-title text-content">Qty</h4>
                                            <form action="{{ route('cart.update') }}" method="POST" class="update-form">
                                                @csrf

                                                <div class="d-flex">
                                                    <input type="number" name="quantity"
                                                        class="form-control quantity-input" value="{{ $item->quantity }}" />
                                                    <input type="hidden" name="product_id"
                                                        value="{{ $item->model->id }}" />
                                                    <button type="submit" class="btn btn-success ms-3 update-button"
                                                        style="display:none;"><i
                                                            class="fa-solid fa-clipboard-check"></i></button>
                                                </div>
                                            </form>
                                        </td>
                                        <td class="total">
                                            <h4 class="table-title text-content">Total</h4>
                                            <h5>{{ Sohoj::price($item->price * $item->quantity) }}</h5>
                                        </td>
                                        <td class="action">
                                            <h4 class="table-title text-content">Action</h4>
                                            <a class="btn btn-danger" href=""><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="cart-box p-2">
                        <div class="cart-header justify-content-between">
                            <div class="titl">
                                <h4>Cart Total</h4>
                            </div>
                            <span class="text-end">Total ({{ Cart::getTotalQuantity() }} items)</span>
                        </div>
                        <div class="cart-contain">

                            @if (!session()->has('discount'))
                                <div class="couppon">
                                    <h6 class="text-content mb-2">Couppon Apply</h6>
                                    <form class="mb-3 input-group coupon-box" method="POST"
                                        action="{{ route('coupon') }}>
                                        @csrf
                                        <input type="text"
                                        class="form-control" name="coupon_code" />
                                    <button class="btn btn-success" type="submit" name="subscribe">Apply</button>
                                    </form>
                                </div>
                            @endif
                            <ul class="p-0">
                                @if (session()->has('discount'))
                                    <li class="d-flex">
                                        <span class="text-left">Discount <a href="{{ route('coupon.destroy') }}"
                                                class="text-danger" style="text-decoration: underline">Delete</a></span>
                                        <span class="text-right">{{ Sohoj::price(Sohoj::discount()) }}</span>
                                    </li>
                                @endif
                                <li class="d-flex">
                                    <h4>Subtotal</h4>
                                    <h4 class="price text-end">{{ Sohoj::price(Sohoj::newSubtotal()) }}</h4>
                                </li>

                                <li class="d-flex">
                                    <h4>Tax</h4>
                                    <h4 class="price text-end">{{ Sohoj::price(Sohoj::tax()) }}</h4>
                                </li>
                            </ul>
                        </div>
                        <ul class="cart-total px-3">
                            <li class="list-total border-top-0">
                                <h4>Total</h4>
                                <h4 class="price theme-color">{{ Sohoj::price(Sohoj::newItemTotal()) }}</h4>
                            </li>
                        </ul>
                        <div class="button-group cart-button">
                            <ul class="p-0">
                                <li>
                                    <a href = '{{ route('checkout') }}' class="btn btn-animation proceed-btn fw-bold mb-2">
                                        Process To Checkout
                                    </a>
                                </li>

                                <li>
                                    <button onclick="location.href = '{{ route('homepage') }}';"
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
@section('js')
    <script>
        $(document).ready(function() {
            $('.quantity-input').on('input', function() {
                // Find the closest update button within the same form
                var updateButton = $(this).closest('.update-form').find('.update-button');

                // Show or hide the button based on input value
                if ($(this).val().trim() !== '') {
                    updateButton.show();
                } else {
                    updateButton.hide();
                }
            });
        });
    </script>
@endsection
