@extends('layout.master')
@section('content')
    <div class="page-title">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h2> My exam results </h2>
                </div>
            </div>
        </div>
    </div>
    @if ($results->isEmpty())
        <p> There is no results.</p>
    @else
        <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Lesson</th>
                    <th>Course</th>
                    <th>Score</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach($results as $result)
                    <tr>
                        <td>{!! $result->id !!}</td>
                        <td>
                            <a href="{{ route('myresultdetail', ['id' => $result->id]) }}">{!! $result->lesson->name !!} </a>
                        </td>
                        <td>{{ $result->lesson->course->name }}</td>
                        <td>{{ $result->result }}</td>
                        <td>{{ $result->created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @endif
        </div>
@endsection
