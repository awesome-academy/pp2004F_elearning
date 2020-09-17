@extends('layout.master')
@section('content')
    <!-- Start Search Popup Area -->
    <div id="search-area">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="Search Kewword(s)" id="search">
        </form>
    </div>
    <!-- End Search Popup Area -->

    <div class="main-home-area" style="background: url('{{asset('images/home-bg1.jpg')}}')">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="home-content">
                        <h1>Learn a new skill from online courses</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Popular Courses Area -->
        <section class="popular-courses-area ptb-100">
            <div class="top-divider"></div>
            <div class="container">
                <div class="row">
                    @foreach($courses as $course)
                        <div class="col-lg-4 col-md-6">
                            <div class="single-courses-item">
                                <div class="courses-img img--item">
                                    <img src="{{ url('images/'.$course->image)}}" alt="course">
                                </div>

                                <div class="courses-content">
                                    <h3>
                                        <a href="{!! action('CourseUserController@show', $course->id) !!}">{{ $course->name }}
                                            ">{{$course->name}}</a></h3>
                                </div>

                                <div class="courses-content-bottom">
                                    <h4 class="price">{{$course->price}}</h4>
                                </div>
                                <form action="{{ route('cart.store', $id = $course->id) }}" method="post">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="course_id" value="{{ $course->id }}">
                                    <button type="submit" class="btn btn-primary"> Add to Cart</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-lg-12 col-md-12">
                        <div class="view-all text-center">
                            <a href="{{route('courseuser.index')}}" class="btn btn-primary">View All Courses <i
                                        class="icofont-rounded-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Popular Courses Area -->

        <!-- Start Why Choose Us Area CSS -->
        <section class="why-choose-us">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="image" style="background: url('{{asset('images/why-choose-us.jpg')}}')"></div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="why-choose ptb-100">
                            <h3>Why Choose Us</h3>

                            <div class="single-choose">
                                <div class="icon">
                                    <i class="icofont-book-alt"></i>
                                </div>

                                <div class="content">
                                    <h4>Popular Courses</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                </div>
                            </div>

                            <div class="single-choose">
                                <div class="icon">
                                    <i class="icofont-teacher"></i>
                                </div>

                                <div class="content">
                                    <h4>Qualified Teachers</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                </div>
                            </div>

                            <div class="single-choose mb-0">
                                <div class="icon">
                                    <i class="icofont-support"></i>
                                </div>

                                <div class="content">
                                    <h4>24/7 Online Support</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Why Choose Us Area CSS -->

        <!-- Start Teacher Area -->
        <section class="teacher-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h3>Our Teacher</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco . </p>
                </div>

                <div class="row">
                    @foreach($teachers as $teacher)
                        <div class="col-lg-4 col-md-6">
                            <div class="teacher-box">
                                <div class="pic">
                                    <img src="{{ url('images/'.$teacher->image)}}" alt="teacher">
                                    <a href="#" class="view-profile">View Profile</a>
                                </div>

                                <div class="teacher-content">
                                    <h3 class="title"><a href="#">{{$teacher->name}}</a></h3>
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
        <!-- End Teacher Area -->

        <!-- Start CTR Area -->
        <div class="ctr-area ptb-100">

            <div class="top-divider"></div>
            <div class="bottom-divider"></div>

            <div class="container">
                <div class="ctr-text-content">
                    <h1>Units you need background knowledge to study</h1>
                    <p>These units have requirements for previous study or background knowledge. Check the unit’s
                        previous
                        study requirements for details. If you have any questions, contact the unit coordinator for the
                        semester you want to study.</p>

                    <a href="{{route('login')}}" class="btn btn-primary">Join Now</a>
                </div>
            </div>
        </div>
        <!-- End CTR Area -->

        <!-- Start How It Works Area -->
        <section class="how-it-works red-bg ptb-100">

            <div class="top-divider"></div>
            <div class="bottom-divider"></div>

            <div class="container">
                <div class="section-title">
                    <h3>How It Works<span>?</span></h3>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="work-process">
                            <i class="icofont-search-document"></i>
                            <h3>Search Courses</h3>
                            <p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent
                                rreloquentiam id.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="work-process">
                            <i class="icofont-info"></i>
                            <h3>View Course Details</h3>
                            <p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent
                                rreloquentiam id.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                        <div class="work-process">
                            <i class="icofont-like"></i>
                            <h3>Apply, Enroll or Register</h3>
                            <p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent
                                rreloquentiam id.</p>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="view-all text-center">
                            <a href="{{route('register')}}" class="btn btn-primary">Register Now <i
                                        class="icofont-rounded-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End How It Works Area -->
@endsection
