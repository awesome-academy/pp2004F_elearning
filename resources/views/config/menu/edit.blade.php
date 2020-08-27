@extends('admin.layout.master')
@section('title', 'edit')
@section('content')
    <form role="form" id="form-validation" action="{{route('menuUpdate', $edit)}}"
          enctype="multipart/form-data" method="post">
        {{csrf_field()}}
        <div class="form-group row">
            <label class="col-sm-2 col-form-label control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" value="{{$edit->name}}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label control-label">Link</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="link" value="{{$edit->link}}">
            </div>
        </div>
        <button class="btn btn-gradient-success">Submit</button>
        <a class="btn btn-gradient-warning" href="{{route('menuIndex')}}">Back</a>
    </form>
@endsection
