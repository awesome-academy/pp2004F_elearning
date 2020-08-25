@extends('admin.layout.master')
@section('title', 'Edit')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form method="post" action="{{route('logoUpdate',$edit)}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @method('POST')
                    <div class="form-group">
                        <div class="input-group">
                <span class="input-group-btn">
                <input type="file" class="form-control" name="image" value="{{ $edit->image }}" id="imgInp">
                    </span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-4">
                <img id='img-upload'/>
            </div>
        </div>
    </div>
@endsection
