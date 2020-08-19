@extends('master')
@section('content')
<div class="container col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> All answers </h2>
        </div>
        @if ($answers->isEmpty())
            <p> There is no answer.</p>
        @else
             <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Content</th>
                        <th>Status</th>
                        <th>Question</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($answers as $answer)
                    <tr>
                        <td>{{ $answer->id }}</td>
                        <td>
                            <a href="{!! action('AnswerController@edit', $answer->id) !!}">{{ $answer->content }}</a>
                        </td>
                        @if ($answer->status == 1)
                            <td>True</td>
                        @else
                            <td>False</td>
                        @endif
                        <td>{{ $answer->question_id }}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>

<a class="btn btn-primary" href={{route('answer.create')}} role="button">Create</a>

@endsection