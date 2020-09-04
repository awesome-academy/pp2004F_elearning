@extends('admin.layout.master')
@section('title', 'teacher')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-overflow">
                <table id="dt-opt" class="table table-hover table-xl">
                    <thead>
                    <tr>
                        <th>
                            <div class="checkbox p-0">
                                <input id="selectable1" type="checkbox" class="checkAll" name="checkAll">
                                <label for="selectable1"></label>
                            </div>
                        </th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th style="text-align: center"><a href="{{route('teachercreate')}}">Create</a></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teachers as $teacher)
                        <tr>
                            <td>
                                <div class="checkbox">
                                    <input id="selectable2" type="checkbox">
                                    <label for="selectable2"></label>
                                </div>
                            </td>
                            <td>
                                <div class="list-media">
                                    <div class="list-item">
                                        <span class="title">{{$teacher->name}}</span>
                                    </div>
                                </div>
                            </td>
                            <td>{{$teacher->phone }}</td>
                            <td>{{$teacher->email }}</td>
                            <td><img src="{{ url('images/'.$teacher->image) }}" alt=""
                                     style="width:50px;height:50px;"></td>
                            <td class="text-center font-size-18">
                                <form action="{{route("teacherdelete",$teacher->id)}}" method="post">
                                    {{ csrf_field() }}
                                    @method('GET')
                                    <a href="{{route('teacheredit', $teacher->id)}}" class="text-gray m-r-15"><i
                                                class="ti-pencil"></i></a>
                                    <button class="text-gray btn-none"><i class="ti-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
