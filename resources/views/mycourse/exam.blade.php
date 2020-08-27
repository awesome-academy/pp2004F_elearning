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
                    <h2> All questions </h2>
                </div>
            </div>
        </div>
    </div>
    @if ($questions->isEmpty())
        <p> There is no question.</p>
    @else
        <div class="container">

            <form method="post">
                @csrf
                @foreach($questions as $question)
                    <h4> {{ $question->content }} </h4>
                    @foreach($question->answers as $answer)
                        <div class="form-check">
                            @if(old("questions.$question->id") == $answer->id)
                                <input class="form-check-input" type="radio" name="questions[{{ $question->id }}]"
                                       id="answer-{{ $answer->id }}" value="{{ $answer->id }}" checked>
                                <label class="form-check-label" for="answer-{{ $answer->id }}">
                                    {{ $answer->content }}
                                </label>
                            @else
                                <input class="form-check-input" type="radio" name="questions[{{ $question->id }}]"
                                       id="answer-{{ $answer->id }}" value="{{ $answer->id }}">
                                <label class="form-check-label" for="answer-{{ $answer->id }}">
                                    {{ $answer->content }}
                                </label>
                            @endif
                        </div>
                    @endforeach
                @endforeach
                <div class="exam-submit">
                    <div class="form-group">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn	btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    @endif
@endsection
