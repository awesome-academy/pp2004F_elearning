@extends('master')
@section('content')
<div class="container col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> All refunds </h2>
        </div>
        @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
        @endif
        
        @if ($refunds->isEmpty())
            <p> There is no refund.</p>
        @else
             <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User Email</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($refunds as $refund)
                    <tr>
                        <td>{!! $refund->id !!}</td>
                        <td>{!! $refund->user->email !!}</td>
                        <td>{!! $refund->amount !!}</td>
                        <td>
                            <a href="{{route('refund.delete', ['id' => $refund->id])}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>

@endsection