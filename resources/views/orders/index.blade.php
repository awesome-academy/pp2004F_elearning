@extends('master')
@section('content')
<div class="container col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> All active orders </h2>
        </div>
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
                        <td>
                            <a href="{{route('order.approve', ['id' => $order->id])}}">Approve</a>
                        </td>
                        <td>
                            <a href="{{route('order.deny', ['id' => $order->id])}}">Deny</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>

@endsection