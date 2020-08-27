@extends('layout.master')
@section('content')
         <!-- Start Page Title Area -->
         <div class="page-title">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <h3>{{ $course->name }}</h3>
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
                <div class="row">
                    @foreach($lessons as $lesson)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-courses-item">
                            <div class="courses-img">
                                <img src="assets/img/course-one.jpg" alt="course">
                            </div>
                            
                            <div class="courses-content">
                                <h3>{{ $lesson->name }}</h3>
                                <h3><a href={{ route('mycourse.lesson', ['id' => $course->id, 'lesson_id' => $lesson->id])}}>Start learning!!</a></h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Courses Area -->
@endsection
