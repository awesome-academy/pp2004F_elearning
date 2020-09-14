@extends('layout.master')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="page-title">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h2> My exam results detail</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2> Your score is {{ $result->result }} </h2>
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
                                                   value="{{ $answer->id }}" checked disabled>
                                            <label class="form-check-label" for="answer-{{ $answer->id }}">
                                                {{ $answer->content }}
                                            </label>
                                        @else
                                            <input class="form-check-input" type="radio"
                                                   name="questions[{{ $question->id }}]" id="answer-{{ $answer->id }}"
                                                   value="{{ $answer->id }}" disabled>
                                            <label class="form-check-label" for="answer-{{ $answer->id }}">
                                                {{ $answer->content }}
                                            </label>
                                        @endif
                                    </div>
                                @endforeach
                                <span class="check-exam check-right">Right</span>
                            @else
                                @foreach($question->answers as $answer)
                                    <div class="form-check">
                                        @if($questionanswers[$question->id]['answer_id'] == $answer->id)
                                            <input class="form-check-input" type="radio"
                                                   name="questions[{{ $question->id }}]" id="answer-{{ $answer->id }}"
                                                   value="{{ $answer->id }}" checked disabled>
                                            <label class="form-check-label" for="answer-{{ $answer->id }}">
                                                {{ $answer->content }}
                                            </label>
                                        @else
                                            <input class="form-check-input" type="radio"
                                                   name="questions[{{ $question->id }}]" id="answer-{{ $answer->id }}"
                                                   value="{{ $answer->id }}" disabled>
                                            <label class="form-check-label" for="answer-{{ $answer->id }}">
                                                {{ $answer->content }}
                                            </label>
                                        @endif
                                    </div>
                                @endforeach
                                <span class="check-exam check-wrong">Wrong</span>
                            @endif
                        @endforeach
                    </form>
                @endif
             </div>
        </div>
    </div>
@endsection