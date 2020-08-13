<!doctype html>
<html lang="en">
@include('layout.head')
<body>
@include('layout.header')
<!-- Start Preloader Area -->
<div class="preloader-area">
    <div class="loader">
        <div class="dots">
            <i class="dots-item dots-item-move-down"></i>
            <i class="dots-item dots-item-move-left"></i>
            <i class="dots-item dots-item-move-left"></i>
            <i class="dots-item dots-item-move-left"></i>
            <i class="dots-item dots-item-move-left"></i>
            <i class="dots-item dots-item-move-down"></i>
            <i class="dots-item dots-item-move-right"></i>
            <i class="dots-item dots-item-move-right"></i>
            <i class="dots-item dots-item-move-down"></i>
            <i class="dots-item dots-item-move-up"></i>
            <i class="dots-item dots-item-move-down"></i>
            <i class="dots-item dots-item-move-up"></i>

            <i class="dots-item"></i>

            <i class="dots-item dots-item-move-down"></i>
            <i class="dots-item dots-item-move-up"></i>
            <i class="dots-item dots-item-move-down"></i>
            <i class="dots-item dots-item-move-up"></i>
            <i class="dots-item dots-item-move-left"></i>
            <i class="dots-item dots-item-move-left"></i>
            <i class="dots-item dots-item-move-up"></i>
            <i class="dots-item dots-item-move-right"></i>
            <i class="dots-item dots-item-move-right"></i>
            <i class="dots-item dots-item-move-right"></i>
            <i class="dots-item dots-item-move-right"></i>
            <i class="dots-item dots-item-move-up"></i>
        </div>
    </div>
</div>
<!-- End Preloader Area -->

@yield('content')
@include('layout.footer')

<!-- Back to top -->
<a class="scrolltop" href="#top"><i class="icofont-hand-drawn-up"></i></a>
<!-- End Back to top -->

<!-- jQuery Min JS -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- Prpper JS -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- Bootstrap Min JS -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Classy Nav Min Js -->
<script src="{{asset('assets/js/classy-nav.min.js')}}"></script>
<!-- Owl Carousel Min Js -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- Magnific Popup JS -->
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- CounterUp JS -->
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<!-- Waypoints JS -->
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<!-- Form Validator Min JS -->
<script src="{{asset('assets/js/form-validator.min.js')}}"></script>
<!-- Contact Form Min JS -->
<script src="{{asset('assets/js/contact-form-script.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>
</body>

<!-- Mirrored from envytheme.com/tf-demo/edufield/index-default.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Dec 2018 19:42:04 GMT -->
</html>