@extends('admin.layout.master')
@section('title', 'create teacher')
@section('content')
    <form method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone" placeholder="Phone">
        </div>
        <div class="form-group">
            <label>About</label>
            <input type="text" class="form-control" name="about" placeholder="about">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="image" placeholder="image">
        </div>
        <a href="{{route('teachers-index')}}" class="btn btn-warning">Back</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
