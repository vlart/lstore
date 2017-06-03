@extends('layouts.master')

@section('title')
    Laravel Store
@endsection

@section('content')@if(Session::has('success'))
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <div id="charge-message" class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        </div>
    </div>
@endif

    <main class="main">


        <h4 class="section-heading">TRENDING</h4>


        @foreach($products as $product)
            <div class="_1-4-product-card">
                <a class="link-block w-inline-block" href="#"><img class="product-card-image" sizes="(max-width: 479px) 43vw, (max-width: 767px) 44vw, (max-width: 991px) 29vw, 215.59375px" src="{{$product->imagePath}}" >
                </a>
                <div class="product-info-block">
                    <div class="product-desc-block"><a class="product-name" href="#">{{$product->title}}</a>
                        <div class="like-block">
                            <div class="like-count">{{$product->like_count}}</div>
                            <a class="like-link-block w-inline-block" href="#"><img class="star-img" src="images/star-sign.svg" width="30">
                            </a>
                        </div>
                    </div>
                    <div class="some-action">
                        <div class="product-price">{{$product->price}}$</div><a class="add-to-cart-btn w-button" href="{{route('product.addToCart', ['id' => $product->id])}}">add to cart</a>
                    </div>
                </div>
            </div>
        @endforeach
    </main>
@endsection
{{--smth--}}