<div class="main-header-area header-sticky">
    <div class="container">
        <div class="classy-nav-container breakpoint-off">
            <!-- Classy Menu -->
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
                <!-- Menu -->
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
                                @role('user')
                                <li><a href="{{route('order')}}">Order</a></li>
                                <li><a href="{{route('logout')}}">Logout</a></li>
                                @endrole
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