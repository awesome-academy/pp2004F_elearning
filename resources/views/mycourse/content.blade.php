@extends('layout.master')
@section('content')
         <!-- Start Page Title Area -->
         <div class="page-title">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <h3>{{ $lesson->name }}</h3>
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
        <div class="content show" id="tab_1_content">
            <h4 class="title">Lesson Details</h4>
                                    
            <p> {{ $lesson->content }} </p>
                                    
                                   
        </div>
        <!-- End Courses Area -->
        <a class="btn btn-primary" href={{route('mycourse.exam', ['id' => $lesson->course_id, 'lesson_id' => $lesson->id])}} role="button">Take exam</a>
@endsection