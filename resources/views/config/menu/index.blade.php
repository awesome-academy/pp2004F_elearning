@extends('admin.layout.master')
@section('title', 'config')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-overflow">
                <table id="dt-opt" class="table table-hover table-xl">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Link</th>
                        <th><a href="{{route('menuCreate')}}">Create</a></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $item)
                        <tr>
                            <th></th>
                            <td>{{$item->name}}</td>
                            <td>{{$item->link}}</td>
                            <td>
                                <form action="{{route('menuDelete', $item->id)}}" method="post">
                                    {{ csrf_field() }}
                                    @method('GET')
                                    <button class="text-gray btn-none"><i class="ti-trash"></i></button>
                                </form>
                                <a href="{{route('menuEdit', $item->id)}}" class="text-gray m-r-15"><i
                                            class="ti-pencil"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
