@extends('admin.layout.master')
@section('title', 'Create Logo')
@section('content')
    <form method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Email address</label>
            <input type="file" class="form-control" name="image" placeholder="Upload image">
        </div>
        <a href="{{route('logo')}}" class="btn btn-warning">Back</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
