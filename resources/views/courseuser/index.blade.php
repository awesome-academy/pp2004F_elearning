@extends('layout.master')
@section('content')
    <div class="page-title" style="background: url('{{asset('images/home-bg1.jpg')}}')">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h3>{{ $categoryName }}</h3>
                </div>
            </div>
        </div>
    </div>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <section class="shop-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8"></div>
                <div class="col-lg-4 col-md-4">
                    <div class="woocommerce-shop-top">
                        <div class="dropdown">

                            <!--Trigger-->
                            <button class="btn btn-primary dropdown-toggle btn-fix" type="button" id="dropdownMenu1"
                                    data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">{{ $categoryName }}</button>

                            <!--Config-->
                            <div class="dropdown-menu dropdown-primary">
                                <a class="dropdown-item" href="{{ route('courseuser.index') }}">All courses</a>
                                @foreach ($categories as $category)
                                    <a class="dropdown-item"
                                       href="{{  route('courseuser.index', ['category' => $category->name]) }}">{{ $category->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @foreach($courses as $course)
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <div class="product-img img--item">
                                <img src="{{ url('images/'.$course->image) }}" alt="shop">

                                <a href="#" class="quick-view" data-toggle="modal" data-target="#productModal"><i
                                            class="icofont-search-2"></i></a>
                            </div>
                            <div class="product-content">
                                <h3>
                                    <a href="{!! action('CourseUserController@show', $course->id) !!}">{{ $course->name }}</a>
                                </h3>
                                <h4 class="course--price">{{ $course->price}}</h4>
                                <form action="{{ route('cart.store', $id = $course->id) }}" method="post">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="course_id" value="{{ $course->id }}">
                                    <button type="submit" class="btn btn-primary"> Add to Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
