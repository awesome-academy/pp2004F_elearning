<div class="side-nav expand-lg">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="side-nav-header">
                <span>Navigation</span>
            </li>
            <li class="nav-item">
                <a href="{{route('dashboard')}}">
                    <span class="icon-holder">
                        <i class="mdi mdi-gauge"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-clipboard-flow"></i>
                                </span>
                    <span class="title">Roles</span>
                    <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{route('roles')}}">All roles</a>
                    </li>
                    <li>
                        <a href="{{route('create-roles')}}">Create roles</a>
                    </li>

                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
									<i class="mdi mdi-human-male"></i>
								</span>
                    <span class="title">Teachers</span>
                    <span class="arrow">
									<i class="mdi mdi-chevron-right"></i>
								</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{route('teachers-index')}}">All teachers</a>
                    </li>
                    <li>
                        <a href="{{route('teachercreate')}}">Create teachers</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-clipboard-text"></i>
                                </span>
                    <span class="title">Categories</span>
                    <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{route('categoryIndex')}}">All Categories</a>
                    </li>
                    <li>
                        <a href="{{route('categorycreate')}}">Create categories</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-grid-large"></i>
                                </span>
                    <span class="title">Config</span>
                    <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{route('logoIndex')}}">Logo</a>
                    </li>
                    <li>
                        <a href="{{route('menuIndex')}}">Menu</a>
                    </li>
                    <li>
                        <a href="#">Footer</a>
                    </li>
                </ul>
            </li>



            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-file-outline"></i>
                                </span>
                    <span class="title">Order</span>
                    <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{route('order.index')}}">All orders</a>
                    </li>

                </ul>
            </li>
            {{--<li class="nav-item dropdown">--}}
                {{--<a class="dropdown-toggle" href="javascript:void(0);">--}}
                                {{--<span class="icon-holder">--}}
                                    {{--<i class="mdi mdi-tune-vertical"></i>--}}
                                {{--</span>--}}
                    {{--<span class="title">Tables</span>--}}
                    {{--<span class="arrow">--}}
                                    {{--<i class="mdi mdi-chevron-right"></i>--}}
                                {{--</span>--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu">--}}
                    {{--<li>--}}
                        {{--<a href="basic-table.html">Basic Table</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="data-table.html">Data Table</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="nav-item dropdown">--}}
                {{--<a class="dropdown-toggle" href="javascript:void(0);">--}}
                                {{--<span class="icon-holder">--}}
                                    {{--<i class="mdi mdi-chart-donut"></i>--}}
                                {{--</span>--}}
                    {{--<span class="title">Charts</span>--}}
                    {{--<span class="arrow">--}}
                                    {{--<i class="mdi mdi-chevron-right"></i>--}}
                                {{--</span>--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu">--}}
                    {{--<li>--}}
                        {{--<a href="chartist.html">Chartist</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="chartjs.html">ChartJs</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="sparkline.html">Sparkline</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="nav-item dropdown">--}}
                {{--<a class="dropdown-toggle" href="javascript:void(0);">--}}
                                {{--<span class="icon-holder">--}}
                                    {{--<i class="mdi mdi-map-marker-outline"></i>--}}
                                {{--</span>--}}
                    {{--<span class="title">Map</span>--}}
                    {{--<span class="arrow">--}}
                                    {{--<i class="mdi mdi-chevron-right"></i>--}}
                                {{--</span>--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu">--}}
                    {{--<li>--}}
                        {{--<a href="google-map.html">Google Map</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="vector-map.html">Vector Map</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        </ul>
    </div>
</div>
