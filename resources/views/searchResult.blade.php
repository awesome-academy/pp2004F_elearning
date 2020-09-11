@extends('layout.master')
@section('title', 'Result')
@section('content')
    <div class="page-title">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h3>Result</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Courses Area -->
    <section class="courses-area ptb-100">
        <div class="container">
            <div class="row">
                @foreach($courses as $course)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-courses-item">
                            <div class="courses-img">
                                <img src="{{ url('images/'.$course->image) }}" alt="course">
                            </div>

                            <div class="courses-content">
                                <h3>{{ $course->name }}</h3>
                                <h3>
                                    <a href="{{route('mycourse.course', ['id' => $course->id])}}">Start learning!!</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection