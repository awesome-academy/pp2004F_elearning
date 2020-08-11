@extends('master')
@section('content')
<div class="container col-md-6 col-md-offset-3">
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
                <legend>Edit course</legend>
                <div class="form-group">
                    <label for="name" class="col-lg-2 control-label">Name</label>
                    <div class="col-lg-10">
                        <input	type="text"	class="form-control" id="name" placeholder="Name" name="name" value="{{ $course->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-lg-2 control-label">Description</label>
                    <div class="col-lg-10">
                        <input	type="text"	class="form-control" id="description" placeholder="Description" name="description" value="{{ $course->description }}">
                    </div>
                </div>
                @foreach ($categories as $category)
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="category_id" name="category_id[]" value=" {{ $category->id }} ">
                    <label class="custom-control-label" for="customCheck1">{{ $category->name }}</label>
                </div>
                @endforeach
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </fieldset>
        </form>
        <a class="btn btn-primary" href={{route("coursedelete", ['id'=>$course->id])}} role="button">Delete</a>
    </div>
</div>
@endsection