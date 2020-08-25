@extends('admin.layout.master')
@section('title', 'create')
@section('content')
    <form role="form" id="form-validation" action="{{route('menuStore')}}"
          enctype="multipart/form-data" method="post">
        {{csrf_field()}}
        <div class="form-group row">
            <label class="col-sm-2 col-form-label control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="Required *">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label control-label">Link</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="link" placeholder="Required *">
            </div>
        </div>
        <button class="btn btn-gradient-success">Submit</button>
        <a class="btn btn-gradient-warning" href="{{route('menuIndex')}}">Back</a>
    </form>
@endsection
