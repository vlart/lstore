@extends('layouts.master')

@section('title')
    Laravel Store
@endsection

@section('content')
<section class="slider">
    <div class="top-slider w-slider" data-animation="slide" data-duration="500" data-infinite="1">
        <div class="w-slider-mask">
            <div class="slide w-clearfix w-slide">
                <h2 class="right slider-heading">EVERY DAY IS A JOY&nbsp;</h2>
            </div>
            <div class="slide-2 w-clearfix w-slide">
                <h2 class="left slider-heading">LOVE WHAT YOU DO</h2>
            </div>
            <div class="slide-3 w-clearfix w-slide">
                <h2 class="right slider-heading">IT'S ALL ABOUT HAPPINESS</h2>
            </div>
        </div>
        <div class="w-slider-arrow-left arrow-left">
            <div class="w-icon-slider-left left-icon"></div>
        </div>
        <div class="w-slider-arrow-right arrow-right">
            <div class="w-icon-slider-right right-icon"></div>
        </div>
        <div class="top-slider-nav w-round w-slider-nav"></div>
    </div>
</section>
<div class="section">
    @if(Session::has('success'))
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div id="charge-message" class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
    @endif
    <div class="container bodysection">


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
        <aside class="sidebar">
            <div class="popular-block popular-prod">
                <h4 class="section-heading">POPULAR</h4>
                <a class="popular-img-link w-inline-block" href="#"><img class="popular-img" sizes="(max-width: 479px) 41vw, 110px" src="images/m0851-555421.jpg" srcset="images/m0851-555421-p-500.jpeg 500w, images/m0851-555421.jpg 1400w">
                </a>
                <a class="popular-img-link w-inline-block" href="#"><img class="popular-img" sizes="(max-width: 479px) 41vw, 110px" src="images/Screen-Shot-2017-05-12-at-1.18.52-PM.png" srcset="images/Screen-Shot-2017-05-12-at-1.18.52-PM-p-500.png 500w, images/Screen-Shot-2017-05-12-at-1.18.52-PM.png 1070w">
                </a>
                <a class="popular-img-link w-inline-block" href="#"><img class="popular-img" src="images/c254e43eadbd80529961ed3025a8f3f9.jpg">
                </a>
                <a class="popular-img-link w-inline-block" href="#"><img class="popular-img" src="images/prod/circlelamp1.jpg">
                </a>
                <a class="popular-img-link w-inline-block" href="#"><img class="popular-img" src="images/prod/leatherstrap.jpg">
                </a>
                <a class="popular-img-link w-inline-block" href="#"><img class="popular-img" src="images/prod/Leather-Journal-Handmade.jpg">
                </a><a class="see-more-btn w-button" href="#">see more</a>
            </div>
            <div class="collections popular-block">
                <h4 class="section-heading">COLLECTIONS</h4>
                <a class="collections-img-link w-inline-block" href="#"><img class="collection-img" sizes="(max-width: 479px) 91vw, (max-width: 767px) 93vw, (max-width: 991px) 29vw, 220px" src="images/m0851-555421.jpg" srcset="images/m0851-555421-p-500.jpeg 500w, images/m0851-555421.jpg 1400w">
                </a>
                <a class="collections-img-link w-inline-block" href="#"><img class="collection-img" sizes="(max-width: 479px) 91vw, (max-width: 767px) 93vw, (max-width: 991px) 29vw, 220px" src="images/Screen-Shot-2017-05-12-at-1.18.52-PM.png" srcset="images/Screen-Shot-2017-05-12-at-1.18.52-PM-p-500.png 500w, images/Screen-Shot-2017-05-12-at-1.18.52-PM.png 1070w">
                </a>
                <a class="collections-img-link w-inline-block" href="#"><img class="collection-img" src="images/c254e43eadbd80529961ed3025a8f3f9.jpg">
                </a><a class="see-more-btn w-button" href="#">see more</a>
            </div>
            <div class="popular-block top-stores">
                <h4 class="section-heading">top stores</h4>
                <div class="top-stores-block">
                    <a class="top-stores-img-link w-inline-block" href="#"><img class="top-store-img" height="50" src="images/11-best-shopping-store-logo.gif" width="50">
                    </a>
                    <div class="top-store-descript"><a class="link" href="#">Top store name</a>
                        <div class="top-store-followers">1243 followers</div>
                        <div class="top-store-reviews">1243 reviews</div>
                    </div><a class="button w-button" href="#">follow</a>
                </div>
                <div class="top-stores-block">
                    <a class="top-stores-img-link w-inline-block" href="#"><img class="top-store-img" height="50" sizes="(max-width: 479px) 36.0625px, (max-width: 767px) 8vw, (max-width: 991px) 5vw, 39.921875px" src="images/Playstation-store-logo.png" srcset="images/Playstation-store-logo-p-500.png 500w, images/Playstation-store-logo.png 640w" width="50">
                    </a>
                    <div class="top-store-descript"><a class="link" href="#">Top store name</a>
                        <div class="top-store-followers">1243 followers</div>
                        <div class="top-store-reviews">1243 reviews</div>
                    </div><a class="button w-button" href="#">follow</a>
                </div>
                <div class="top-stores-block">
                    <a class="top-stores-img-link w-inline-block" href="#"><img class="top-store-img" height="50" sizes="(max-width: 479px) 36.0625px, (max-width: 767px) 8vw, (max-width: 991px) 5vw, 39.921875px" src="images/Playstation-store-logo.png" srcset="images/Playstation-store-logo-p-500.png 500w, images/Playstation-store-logo.png 640w" width="50">
                    </a>
                    <div class="top-store-descript"><a class="link" href="#">Top store name</a>
                        <div class="top-store-followers">1243 followers</div>
                        <div class="top-store-reviews">1243 reviews</div>
                    </div><a class="button w-button" href="#">follow</a>
                </div><a class="see-more-btn w-button" href="#">see more</a>
            </div>
        </aside>
    </div>
</div>
@endsection
{{--smth--}}