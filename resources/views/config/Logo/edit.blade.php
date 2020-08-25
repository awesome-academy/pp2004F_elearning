@extends('admin.layout.master')
@section('title', 'Edit')
@section('content')
    <div class="container">
        <form method="post" action="{{route('logoUpdate',$edit)}}" enctype="multipart/form-data">
            {{csrf_field()}}
            @method('POST')
            <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control" name="image" value="{{ $edit->image }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
