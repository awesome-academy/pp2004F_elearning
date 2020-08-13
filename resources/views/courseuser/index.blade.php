@extends('master')
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
        
        <div class="classynav">
			<ul>
                <li><a href="{{ route('courseuser.index') }}" class="active">All courses</a> </li>
            @foreach ($categories as $category)    
                <li><a href="{{  route('courseuser.index', ['category' => $category->name]) }}" class="active">{{ $category->name }}</a> </li>
            @endforeach    
			</ul>
		</div>
        
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
                            
                            <div class="courses-content-bottom">
                                <h4 class="price">{{ $course->price}}</h4>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    
                    
                   
                </div>
            </div>
        </section>
        <!-- End Courses Area -->

@endsection