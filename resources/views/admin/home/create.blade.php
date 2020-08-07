@extends('admin.layout.master')
@section('title', 'create user')
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
                            <form role="form" id="form-validation" action="{{route('courses.store')}}"
                                  enctype="multipart/form-data" method="post">
                                {{csrf_field()}}
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name"
                                               placeholder="Required *">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label control-label">Quantity</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="quantity"
                                               placeholder="Required *">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label control-label">Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="price"
                                               placeholder="Required *">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label control-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control" name="description"
                                                  placeholder="Required *"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label control-label">Place</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="place"
                                               placeholder="Required *">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label control-label">Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="image"
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label control-label">Teacher</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="teacher"
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label control-label">Status</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="status">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label" for="datetimepicker-default">Time Start</label>
                                    <div class="col-sm-4">
                                        <input type="date" id="datetimepicker-default" class="form-control" name="timeStart">
                                    </div>
                                    <label class="col-sm-2 control-label" for="datetimepicker-default">Time End</label>
                                    <div class="col-sm-4">
                                        <input type="date" id="datetimepicker-default" class="form-control" name="timeEnd">
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

<script>
    // Default date and time picker
    $('#datetimepicker-default').datetimepicker();
</script>
