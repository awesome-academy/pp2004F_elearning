@extends('master')
@section('content')
<div class="container col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> All categories </h2>
        </div>
        @if ($categories->isEmpty())
            <p> There is no category.</p>
        @else
             <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{!! $category->id !!}</td>
                        <td>
                            <a href="{!! action('CategoryController@edit', $category->id) !!}">{!! $category->name !!} </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>

<a class="btn btn-primary" href={{route('categorycreate')}} role="button">Create</a>

@endsection