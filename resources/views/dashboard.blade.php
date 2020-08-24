@extends('admin.layout.master')
@section('title', 'dashboard')
@section('content')
    <div class="container">
        <div class="row banner">
            <div class="col-md-12">
                <div class="list-group">
                    <div class="list-group-item">
                        <div class="row-content">
                            <h4 class="list-group-item-heading">Manage User</h4>
                            <a href="{{route('user-index')}}" class="btn btn-default btn-raised">
                                All Users</a>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-content">
                            <h4 class="list-group-item-heading">Manage Roles</h4>
                            <a href="{{route('roles')}}" class="btn btn-default btn-raised">
                                All Roles</a>
                            <a href="{{route('create-roles')}}" class="btn btn-primary btn-raised">Create A Role</a>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-content">
                            <h4 class="list-group-item-heading">Manage Teachers</h4>
                            <a href="{{route('teachers-index')}}" class="btn btn-default btn-raised">
                                All Teachers</a>
                            <a href="{{route('teachercreate')}}" class="btn btn-primary btn-raised">Create</a>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-content">
                            <h4 class="list-group-item-heading">Manage Categories</h4>
                            <a href="{{route('categoryIndex')}}" class="btn btn-default btn-raised">
                                All Categories</a>
                            <a href="{{route('categorycreate')}}" class="btn btn-primary btn-raised">Create</a>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-content">
                            <h4 class="list-group-item-heading">Manage Courses</h4>
                            <a href="{{route('course.index')}}" class="btn btn-default btn-raised">
                                Courses</a>
                            <a href="{{route('coursecreate')}}" class="btn btn-primary btn-raised">Create</a>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-content">
                            <h4 class="list-group-item-heading">Manage Lesson</h4>
                            <a href="{{route('lesson.index')}}" class="btn btn-default btn-raised">
                                All lessons</a>
                            <a href="{{route('lesson.create')}}" class="btn btn-primary btn-raised">Create</a>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-content">
                            <h4 class="list-group-item-heading">Manage Teachers</h4>
                            <a href="{{route('question.index')}}" class="btn btn-default btn-raised">
                                All Question</a>
                            <a href="{{route('question.create')}}" class="btn btn-primary btn-raised">Create</a>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-content">
                            <h4 class="list-group-item-heading">Manage Teachers</h4>
                            <a href="{{route('teachers-index')}}" class="btn btn-default btn-raised">
                                All Teachers</a>
                            <a href="{{route('teachercreate')}}" class="btn btn-primary btn-raised">Create</a>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-content">
                            <h4 class="list-group-item-heading">Manage Orders</h4>
                            <a href="{{route('order.index')}}" class="btn btn-default btn-raised">
                                All Orders</a>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-content">
                            <h4 class="list-group-item-heading">Manage Refunds</h4>
                            <a href="{{route('refund.index')}}" class="btn btn-default btn-raised">
                                All Refunds</a>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
