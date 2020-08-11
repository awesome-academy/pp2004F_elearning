@extends('master')
@section('content')
        <!-- Start Main Banner Area -->
        <div class="main-home-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="home-content">
                            <h1>Learn a new skill from online courses</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <form>
                                <input type="text" class="form-control" placeholder="Search courses...">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Banner Area -->

        <div class="classynav">
			<ul>
                <li><a href="courses" class="active">All courses</a> </li>
            @foreach ($categories as $category)    
                <li><a href="{{  route('course.index', ['category' => $category->name]) }}" class="active">{{ $category->name }}</a> </li>
            @endforeach    
			</ul>
		</div>

<div class="container col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> {{ $categoryName }} </h2>
        </div>
        @if ($courses->isEmpty())
            <p> There is no course.</p>
        @else
             <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Category Name</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td>{!! $course->id !!}</td>
                        <td>
                            <a href="{!! action('CourseController@edit', $course->id) !!}">{!! $course->name !!} </a>
                        </td>
                        <td>{!! $course->description !!}</td>
                        <td>@foreach($course->categories as $category) {!! $category->name !!} @endforeach</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
<a class="btn btn-primary" href={{route('coursecreate')}} role="button">Create</a>
@endsection