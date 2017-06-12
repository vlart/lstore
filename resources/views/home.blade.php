@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">


            <div class="section">
                <div class="container">
                    <h4 class="page-name-h4">DASHBOARD</h4>
                </div>

                <div class="container dash-container">
                    {{--@foreach($orders as $order)--}}
                    {{--<div class="cart-items ">--}}
                        {{--<div class="cart-page simple-txt">Purchased items</div>--}}
                            {{--@foreach($order->cart->items as $item)--}}
                            {{--<div class="cart-item dash-cart-item">--}}
                            {{--<div class="cart-product-desc-block dash-prod-block">--}}
                                {{--<div class="dash-text simple-txt">{{$item['item']['title']}}</div>--}}
                                {{--<div class="dash-prod-price product-price">{{$item['price']}}$</div>--}}
                                {{--<div class="simple-txt dash-text">{{$item['qty']}} </div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                            {{--@endforeach--}}

                        {{--<div class="cart-total-price dash-total">--}}
                            {{--<div class="cart-product-desc-block dash-prod-block">--}}
                                {{--<h4 class="page-name-h4 white">Total:&nbsp;</h4>--}}
                                {{--<div class="dash-prod-price product-price">{{$order->cart->totalPrice}}$</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--@endforeach--}}



                            <div class="cart-items ">
                                <div class="cart-page simple-txt">Purchased items</div>
                                    <div class="cart-item dash-cart-item">
                                        <div class="cart-product-desc-block dash-prod-block">
                                            <div class="dash-text simple-txt">Product Name</div>
                                            <div class="dash-prod-price product-price">250 $ х2</div>
                                        </div>

                                    </div>

                                <div class="cart-total-price dash-total">
                                    <div class="cart-product-desc-block dash-prod-block">
                                        <h4 class="page-name-h4 white">Total:&nbsp;</h4>
                                        <div class="dash-prod-price product-price">500 $</div>
                                    </div>
                                </div>
                            </div>

                </div>
            </div>

    </div>
</div>
@endsection
