@extends('layout.master')
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h3>{{ $categoryName }}</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <!-- Start Courses Area -->
    <section class="courses-area ptb-100">
        <div class="container">
            <div class="woocommerce-shop-top">
                <div class="dropdown">

                    <!--Trigger-->
                    <button class="btn btn-primary dropdown-toggle btn-fix" type="button" id="dropdownMenu1"
                            data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">{{ $categoryName }}</button>

                    <!--Config-->
                    <div class="dropdown-menu dropdown-primary">
                        <a class="dropdown-item" href="{{ route('mycourse.index') }}">All courses</a>
                        @foreach ($categories as $category)
                            <a class="dropdown-item"
                               href="{{  route('mycourse.index', ['category' => $category->name]) }}">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($mycourses as $mycourse)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-courses-item">
                            <div class="courses-img img--mycourse">
                                <img src="{{ url('images/'.$mycourse->image) }}" alt="course">
                            </div>

                            <div class="courses-content">
                                <h3>{{ $mycourse->name }}</h3>
                                <h3>
                                    <a href="{{route('mycourse.course', ['id' => $mycourse->id])}}">Start learning!!</a>
                                </h3>
                            </div>
                            {{--<div class="courses-content-bottom">--}}
                            {{--<h4 class="price">{{ $mycourse->price}}</h4>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Courses Area -->
@endsection
