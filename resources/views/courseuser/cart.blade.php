@extends('master')
@section('content')
         <!-- Start Page Title Area -->
         <div class="page-title">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <h3> My Cart </h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Courses Area -->
        <section class="courses-area ptb-100">
            <div class="container">
                <div class="row">
                    @foreach($courses as $course)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-courses-item">
                            <div class="courses-img">
                                <img src="assets/img/course-one.jpg" alt="course">
                            </div>
                            
                            <div class="courses-content">
                                <h3><a href="{!! action('CourseUserController@show', $course->id) !!}">{{ $course->name }}</a></h3>
                                <ul>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                </ul>
                            </div>
                            <a class="btn btn-primary" href="{{ route("cart.dropcourse", ['id' => $course->id]) }}" role="button">Drop</a>
                            <div class="courses-content-bottom">
                                <h4 class="price">{{ $course->price }}</h4>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>

                <a class="btn btn-primary" href="" role="button">{{ $totalamount->totalamount }}</a>

                <a class="btn btn-primary" href={{route("cartuserdelete", ['id'=>$cart->id])}} role="button">Delete cart</a>
            </div>
        </section>
        <!-- End Courses Area -->

@endsection