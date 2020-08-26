@extends('admin.layout.master')
@section('title', 'Logo')
@section('content')
    <div class="row">
        <div class="col-md-7">
            <div class="row">
                <div class="col-md-8">
                    <div class="logo-img">
                        @foreach($show as $item)
                            <img src="{{ url('images/'.$item->image)}}" alt="">
                        @endforeach
                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div><a href="{{route('logoCreate')}}">Create</a></div>
            <div><a href="{{route('logoEdit', $item->id)}}">Edit</a></div>
        </div>
    </div>
@endsection
