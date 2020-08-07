@extends('admin.layout.master')
@section('title', 'show user')
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
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Place</th>
                        <th>Time start</th>
                        <th>Time end</th>
                        <th>Image</th>
                        <th>Teacher</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($show as $users)
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
                                        <span class="title">{{$users->name}}</span>
                                    </div>
                                </div>
                            </td>
                            <td>{{$users->quantity}}</td>
                            <td>{{$users->price}}</td>
                            <td>{{$users->description}}</td>
                            <td>{{$users->place}}</td>
                            <td>{{$users->timeStart}}</td>
                            <td>{{$users->timeEnd}}</td>

                            <td><img src="{{ url('images/'.$users->image) }}" alt=""
                                     style="width:50px;height:50px;"></td>
                            <td>{{$users->teacher}}</td>
                            <td><span class="badge badge-pill badge-gradient-success">{{$users->status}}</span></td>
                            <td class="text-center font-size-18">
                                <form action="{{route('courses.destroy', $users->id)}}" method="post">
                                    {{ csrf_field() }}
                                    @method('DELETE')
                                    <a href="{{route('courses.edit', $users->id)}}" class="text-gray m-r-15"><i
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