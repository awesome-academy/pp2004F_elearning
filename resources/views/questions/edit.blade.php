@extends('admin.layout.master')
@section('content')
<div class="container">
    <div class="well well bs-component">
        <form class="form-horizontal" method="post">
            @foreach ($errors->all() as	$error)
                <p class="alert alert-danger">{{ $error	}}</p>
            @endforeach
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            {!! csrf_field() !!}
            <fieldset>
            <legend>Edit question</legend>
            <div class="form-group">
                <label for="content" class="col-lg-2 control-label">Content</label>
                <div class="col-lg-10">
                    <textarea class="form-control" id="content" name="content" rows="10"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="lesson_id" class="col-lg-2 control-label">lesson_id</label>
                <div class="col-lg-10">
                    <input type="number" class="form-control" id="lesson_id" name="lesson_id" value="{{ $question->lesson_id }}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <a href="{{route('question.index')}}" class="btn btn-default">Cancel</a>
                    <button	type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-primary" href={{route("question.delete", ['id'=>$question->id])}} role="button">Delete</a>
                </div>
            </div>
        </fieldset>
        </form>
    </div>
</div>
@endsection
