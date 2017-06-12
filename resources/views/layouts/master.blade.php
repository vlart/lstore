<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Ubuntu:300,400,600,700&amp;" />
    @yield('styles')
    <link rel="stylesheet" href="{!! URL::to('css/webflow.css') !!}">
    <link rel="stylesheet" href="{!! URL::to('css/normalize.css') !!}">
    <link rel="stylesheet" href="{!! URL::to('css/joat.webflow.css') !!}">
    <style>
        .product-card-image{
            object-fit:cover;
            object-position: center;
            width:100%;
            height:200px;
        }
        .popular-img{
            object-fit:cover;
            object-position: center;
            width:100%;
            height:110px;
        }
        .collection-img{
            object-fit:cover;
            object-position: center;
            width:100%;
            height:100px;
        }
        .top-store-img{
            object-fit:cover;
            object-position: center;
            width:50px;
            height:50px;
        }
    </style>

</head>
<body class="body">
@include('partials.header')

    <section>

            @yield('content')

    </section>


@include('partials.footer')
<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@yield('scripts')
<script src="{!! URL::asset('js/webflow.js') !!}"></script>
<script src="{!! URL::asset('js/modernizr.js') !!}"></script>
</body>
</html>