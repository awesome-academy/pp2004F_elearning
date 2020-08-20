@extends('admin.layout.master')
@section('title', 'edit teacher')
@section('content')
    <form method="post" action="{{route('teacherupdate',$teacher)}}" enctype="multipart/form-data">
        {{csrf_field()}}
        @method('POST')
        <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email "
                   value="{{ $teacher->email }}">
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $teacher->name }}">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{ $teacher->phone }}">
        </div>
        <div class="form-group">
            <label>About</label>
            <input type="text" class="form-control" name="about" placeholder="about" value="{{ $teacher->about }}">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="image" value="{{ $teacher->image }}">
        </div>
        <a href="{{route('teachers-index')}}" class="btn btn-warning">Back</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection