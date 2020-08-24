@extends('master')
@section('content')
<div class="container col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> All active orders </h2>
        </div>
        @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
        @endif
        
        @if ($orders->isEmpty())
            <p> There is no order.</p>
        @else
             <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User Email</th>
                        <th>Amount</th>
                        <th>Courses</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{!! $order->id !!}</td>
                        <td>{!! $order->user->email !!}</td>
                        <td>{!! $order->amount !!}</td>
                        <td> @foreach($order->courses as $course) {!! $course->name !!} @endforeach</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>

@endsection