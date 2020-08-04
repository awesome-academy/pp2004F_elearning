@extends('master')

@section('content')
 <!-- Start Teacher Area -->
 <section class="teacher-area ptb-100">
            <div class="container">
                @foreach($teachers as $teacher)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-teacher">
                            <img src="assets/img/teacher-six.jpg" alt="teacher">
                            
                            <div class="teacher-content">
                                <h3><a href="#">{!! $teacher->name !!}</a></h3>
                                <span>{!! $teacher->email !!}</span>
                                
                                <h4><a href={{route("teacheredit", ['id'=>$teacher->id])}}>View Profile <i class="icofont-long-arrow-right"></i></a></h4>
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
</section>
<!-- End Teacher Area -->
<a class="btn btn-primary" href={{route("teachercreate")}} role="button">Create</a>
@endsection