@extends('layouts.master')

@section('content')


    <div class="login-section">
        <div class="login-block register">
            <h3 class="login-heading">REGISTER</h3>
            <p class="simple-txt">Welcome! Join us and millions of great products. </p><a class="facebook-btn w-button" href="#">register in with facebook</a><a class="log-reg-social w-button" href="#">Google +</a><a class="log-reg-social twitter w-button" href="#">Twitter</a>
            <div class="login-form-wrapper w-form">

                <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control form-input" name="name" value="{{ old('name') }}" required autofocus placeholder="Enter your name">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Enter your email">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control" name="password" required placeholder="Enter your pass">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">

                        <div class="col-md-12">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Repeat your pass">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 ">
                            <button type="submit" class="btn btn-primary submit-button">
                                Register
                            </button>
                        </div>
                    </div>
                </form>


                {{--<form data-name="Email Form" id="email-form" name="email-form">--}}
                    {{--<input class="w-input" data-name="Name" id="name" maxlength="256" name="name" placeholder="Enter your name" type="text">--}}
                    {{--<input class="w-input" data-name="Email" id="Email" maxlength="256" name="Email" placeholder="Enter your email please" required="required" type="email">--}}
                    {{--<input class="w-input" data-name="Password" id="Password" maxlength="256" name="Password" placeholder="Enter your password" required="required" type="password">--}}
                    {{--<input class="submit-button w-button" data-wait="Please wait..." type="submit" value="Submit">--}}
                {{--</form>--}}
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form</div>
                </div>
            </div>
            <div class="div-block">
                <div class="simple-txt">interested in selling?</div><a class="join-us" href="#">Get Started</a>
            </div>
            <div class="invitation-block">
                <div class="simple-txt">Already have an account</div><a class="join-us" href="{{ route('login') }}">Log In</a>
            </div>
        </div>
    </div>

@endsection


{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Register</div>--}}
                {{--<div class="panel-body">--}}
                    {{----}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
