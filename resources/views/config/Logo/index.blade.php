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
            @foreach($show as $item)
                <a href="{{route('logoEdit', $item->id)}}">Edit</a>
            @endforeach
        </div>
    </div>
@endsection
