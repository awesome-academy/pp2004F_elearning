@extends('master')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2> Your score is {{ $score }} </h2>
                <h2> Questions </h2>
                @if ($questions->isEmpty())
                    <p> There is no question.</p>
                @else
                    <form method="post">
                        @csrf
                        @foreach($questions as $question)
                            <h4> {{ $question->content }} </h4>
                            @if($questionanswers[$question->id]['status'] == 1)
                                @foreach($question->answers as $answer)
                                    <div class="form-check">
                                        @if($questionanswers[$question->id]['answer_id'] == $answer->id)
                                            <input class="form-check-input" type="radio"
                                                   name="questions[{{ $question->id }}]" id="answer-{{ $answer->id }}"
                                                   value="{{ $answer->id }}" checked>
                                            <label class="form-check-label" for="answer-{{ $answer->id }}">
                                                {{ $answer->content }}
                                            </label>
                                        @else
                                            <input class="form-check-input" type="radio"
                                                   name="questions[{{ $question->id }}]" id="answer-{{ $answer->id }}"
                                                   value="{{ $answer->id }}">
                                            <label class="form-check-label" for="answer-{{ $answer->id }}">
                                                {{ $answer->content }}
                                            </label>
                                        @endif
                                    </div>
                                @endforeach
                                <p>Right</p>
                            @else
                                @foreach($question->answers as $answer)
                                    <div class="form-check">
                                        @if($questionanswers[$question->id]['answer_id'] == $answer->id)
                                            <input class="form-check-input" type="radio"
                                                   name="questions[{{ $question->id }}]" id="answer-{{ $answer->id }}"
                                                   value="{{ $answer->id }}" checked>
                                            <label class="form-check-label" for="answer-{{ $answer->id }}">
                                                {{ $answer->content }}
                                            </label>
                                        @else
                                            <input class="form-check-input" type="radio"
                                                   name="questions[{{ $question->id }}]" id="answer-{{ $answer->id }}"
                                                   value="{{ $answer->id }}">
                                            <label class="form-check-label" for="answer-{{ $answer->id }}">
                                                {{ $answer->content }}
                                            </label>
                                        @endif
                                    </div>
                                @endforeach
                                <p>Wrong</p>
                            @endif
                        @endforeach
                    </form>
                @endif
             </div>
        </div>
    </div>
@endsection