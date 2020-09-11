@extends('admin.layout.master')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2> All lessons </h2>
            </div>
            @if ($lessons->isEmpty())
                <p> There is no lesson.</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Course Name</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($lessons as $lesson)
                        <tr>
                            <td>{{ $lesson->id }}</td>
                            <td>
                                <a href="{!! action('LessonController@edit', $lesson->id) !!}">{{ $lesson->name }} </a>
                            </td>
                            <td> {{ $lesson->course->name }} </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <div class="pagination-fix">
            {{$lessons->links()}}
        </div>
    </div>
    <a class="btn btn-primary" href={{route('lesson.create')}} role="button">Create new lesson</a>
@endsection
