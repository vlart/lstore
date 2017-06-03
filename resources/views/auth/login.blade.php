@extends('layouts.master')


@section('content')

    <div class="login-section">
        <div class="login-block">
            <h3 class="login-heading">LOG IN</h3><a class="facebook-btn w-button" href="#">log in with facebook</a><a class="log-reg-social w-button" href="#">Google +</a><a class="log-reg-social twitter w-button" href="#">Twitter</a>
            <div class="login-form-wrapper w-form">


                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? 'has-error' : '' }}">
                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Enter your email">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                        <div class="col-md-12">
                            <input id="password" type="password" class="w-input form-control" name="password" required placeholder="Enter your password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary submit-button">Login</button>

                            <a class="join-us" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                </form>

            </div>
            <div class="div-block">
                <div class="simple-txt">interested in selling?</div><a class="join-us" href="#">Get Started</a>
            </div>
            <div class="invitation-block">
                <div class="simple-txt">First time here?</div><a class="join-us" href="#">Join Us</a>
            </div>
        </div>
    </div>

@endsection
