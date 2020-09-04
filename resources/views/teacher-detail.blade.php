@extends('layout.master')
@section('content')
    <div class="page-title">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h3>Teacher Details</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Teacher Details Area -->
    <section class="teacher-details-area ptb-100">
        <div class="container">
            <div class="teacher-details">
                <div class="row">

                    <div class="col-lg-4 col-md-12">
                        <div class="teacher-img">
                            <img src="{{ url('images/'.$details->image)}}" alt="teacher">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="teacher-profile">
                            <h3>{{$details->name}}</h3>
                            <span>Web Developer</span>
                        </div>

                        <div class="teacher-contact-info">
                            <h4>Contact Info:</h4>
                            <ul>
                                <li><i class="icofont-envelope"></i> <a href="#"></a></li>
                                <li><i class="icofont-skype"></i> <a href="#">edustudy_perl</a></li>
                                <li><i class="icofont-phone"></i> <a href="#">{{$details->phone}}</a></li>
                                <li><i class="icofont-google-map"></i></li>
                            </ul>

                            <ul class="teacher-social">
                                <li><a href="#" class="icofont-facebook"></a></li>
                                <li><a href="#" class="icofont-twitter"></a></li>
                                <li><a href="#" class="icofont-instagram"></a></li>
                                <li><a href="#" class="icofont-linkedin"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="teacher-contact">
                            <h3>Contact</h3>

                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email">
                                </div>

                                <div class="form-group">
                                    <textarea name="message" cols="30" rows="3" placeholder="Message"
                                              class="form-control"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-teacher-about">
                            <div class="teacher-desc">
                                <h2>About {!!$details->name!!}</h2>
                                <p>
                                    {!! $details->about !!}
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{--<div class="teacher-involved-coures">--}}
            {{--<div class="container">--}}
                {{--<h2>Involved in courses</h2>--}}

                {{--<div class="row">--}}
                    {{--<div class="col-lg-4 col-md-6">--}}
                        {{--<div class="single-courses-item">--}}
                            {{--<div class="courses-img">--}}
                                {{--<img src="assets/img/course-one.jpg" alt="course">--}}
                            {{--</div>--}}

                            {{--<div class="courses-content">--}}
                                {{--<h3><a href="#">Machine Learning</a></h3>--}}
                                {{--<ul>--}}
                                    {{--<li><i class="icofont-star"></i></li>--}}
                                    {{--<li><i class="icofont-star"></i></li>--}}
                                    {{--<li><i class="icofont-star"></i></li>--}}
                                    {{--<li><i class="icofont-star"></i></li>--}}
                                    {{--<li><i class="icofont-star"></i></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}

                            {{--<div class="courses-content-bottom">--}}
                                {{--<h4><i class="icofont-ui-user"></i> 120 Students</h4>--}}
                                {{--<h4 class="price">$120</h4>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-lg-4 col-md-6">--}}
                        {{--<div class="single-courses-item">--}}
                            {{--<div class="courses-img">--}}
                                {{--<img src="assets/img/course-two.jpg" alt="course">--}}
                            {{--</div>--}}

                            {{--<div class="courses-content">--}}
                                {{--<h3><a href="#">Learning Analytics Course</a></h3>--}}
                                {{--<ul>--}}
                                    {{--<li><i class="icofont-star"></i></li>--}}
                                    {{--<li><i class="icofont-star"></i></li>--}}
                                    {{--<li><i class="icofont-star"></i></li>--}}
                                    {{--<li><i class="icofont-star"></i></li>--}}
                                    {{--<li><i class="icofont-star"></i></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}

                            {{--<div class="courses-content-bottom">--}}
                                {{--<h4><i class="icofont-ui-user"></i> 120 Students</h4>--}}
                                {{--<h4 class="price"><span>$140</span> $120</h4>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">--}}
                        {{--<div class="single-courses-item">--}}
                            {{--<div class="courses-img">--}}
                                {{--<img src="assets/img/course-three.jpg" alt="course">--}}
                            {{--</div>--}}

                            {{--<div class="courses-content">--}}
                                {{--<h3><a href="#">Consulting Workshop</a></h3>--}}
                                {{--<ul>--}}
                                    {{--<li><i class="icofont-star"></i></li>--}}
                                    {{--<li><i class="icofont-star"></i></li>--}}
                                    {{--<li><i class="icofont-star"></i></li>--}}
                                    {{--<li><i class="icofont-star"></i></li>--}}
                                    {{--<li><i class="icofont-star"></i></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}

                            {{--<div class="courses-content-bottom">--}}
                                {{--<h4><i class="icofont-ui-user"></i> 120 Students</h4>--}}
                                {{--<h4 class="price">$120</h4>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </section>
    <!-- End Teacher Details Area -->
@endsection