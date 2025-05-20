@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Order Date</th>
            <th scope="col">Person Ordering</th>
            <th scope="col">Total Amount</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)

            <tr>
                <th scope="row">1</th>

                <td>{{$order->date}}</td>
                <td>{{$order->user_id}}</td>
                <td>{{$order->total_amount}}</td>
                <td>{{$order->status}}</td>
                </tr>
                @endforeach
                </tbody>
    </table>
    </div>

    @endsection
