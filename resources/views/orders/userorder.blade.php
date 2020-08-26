@extends('layout.master')
@section('content')
    <div class="page-title">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h2> All active orders </h2>
                </div>
            </div>
        </div>
    </div>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <section class="courses-area ptb-100">
        <div class="container">
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
    </section>
@endsection
