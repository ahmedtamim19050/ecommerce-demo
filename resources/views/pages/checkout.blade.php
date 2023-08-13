@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/checkout.css') }}">
@endsection
@section('content')
    <section class="checkout-section-2 mb-4">
        <div class="container-fluid">
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
                                                <div class="col-xxl-6 col-lg-12 col-md-6">
                                                    <div class="delivery-address-box">
                                                        <div class="justify-content-between">
                                                            <div class="d-flex">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="jack" id="flexRadioDefault1" />
                                                                </div>

                                                                <ul class="delivery-address-detail">
                                                                    <li>
                                                                        <h4 class="fw-500">Jack Jennas</h4>
                                                                    </li>

                                                                    <li>
                                                                        <p class="text-content">
                                                                            <span class="text-title">Address : </span>8424
                                                                            James
                                                                            Lane South San Francisco, CA
                                                                            94080
                                                                        </p>
                                                                    </li>

                                                                    <li>
                                                                        <h6 class="text-content">
                                                                            <span class="text-title">Pin Code :</span>
                                                                            +380
                                                                        </h6>
                                                                    </li>

                                                                    <li>
                                                                        <h6 class="text-content mb-0">
                                                                            <span class="text-title">Phone :</span>
                                                                            + 380 (0564) 53 - 29 - 68
                                                                        </h6>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="d-flex">
                                                                <label><a href="" class="label">Edit</a></label>
                                                                <label><a href=""
                                                                        class="ms-1 red-label">Remove</a></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-lg-12 col-md-6">
                                                    <div class="delivery-address-box">
                                                        <div class="justify-content-between">
                                                            <div class="d-flex">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="jack" id="flexRadioDefault1" />
                                                                </div>

                                                                <ul class="delivery-address-detail">
                                                                    <li>
                                                                        <h4 class="fw-500">Jack Jennas</h4>
                                                                    </li>

                                                                    <li>
                                                                        <p class="text-content">
                                                                            <span class="text-title">Address : </span>8424
                                                                            James
                                                                            Lane South San Francisco, CA
                                                                            94080
                                                                        </p>
                                                                    </li>

                                                                    <li>
                                                                        <h6 class="text-content">
                                                                            <span class="text-title">Pin Code :</span>
                                                                            +380
                                                                        </h6>
                                                                    </li>

                                                                    <li>
                                                                        <h6 class="text-content mb-0">
                                                                            <span class="text-title">Phone :</span>
                                                                            + 380 (0564) 53 - 29 - 68
                                                                        </h6>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="d-flex">
                                                                <label><a href="" class="label">Edit</a></label>
                                                                <label><a href=""
                                                                        class="ms-1 red-label">Remove</a></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

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
                                                        <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapseFour">
                                                            <div class="custom-form-check form-check mb-0">
                                                                <label class="form-check-label" for="cash"><input
                                                                        class="form-check-input mt-0" type="radio"
                                                                        name="flexRadioDefault" id="cash" checked />
                                                                    Cash On Delivery</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="flush-collapseFour" class="accordion-collapse collapse show"
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
                                                        <div class="accordion-button collapsed" data-bs-toggle="collapse"
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
                                                                            <label for="credit2">Enter Credit & Debit Card
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

                                                                <div class="col-xxl-4">
                                                                    <div
                                                                        class="form-floating mb-lg-3 mb-2 theme-form-floating">
                                                                        <input type="password" class="form-control"
                                                                            id="password" placeholder="Enter Password" />
                                                                        <label for="password">Password</label>
                                                                    </div>
                                                                </div>

                                                                <div class="mt-0">
                                                                    <ul class="d-flex justify-content-end">
                                                                        <li>
                                                                            <button class="btn btn-light shopping-button">
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
                                <li>
                                    <img src="./7up.png" class="img-fluid blur-up lazyloaded checkout-image"
                                        alt="" />
                                    <h4>Bell pepper <span>X 1</span></h4>
                                    <h4 class="price">$32.34</h4>
                                </li>
                            </ul>

                            <ul class="summery-total">
                                <li>
                                    <h4>Subtotal</h4>
                                    <h4 class="price">$111.81</h4>
                                </li>

                                <li>
                                    <h4>Shipping</h4>
                                    <h4 class="price">$8.90</h4>
                                </li>

                                <li>
                                    <h4>Tax</h4>
                                    <h4 class="price">$29.498</h4>
                                </li>

                                <li>
                                    <h4>Coupon/Code</h4>
                                    <h4 class="price">$-23.10</h4>
                                </li>

                                <li class="list-total">
                                    <h4>Total (USD)</h4>
                                    <h4 class="price">$19.28</h4>
                                </li>
                            </ul>
                        </div>

                        <button class="btn theme-bg-color text-white btn-md w-100 mt-4 fw-bold">
                            Place Order
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">
                            Add New Address
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="address">Name</label>
                            <input type="text" class="form-control" id="address"
                                placeholder="Enter your address" />
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" class="form-control" id="phone"
                                placeholder="Enter your phone number" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email" />
                        </div>
                        <div class="form-group">
                            <label for="addresss">Address</label>
                            <input type="text" class="form-control" id="addresss"
                                placeholder="Enter your address" />
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" placeholder="Enter your city" />
                        </div>
                        <div class="form-group">
                            <label for="state">State</label>
                            <input type="text" class="form-control" id="state" placeholder="Enter your state" />
                        </div>
                        <div class="form-group">
                            <label for="post_code">Post Code</label>
                            <input type="text" class="form-control" id="post_code"
                                placeholder="Enter your post code" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                            Cancel
                        </button>
                        <button type="button" class="btn btn-success">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
@endsection
