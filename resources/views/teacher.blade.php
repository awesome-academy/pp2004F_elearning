@extends('layout.master')
@section('content')
    <div class="page-title">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h3>All Teacher</h3>
                </div>
            </div>
        </div>
    </div>
    <section class="teacher-area ptb-100">
        <div class="container">
            <div class="row">
                @foreach($show as $teacher)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-teacher">
                            <img src="{{ url('images/'.$teacher->image)}}" alt="teacher">
                            <div class="teacher-content">
                                <h3><a href="#">{{$teacher->name}}</a></h3>
                                <span>Web Developer</span>
                                <h4><a href="{{route('teacherDetail', $teacher->id)}}">View Profile<i class="icofont-long-arrow-right"></i></a></h4>
                                <ul>
                                    <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                    <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                    <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
