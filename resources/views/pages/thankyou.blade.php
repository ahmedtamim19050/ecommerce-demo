@extends('layouts.app')
@section('css')
    <style>
        .thankyou {
            background-color: #f8f9fa;
            padding: 40px;
            text-align: center;
        }

        .thank-you-container {
            max-width: 600px;
            margin: auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .thank-you-message {
            font-size: 24px;
            color: #28a745;
            margin-bottom: 20px;
        }



        .back-to-home:hover {
            background-color: #0056b3;
        }
    </style>
@endsection
@section('content')
    <!-- Ec Thank You page -->
    {{-- <section class="ec-thank-you-page section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ec-thank-you section-space-p">
                        <!-- thank content Start -->
                        <div class="ec-thank-content">
                            <i class="ecicon eci-check-circle" aria-hidden="true"></i>
                            <div class="section-title">
                                <h2 class="ec-title">Thank You</h2>
                                <p class="sub-title">For Shopping with us.</p>
                            </div>
                        </div>
                        <!--thank content End -->
                        <div class="ec-hunger">
                            <div class="ec-hunger-detial">
                                <h3>Want to track your order?</h3>
                                <h6>Just click the link below.</h6>
                                <a href="{{ route('user.ordersIndex') }}" class="btn btn-danger rounded">Track Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="thankyou">
        <div class="thank-you-container">
            <div class="thank-you-message">
                <p>Thank you for your submission!</p>
                <p>We appreciate your time and effort.</p>
                <img src="{{ asset('assets/img/200w.gif') }}" alt="Thank you">
            </div>

            <a href="{{route('homepage')}}" class="btn btn-primary">Back to Home</a>
        </div>
    </section>
@endsection
@section('js')
@endsection
