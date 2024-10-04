

<div class="w3ls-banner jarallax ">
    <div class="w3lsbanner-info ">
        <!-- header -->
        <div class="header">
            <div class="container">
                <div class="agile_header_grid">
                    <div class="header-mdl agileits-logo"><!-- header-two -->
                        <h1><a href="{{route('home')}}">Best Pets</a></h1>
                    </div>
                    <div class="agileits_w3layouts_sign_in">
                        <ul>
                            @if(!session()->has('user'))
                                <li><a href="{{route("login")}}"  class="play-icon">Login</a></li>
                                <li><a href="{{route("register")}}"  class="play-icon">Register</a></li>

                            @else()
                                <li><a href="{{route("logout")}}"  class="play-icon">Logout</a></li>


                            @endif

                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <br class="header-nav"><!-- header-three -->
                    <nav class="navbar navbar-default ">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- top-nav -->
                        <div class="collapse navbar-collapse nav" id="bs-example-navbar-collapse-1 ">
                            <ul class="nav navbar-nav cl-effect-16 myClass">
                                @foreach($menu as $m)
                                    @if(session()->has('user'))
                                        @if(session()->get('user')->id_role == 2)
                                            @if($m->menu != "Admin")
                                                <li><a class="@if(request()->routeIs($m->href)) active @endif list-border" href="{{$m->href}}">{{$m->menu}}</a></li>
                                            @endif
                                        @elseif(session()->get('user')->id_role == 1)
                                            <li><a class="@if(request()->routeIs($m->href)) active @endif list-border" href="{{$m->href}}">{{$m->menu}}</a></li>
                                        @endif
                                    @elseif($m->menu == "Reservation" || $m->menu == "Admin" || $m->menu == "Checkout" || $m->menu == "CheckoutAll")
                                        @continue
                                    @else
                                        <li><a class="@if(request()->routeIs($m->href)) active @endif list-border" href="{{$m->href}}">{{$m->menu}}</a></li>
                                    @endif
                                @endforeach




                            </ul>
                            <div class="clearfix"> </div>
                        </div>
                    </nav>
                </div>
            </div>

    </div>



        <!-- //header -->
        @yield("banner")
</div>


