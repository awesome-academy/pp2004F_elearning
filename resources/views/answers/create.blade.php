@extends('master')
@section('content')
        <!-- Start Main Banner Area -->
        <div class="main-home-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="home-content">
                            <h1>Learn a new skill from online courses</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <form>
                                <input type="text" class="form-control" placeholder="Search courses...">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Banner Area -->

<div class="container col-md-8 col-md-offset-2">
    <div class="well well bs-component">
        <form class="form-horizontal" method="post">
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
            <legend>Create a new answer</legend>
            <div class="form-group">
                <label for="content" class="col-lg-2 control-label">Content</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control"	id="content" name="content">
                </div>
            </div>
            <div class="form-group">
                <label for="question_id" class="col-lg-2 control-label">Question_id</label>
                <div class="col-lg-10">
                    <input type="number" class="form-control" id="question_id" name="question_id" >
                </div>
            </div>
            <div class="form-group">
                <label for="true">True</label>
                    <input type="radio" id="true" name="status" value="1">
                <label for="false">False</label>
                    <input type="radio" id="false" name="status" value="0">    
            </div>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="reset" class="btn	btn-default">Cancel</button>
                    <button	type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </fieldset>
        </form>
    </div>
</div>

@endsection