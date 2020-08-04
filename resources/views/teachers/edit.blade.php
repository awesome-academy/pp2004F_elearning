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

<form method="post">
@csrf
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email " value="{{ $teacher->email }}" >
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
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<a class="btn btn-primary" href={{route("teacherdelete", ['id'=>$teacher->id])}} role="button">Delete</a>

@endsection