@extends('admin.layout.master')
@section('title', 'show user')
@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <div class="page-header">
                <h2 class="header-title">Form Validation</h2>
                <div class="header-sub-title">
                    <nav class="breadcrumb breadcrumb-dash">
                        <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                        <a class="breadcrumb-item" href="#">Forms</a>
                        <span class="breadcrumb-item active">Form Validation</span>
                    </nav>
                </div>
            </div>
            <div class="card">
                <div class="card-header border bottom">
                    <h4 class="card-title">Form Validation</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <form role="form" id="form-validation" action="{{route('courses.update', $edit)}}"
                                  enctype="multipart/form-data"
                                  method="post">
                                {{csrf_field()}}
                                @method('PUT')
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name"
                                               value="{{$edit->name}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label control-label">Quantity</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="quantity"
                                               value="{{$edit->quantity}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label control-label">Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="price"
                                               value="{{$edit->price}}">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label control-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label control-label">place</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="place"
                                               value="{{$edit->place}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label control-label">image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="image"
                                               value="{{$edit->image}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label control-label">Teacher</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="teacher"
                                               value="{{$edit->teacher}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label control-label">Status</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="status"
                                               value="{{$edit->status}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label" for="datetimepicker-default">Time
                                        Start</label>
                                    <div class="col-sm-4">
                                        <input type="date" id="datetimepicker-default" class="form-control"
                                               name="timeStart" value="{{$edit->timeStart}}">
                                    </div>
                                    <label class="col-sm-2 control-label" for="datetimepicker-default">Time End</label>
                                    <div class="col-sm-4">
                                        <input type="date" id="datetimepicker-default" class="form-control"
                                               name="timeEnd" value="{{$edit->timeEnd}}">
                                    </div>
                                </div>
                                <button class="btn btn-gradient-success">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection