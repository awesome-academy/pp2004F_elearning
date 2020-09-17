@extends('layout.master')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="page-title" style="background: url('{{asset('images/home-bg1.jpg')}}')">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h2> All questions </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @if ($questions->isEmpty())
            <p> There is no question.</p>
        @else
            <form method="post" class="form-check form-exam">
                @csrf
                <?php $i = 1; ?>
                @foreach($questions as  $question)
                    {{$i++}}<h4>{!! $question->content !!}</h4>
                    <input hidden type="radio" name="questions[{{ $question->id }}]" value=0 checked
                           class="form-check-input">
                    @foreach($question->answers as $answer)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="questions[{{ $question->id }}]"
                                   id="answer-{{ $answer->id }}" value="{{ $answer->id }}">
                            <label class="form-check-label" for="answer-{{ $answer->id }}">
                                {!!  $answer->content !!}
                            </label>
                        </div>
                    @endforeach
                @endforeach
                <div class="exam-submit check-submit">
                    <div class="form-group">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn	btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        @endif
    </div>
@endsection
