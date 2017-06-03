@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
    <div class="section">
    @if(Session::has('cart'))

            <div class="container">
                <h4 class="page-name-h4">CART</h4>
            </div>
            <div class="cart-page container">
                    <div class="cart-items">
                        <div class="cart-page simple-txt"><span class="items-number-in-the-cart">{{Session::has('cart') ? Session::get('cart')->totalQty: ''}}</span>item(s) in the cart</div>
                        @foreach($products as $product)
                        <div class="cart-item">
                            <a class="cart-img-link-block w-inline-block" href="#"><img class="cart-product-img" src="https://d3e54v103j8qbb.cloudfront.net/img/image-placeholder.svg">
                            </a>
                            <div class="cart-product-desc-block">
                                <h4 class="heading-3">{{$product['item']['title']}}</h4>
                                <div class="sold-by-cart-text">Sold by <a class="cart-store-link">Store name</a>
                                </div><a class="cart-store-link" href="#">Save for later</a>
                                <a class="cart-store-link" href="#">Remove all</a>
                                <a class="cart-store-link" href="#">Remove by one</a>

                            </div>
                            <div class="cart-info">
                                <div class="cart product-price">{{ $product['price'] }} $</div>
                                <div class="w-form">
                                    <form data-name="Email Form 2" id="email-form-2" name="email-form-2">
                                        <input class="text-field w-input" data-name="quantity" id="quantity" maxlength="256" name="quantity" required="required" type="text" value="{{$product['qty']}}">
                                    </form>
                                    <div class="w-form-done">
                                        <div>Thank you! Your submission has been received!</div>
                                    </div>
                                    <div class="w-form-fail">
                                        <div>Oops! Something went wrong while submitting the form</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="cart-total-price">
                            <h4 class="page-name-h4 white">Total: </h4>
                            <div class="product-price total"> {{$totalPrice}} $</div>
                        </div>


                        <div class="cart-total-price">
                            <h4 class="page-name-h4 white">Next step: </h4>
                            <a href="{{route('checkout')}}" type="button" class="btn submit-button">Checkout</a>
                        </div>
                    </div>




                {{--<div class="cart-payment-method">--}}
                    {{--<div class="cart-page simple-txt">payment method</div>--}}
                {{--</div>--}}
            </div>
            @else

            <div class="empty-card-block"><img class="empty-card-img" height="160" src="images/online-shopping-cart.svg" width="160">
                <h4 class="heading-empty-cart">Your cart is currently empty</h4>
                <div class="empty-cart-page simple-txt">Browse the shop to find popular sale items</div><a class="reg-button w-button" href="{{ url('/') }}">Shop</a>
            </div>

    @endif
    </div>
@endsection