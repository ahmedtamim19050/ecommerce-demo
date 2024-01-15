@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/checkout.css') }}">
@endsection
@section('content')
    <section class="checkout-section-2 mb-4">
        <div class="container-fluid">
            <form class="" action="{{ route('checkout.store') }}" method="POST">
                @csrf
                <div class="row g-sm-4 g-3">
                    <div class="col-lg-8">
                        <div class="left-sidebar-checkout">
                            <div class="checkout-detail-box">
                                <ul>
                                    <li>
                                        <div class="checkout-box">
                                            <div class="checkout-title mb-3">
                                                <h4>Delivery Address</h4>
                                                <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                                                    data-bs-target="#staticBackdrop">
                                                    Add new address <i class="fa-solid fa-plus"></i>
                                                </button>
                                            </div>

                                            <div class="checkout-detail">
                                                <div class="row g-4">
                                                    @if (Auth()->user()->addresses->count() == !0)
                                                        @foreach (Auth()->user()->addresses as $address)
                                                            <div class="col-xxl-6 col-lg-12 col-md-6">
                                                                <div class="delivery-address-box">
                                                                    <div class="justify-content-between">
                                                                        <div class="d-flex">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="radio"
                                                                                    value="{{ $address->id }}"
                                                                                    name="prevoius_address"
                                                                                    id="flexRadioDefault1" />
                                                                            </div>

                                                                            <ul class="delivery-address-detail">
                                                                                <li>
                                                                                    <h4 class="fw-500">
                                                                                        {{ $address->fullName ?? $address->user->name }}
                                                                                    </h4>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="text-content">
                                                                                        <span class="text-title">Address :
                                                                                        </span>
                                                                                        {{ $address->fullAddress }}
                                                                                    </p>
                                                                                </li>

                                                                                <li>
                                                                                    <h6 class="text-content">
                                                                                        <span class="text-title">Post Code
                                                                                            :</span>
                                                                                        {{ $address->post_code }}
                                                                                    </h6>
                                                                                </li>

                                                                                <li>
                                                                                    <h6 class="text-content mb-0">
                                                                                        <span class="text-title">Phone
                                                                                            :</span>
                                                                                        {{ $address->phone }}
                                                                                    </h6>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="d-flex">
                                                                            <label><a href=""
                                                                                    class="label">Edit</a></label>
                                                                            <label><a
                                                                                    href="{{ route('user.address.destroy', $address) }}"
                                                                                    onclick="return confirm('Are you sure you want to delete this Address?');"
                                                                                    class="ms-1 red-label">Remove</a></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div class="col-xxl-6 col-lg-12 col-md-6">
                                                            <div class="delivery-address-box">
                                                                <span>No Address has been added. Please Add a New
                                                                    Address</span>
                                                            </div>
                                                        </div>
                                                    @endif


                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="mt-4">
                                        <div class="checkout-box">
                                            <div class="checkout-title">
                                                <h4>Payment Option</h4>
                                            </div>

                                            <div class="checkout-detail">
                                                <div class="accordion accordion-flush custom-accordion"
                                                    id="accordionFlushExample">
                                                    <div class="accordion-item">
                                                        <div class="accordion-header" id="flush-headingFour">
                                                            <div class="accordion-button collapsed"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#flush-collapseFour">
                                                                <div class="custom-form-check form-check mb-0">
                                                                    <label class="form-check-label" for="cash"><input
                                                                            class="form-check-input mt-0" type="radio"
                                                                            name="flexRadioDefault" id="cash"
                                                                            checked />
                                                                        Cash On Delivery</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="flush-collapseFour"
                                                            class="accordion-collapse collapse show"
                                                            data-bs-parent="#accordionFlushExample">
                                                            <div class="accordion-body">
                                                                <p class="cod-review">
                                                                    Pay after you get the product in your hand
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="accordion-item">
                                                        <div class="accordion-header" id="flush-headingOne">
                                                            <div class="accordion-button collapsed"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#flush-collapseOne">
                                                                <div class="custom-form-check form-check mb-0">
                                                                    <label class="form-check-label" for="credit"><input
                                                                            class="form-check-input mt-0" type="radio"
                                                                            name="flexRadioDefault" id="credit" />
                                                                        Credit or Debit Card</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionFlushExample">
                                                            <div class="accordion-body">
                                                                <div class="row g-2">
                                                                    <div class="col-12">
                                                                        <div class="payment-method">
                                                                            <div
                                                                                class="form-floating mb-lg-3 mb-2 theme-form-floating">
                                                                                <input type="text" class="form-control"
                                                                                    id="credit2"
                                                                                    placeholder="Enter Credit & Debit Card Number" />
                                                                                <label for="credit2">Enter Credit & Debit
                                                                                    Card
                                                                                    Number</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xxl-4">
                                                                        <div
                                                                            class="form-floating mb-lg-3 mb-2 theme-form-floating">
                                                                            <input type="text" class="form-control"
                                                                                id="expiry"
                                                                                placeholder="Enter Expiry Date" />
                                                                            <label for="expiry">Expiry Date</label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xxl-4">
                                                                        <div
                                                                            class="form-floating mb-lg-3 mb-2 theme-form-floating">
                                                                            <input type="text" class="form-control"
                                                                                id="cvv"
                                                                                placeholder="Enter CVV Number" />
                                                                            <label for="cvv">CVV Number</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-0">
                                                                        <ul class="d-flex justify-content-end">
                                                                            <li>
                                                                                <button
                                                                                    class="btn btn-light shopping-button">
                                                                                    Cancel
                                                                                </button>
                                                                            </li>

                                                                            <li>
                                                                                <button class="btn btn-animation ms-3">
                                                                                    Use This Card
                                                                                </button>
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
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="right-side-summery-box">
                            <div class="summery-box-2">
                                <div class="summery-header">
                                    <h3>Order Summery</h3>
                                </div>

                                <ul class="summery-contain">
                                    @foreach ($cartCollection as $item)
                                        <li>
                                            <img src="{{ Storage::url($item->model->image) }}"
                                                class="img-fluid blur-up lazyloaded checkout-image"
                                                alt="{{ $item->name }}" />
                                            <h4>{{ $item->name }} <span>X {{ $item->quantity }}</span></h4>
                                            <h4 class="price">{{ Sohoj::price($item->price * $item->quantity) }}</h4>
                                        </li>
                                    @endforeach
                                </ul>

                                <ul class="summery-total">
                                    <li>
                                        <h4>Subtotal</h4>
                                        <h4 class="price">{{ Sohoj::price(Sohoj::newSubtotal()) }}</h4>
                                    </li>

                                    <li>
                                        <h4>Tax</h4>
                                        <h4 class="price">{{ Sohoj::price(Sohoj::tax()) }}</h4>
                                    </li>

                                    @if (session()->has('discount'))
                                        <li class="d-flex">
                                            <span class="text-left">Discount <a href="{{ route('coupon.destroy') }}"
                                                    class="text-danger"
                                                    style="text-decoration: underline">Delete</a></span>
                                            <h4 class="price">{{ Sohoj::price(Sohoj::discount()) }}</h4>
                                        </li>
                                    @endif

                                    <li class="list-total">
                                        <h4>Total </h4>
                                        <h4 class="price">{{ Sohoj::price(Sohoj::newItemTotal()) }}</h4>
                                    </li>
                                </ul>
                            </div>

                            <button class="btn theme-bg-color text-white btn-md w-100 mt-4 fw-bold" type="submit">
                                Place Order
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- Modal -->
        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('user.address.store') }}" method="post">
                        @csrf
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                Add New Address
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="address">First Name</label>
                                <input type="text" class="form-control" id="address" name="first_name"
                                    placeholder="Enter your First Name" />
                            </div>
                            <div class="form-group">
                                <label for="address">Last Name</label>
                                <input type="text" class="form-control" id="address" name="last_name"
                                    placeholder="Enter your Last Name" />
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control" id="phone" name="phone"
                                    placeholder="Enter your phone number" />
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter your email" />
                            </div>
                            <div class="form-group">
                                <label for="addresss">Address</label>
                                <input type="text" class="form-control" id="addresss" name="address_1"
                                    placeholder="Enter your address" />
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" id="city" name="city"
                                    placeholder="Enter your city" />
                            </div>
                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="text" class="form-control" id="state" name="state"
                                    placeholder="Enter your state" />
                            </div>
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" id="country" name="country"
                                    placeholder="Enter your Country" />
                            </div>
                            <div class="form-group">
                                <label for="post_code">Post Code</label>
                                <input type="text" class="form-control" id="post_code" name="post_code"
                                    placeholder="Enter your Post Code" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-success">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
@endsection
