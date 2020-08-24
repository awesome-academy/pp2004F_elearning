@extends('layout.master')

@section('content')

        <!-- Start Register Area -->
        <section class="register-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="register-content">
                            <div class="heading">Register</div>
                            <form method="post">
                            @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email Address">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="password" name="password_confirmation" class="form-control" placeholder="Repeat Password">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12">
                                        <button class="btn btn-primary" type="submit">Sign Up</button>
                                    </div>
                                </div>
                            </form>
                            <h4>Are you a member? <a href='login'>Login Now!</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Register Area -->
@endsection