@extends('layut.master')
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
            <h2> All questions </h2>
        </div>
        @if ($questions->isEmpty())
            <p> There is no question.</p>
        @else
        <form method="post">
        @csrf
            @foreach($questions as $question)
            <h4> {{ $question->content }} </h4>                 
                @foreach($question->answers as $answer)
                    <div class="form-check">
                        @if(old("questions.$question->id") == $answer->id)
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
            @endforeach
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="reset" class="btn	btn-default">Cancel</button>
                    <button	type="submit" class="btn	btn-primary">Submit</button>
                </div>
            </div>
        </form>
        @endif
    </div>
</div>
`
@endsection