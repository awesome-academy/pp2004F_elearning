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

    <div class="container">
        <div class="exam-content">
            <div class="content show" id="tab_1_content">
                <h4 class="title">{{$lesson->title}}</h4>
                <p>{!! $lesson->content  !!}</p>
            </div>

            <a class="btn btn-primary"
               href={{route('mycourse.exam', ['id' => $lesson->course_id, 'lesson_id' => $lesson->id])}} role="button">Take
                exam</a>
        </div>
    </div>
@endsection
