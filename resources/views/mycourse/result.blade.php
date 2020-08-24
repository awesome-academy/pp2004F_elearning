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

        @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
        @endif

<div class="container col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> Your score is {{ $score }} </h2>
            <h2> Questions </h2>
        </div>
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
                            <input class="form-check-input" type="radio" name="questions[{{ $question->id }}]" id="answer-{{ $answer->id }}" value="{{ $answer->id }}" checked>
                            <label class="form-check-label" for="answer-{{ $answer->id }}">
                                {{ $answer->content }}
                            </label>
                            @else
                            <input class="form-check-input" type="radio" name="questions[{{ $question->id }}]" id="answer-{{ $answer->id }}" value="{{ $answer->id }}">
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
                            <input class="form-check-input" type="radio" name="questions[{{ $question->id }}]" id="answer-{{ $answer->id }}" value="{{ $answer->id }}" checked>
                            <label class="form-check-label" for="answer-{{ $answer->id }}">
                                {{ $answer->content }}
                            </label>
                            @else
                            <input class="form-check-input" type="radio" name="questions[{{ $question->id }}]" id="answer-{{ $answer->id }}" value="{{ $answer->id }}">
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
        <a class="btn btn-primary" href={{route('mycourse.index')}} role="button">Back</a>
        @endif
    </div>
</div>

@endsection