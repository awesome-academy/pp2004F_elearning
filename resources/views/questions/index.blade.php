@extends('master')
@section('content')
<div class="container col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> All questions </h2>
        </div>
        @if ($questions->isEmpty())
            <p> There is no category.</p>
        @else
             <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Content</th>
                        <th>Lesson</th>
                        <th>Answer</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($questions as $question)
                    <tr>
                        <td>{{ $question->id }}</td>
                        <td>
                            <a href="{!! action('QuestionController@edit', $question->id) !!}">{{ $question->content }}</a>
                        </td>
                        <td>{{ $question->lesson->name}}</td>
                        <td><a href={{ route('question.answer', ['id' => $question->id])}}>Answer</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>

<a class="btn btn-primary" href={{route('question.create')}} role="button">Create</a>

@endsection