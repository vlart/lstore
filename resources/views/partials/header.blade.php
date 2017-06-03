<div class="top-navbar w-nav" data-animation="default" data-collapse="none" data-duration="400">
    <div class="container top-navbar-container w-clearfix">
        <div class="navbar-block top w-clearfix">
            <a class="logo-holder w-nav-brand" href="{{ url('/') }}">
                <div class="main-logo">LOGO</div>
            </a>
            <div class="search-form-wrapper w-form">
                <form class="search-form" data-name="Email Form" id="email-form" name="email-form">
                    <input class="search-box w-input" id="field" maxlength="256" name="field" placeholder="Search something good..." required="required" type="text">
                    <input class="search-btn w-button"  type="submit" value="search">
                </form>

            </div>
        </div>
        <div class="navbar-block w-clearfix">
            <div class="departament-dropbox w-dropdown" data-delay="0">
                <div class="dropdown-toggle w-dropdown-toggle">
                    <div class="text-block">Shop by category</div>
                    <div class="w-icon-dropdown-toggle"></div>
                </div>
                <nav class="w-dropdown-list"><a class="w-dropdown-link" href="#">Link 1</a><a class="w-dropdown-link" href="#">Link 2</a><a class="w-dropdown-link" href="#">Link 3</a>
                </nav>
            </div>
            <nav class="top-nav-menu w-nav-menu" role="navigation">
                <a class="nav-link w-inline-block" href="{{ route('product.shoppingCart') }}"><img class="top-menu-icon" height="25" src="images/online-shopping-cart.svg">
                    <div class="cart-item-number">{{Session::has('cart') ? Session::get('cart')->totalQty: ''}}</div>
                </a>
                @if (Auth::guest())
                    <a class="nav-link w-inline-block" href="c"><img class="top-menu-icon" height="25" src="images/user_signup.svg"> <div class="cart-item-number">Register</div>
                    </a>

                    <a class="nav-link w-inline-block" href="{{route('login')}}"><img class="top-menu-icon" height="25" src="images/login.svg"> <div class="cart-item-number">Login</div>
                    </a>
                @else
                <div class="nav-link w-dropdown" data-delay="0">
                    <div class="nav-link-dropdown-toggle w-dropdown-toggle"><img class="top-menu-icon" height="25" src="images/user-male-outlined-symbol.svg"><div class="cart-item-number">Hello, {{ Auth::user()->name }}</div>
                    </div>
                    <nav class="dd-user-menu w-dropdown-list">
                        <div class="dd-user-menu-link-wrapper"><img class="user-icon" height="25" src="images/speech-bubble.svg"><a class="dd-user-menu-link w-dropdown-link" href="#">Messages</a>
                        </div>
                        <div class="dd-user-menu-link-wrapper"><img class="user-icon" height="25" src="images/user-cabinet.svg"><a class="dd-user-menu-link w-dropdown-link" href="{{ route('/home') }}">Profile</a>
                        </div>
                        <div class="divider-hr"></div>


                        <div class="dd-user-menu-link-wrapper"><img class="user-icon" height="25" src="images/logout.svg"><a href="{{ route('logout') }}"
                                                                                                                                                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dd-user-menu-link w-dropdown-link">
                                    Logout
                                </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>


                    </nav>
                </div>
                @endif
            </nav>
        </div>
        <div class="w-nav-button">
            <div class="w-icon-nav-menu"></div>
        </div>
    </div>
</div>