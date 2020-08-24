@extends('layout.master')
@section('content')
    <div class="page-title">
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
                <div class="col-lg-8 col-md-8">
                    <div class="woocommerce-shop-top">
                        <p>Showing 1–9 of 15 Results</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="woocommerce-shop-top">
                        <div class="dropdown">

                            <!--Trigger-->
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1"
                                    data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">{{ $categoryName }}</button>

                            <!--Menu-->
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
                            <div class="product-img">
                                <img src="assets/img/shop1.jpg" alt="shop">

                                <a href="#" class="quick-view" data-toggle="modal" data-target="#productModal"><i
                                            class="icofont-search-2"></i></a>
                            </div>
                            <div class="product-content">
                                <h3>
                                    <a href="{!! action('CourseUserController@show', $course->id) !!}">{{ $course->name }}</a>
                                </h3>
                                <h4 class="price">{{ $course->price}}</h4>
                                <form action="{{ route('cart.store', $id = $course->id) }}" method="post">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="course_id" value="{{ $course->id }}">
                                    <button type="submit" class="btn btn-primary"> Add to Cart </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-12 col-md-12">
                    <div class="pagination-area">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <i class="icofont-stylish-left"></i>
                                    </a>
                                </li>

                                <li class="page-item active"><a class="page-link" href="#">1</a></li>

                                <li class="page-item"><a class="page-link" href="#">2</a></li>

                                <li class="page-item"><a class="page-link" href="#">3</a></li>

                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <i class="icofont-stylish-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection