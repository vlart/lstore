@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')

    <section class="checkout-section">
        <div class="checkout">
            <h4 class="ch-out-page page-name-h4">Checkout</h4>
            <div class="ch-cards-block"><img class="ch-img" src="images/visa.svg" width="50"><img class="ch-img" src="images/mastercard2.svg" width="50"><img class="ch-img" src="images/american-express.svg" width="50">
            </div>
            <div class="ch-text">Amount to pay:</div>
            <h4 class="ch-h4-amount">{{$total}}$</h4>
            <div>
                <div class="w-form">
                    <div id="charge-error" class="alert alert-danger{{!Session::has('error') ? 'hidden' : ''}}">
                        {{Session::get('error')}}
                    </div>
                    <form class="ch-form" action="{{route('checkout')}}" method="post"  id="checkout-form" name="checkout-form">
                        <label class="ch-label" for="c-name">Name on a card:</label>
                        <input class="ch-input w-input"  id="c-name" maxlength="50" name="card-name" placeholder="Enter your name" type="text">

                        <label class="ch-label" for="c-address">Shipping address:</label>
                        <input class="ch-input w-input"  id="c-address" maxlength="200" name="c-address" placeholder="Enter your address" type="text">

                        <label class="ch-label" for="c-number">Card number:</label>
                        <input class="ch-input w-input"  id="c-number" maxlength="16" name="card-number" placeholder="Enter your card number" required="required" type="text">

                        <div class="ch-item-group">
                            <input class="ch-input-split right w-input" data-name="CVC Field" id="CVC-Field" maxlength="3" name="CVC-Field" placeholder="CVC" required="required" type="text">

                            <input class="ch-input-split mid-year w-input" data-name="Expiration Date Field" id="Exp-year" maxlength="4" name="Exp-year" placeholder="YY" required="required" type="text">

                            <input class="ch-input-split left-month w-input" data-name="Expiration Date Field" id="Exp-month" maxlength="2" name="Exp-month" placeholder="MM" required="required" type="text">

                            <label class="ch-label" for="CVC-Field">Card CVC:</label>

                            <label class="ch-label" for="Exp-month">Exp. Date:</label>
                        </div>

                        {{csrf_field()}}

                        <input class="submit-button w-button" data-wait="Please wait..." type="submit" value="Buy Now">

                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('scripts')
    {{--<script src="https://js.stripe.com/v3/"></script>--}}
    <script src="https://js.stripe.com/v2/"></script>

    <script src="{{ URL::asset('js/checkout.js') }}"></script>

@endsection

