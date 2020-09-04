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
                <h2> Your score is {{ $result->result }} </h2>
                <h2> Questions </h2>
                    <form method="post">
                        @csrf
                        @foreach($answers as $answer)
                            <h4> {{ $answer->question->content }} </h4>
                            @if($answer->status == 1)
                                @foreach($answer->question->answers as $answer_temp)
                                    <div class="form-check">
                                        @if($answer_temp->id == $answer->id)
                                            <input class="form-check-input" type="radio" id="{{ $answer_temp->id }}"
                                                   value="{{ $answer_temp->id }}" checked>
                                            <label class="form-check-label" for="{{ $answer_temp->id }}">
                                                {{ $answer_temp->content }}
                                            </label>
                                        @else
                                            <input class="form-check-input" type="radio" id="{{ $answer_temp->id }}"
                                                   value="{{ $answer_temp->id }}">
                                            <label class="form-check-label" for="{{ $answer_temp->id }}">
                                                {{ $answer_temp->content }}
                                            </label>
                                        @endif
                                    </div>
                                @endforeach
                                <p>Right</p>
                            @else
                                @foreach($answer->question->answers as $answer_temp)
                                    <div class="form-check">
                                        @if($answer_temp->id == $answer->id)
                                            <input class="form-check-input" type="radio" id="{{ $answer_temp->id }}"
                                                   value="{{ $answer_temp->id }}" checked>
                                            <label class="form-check-label" for="{{ $answer_temp->id }}">
                                                {{ $answer_temp->content }}
                                            </label>
                                        @else
                                            <input class="form-check-input" type="radio" id="{{ $answer_temp->id }}"
                                                   value="{{ $answer_temp->id }}">
                                            <label class="form-check-label" for="{{ $answer_temp->id }}">
                                                {{ $answer_temp->content }}
                                            </label>
                                        @endif
                                    </div>
                                @endforeach
                                <p>Wrong</p>
                            @endif
                        @endforeach
                </form>
            </div>
        </div>
    </div>
@endsection