@extends('admin.layout.master')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                @foreach ($errors->all() as $error)
                    <p class="alert	alert-danger">{{ $error }}</p>
                @endforeach
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <fieldset>
                    <legend>Create a new course</legend>
                    <div class="form-group">
                        <label for="name" class="col-lg-2 control-label">Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-lg-2 control-label">Description</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="description" name="description">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-lg-2 control-label">Teacher</label>
                        <div class="col-lg-10">
                            <input type="number" class="form-control" id="teacher_id" name="teacher_id">
                        </div>
                    </div>
                    @foreach ($categories as $category)
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" id="category_id" name="category_id[]" value=" {{ $category->id }} ">
                            <label class="custom-control-label" for="customCheck1">{{ $category->name }}</label>
                        </div>
                    @endforeach
                    <div class="form-group">
                        <label for="name" class="col-lg-2 control-label">Price</label>
                        <div class="col-lg-10">
                            <input type="number" step="0.01" class="form-control" id="price" name="price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image" class="col-lg-2 control-label">Image</label>
                        <div class="col-lg-10">
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <a href="{{route('course.index')}}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
