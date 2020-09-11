<div class="main-header-area header-sticky">
    <div class="container">
        <div class="classy-nav-container breakpoint-off">
            <!-- Classy Config -->
            <nav class="classy-navbar justify-content-between" id="EduStudyNav">
                <div class="logo-cus">
                    @foreach($logo as $item)
                        <a class="nav-brand" href="/"><img src="{{ url('images/'.$item->image)}}" alt="logo"></a>
                    @endforeach
                </div>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span></span>
                </div>
                <!-- Config -->
                <div class="classy-menu">

                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            @foreach($menus as $menu)
                                <li><a href="{{$menu->link}}">{{$menu->name}}</a></li>
                            @endforeach
                            @if(Auth::check())
                                <li><a href="{{route('cart')}}"> my cart</a></li>
                                <li><a href="{{route('userOrder')}}">my order</a></li>
                                <li><a href="{{route('mycourse.index')}}">my course</a></li>
                                <li><a href="{{route('myresult')}}">my result</a></li>
                                <li><a href="{{route('logout')}}">Logout</a></li>
                            @else
                                <li><a href="{{route('login-form')}}">Login</a></li>
                                <li><a href="{{route('register')}}">register</a></li>
                            @endif
                            <li><a href="#search" class="search-btn"><i class="icofont-search-2"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
