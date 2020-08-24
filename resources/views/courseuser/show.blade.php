@extends('layout.master')
@section('content')
    <div class="page-title">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h3>{{ $course->name }}</h3>
                </div>
            </div>
        </div>
    </div>

    <section class="shop-details-area ptb-100">
        <div class="container">
            <div class="shop-details">
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <div class="product-img">
                            <img src="assets/img/shop-details.jpg" alt="shop">
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-12">
                        <div class="product-description">
                            <h3>{{$course->name}}</h3>
                            <div class="price">
                                <h4>{{$course->price}}</h4>
                            </div>

                            <p>{{$course->description}}</p>

                            <form>
                                <input type="number" class="form-control" value="1">
                                <button type="submit" class="btn btn-primary">Add to Cart</button>
                            </form>


                            <div class="category">
                                <span>Category:</span>
                                <a href="#">{{$categories->name}}</a>
                            </div>

                            <ul>
                                <li><a href="#" class="icofont-facebook"></a></li>
                                <li><a href="#" class="icofont-twitter"></a></li>
                                <li><a href="#" class="icofont-instagram"></a></li>
                                <li><a href="#" class="icofont-linkedin"></a></li>
                            </ul>
                        </div>
                    </div>

                    {{--<div class="col-lg-12 col-md-12">--}}
                        {{--<div class="shop-details-tabs">--}}
                            {{--<ul id="tabs">--}}
                                {{--<li class="active" id="tab_1">Description</li>--}}
                                {{--<li class="inactive" id="tab_2">Review</li>--}}
                            {{--</ul>--}}
                            {{--<div class="content show" id="tab_1_content">--}}
                                {{--<div class="shop-description">--}}
                                    {{--<h3>Description</h3>--}}
                                    {{--<p>{{$course->desciption}}</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="content" id="tab_2_content">--}}
                                {{--<div class="shop-reviews">--}}
                                    {{--<h3>Reviews</h3>--}}
                                    {{--<p>There are no reviews yet.</p>--}}
                                    {{--<b>Be the first to review “Make a Presentation”</b>--}}
                                    {{--<p>Your Rating</p>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="#"><i class="icofont-star"></i></a></li>--}}
                                        {{--<li><a href="#"><i class="icofont-star"></i><i class="icofont-star"></i></a></li>--}}
                                        {{--<li><a href="#"><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i></a></li>--}}
                                        {{--<li><a href="#"><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i></a></li>--}}
                                        {{--<li><a href="#"><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i></a></li>--}}
                                    {{--</ul>--}}
                                    {{--<form class="review-form">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-lg-12 col-md-12">--}}
                                                {{--<div class="form-group">--}}
                                                    {{--<textarea name="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="col-lg-6 col-md-6">--}}
                                                {{--<div class="form-group">--}}
                                                    {{--<input type="text" placeholder="Name" class="form-control">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="col-lg-6 col-md-6">--}}
                                                {{--<div class="form-group">--}}
                                                    {{--<input type="email" placeholder="Email" class="form-control">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="col-lg-12 col-md-12">--}}
                                                {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Details Area -->
@endsection