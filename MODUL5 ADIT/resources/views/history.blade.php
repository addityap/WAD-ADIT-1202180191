@extends('layouts.master')
@section('title','Product')
@section('content')
<!-- code here -->
<div class="container">
    @if($order->count())

    <h4 class="text-center py-4">LIST PRODUCT</h4>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product</th>
                <th scope="col">Buyer Name</th>
                <th scope="col">Contact</th>
                <th scope="col">Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach ($order as $p)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$p->product_id}}</td>
                <td>{{ $p-> buyer_name}}</td>
                <td>{{ $p-> buyer_contact}}</td>
                <td>{{$p->amount}}</td>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    @else
    <div class="text-center">
        There is no Data! <br> <br>
        <a href="/order" class="btn btn-dark btn-outline-light mb-3" role="button">Order Now</a>
    </div>
    @endif
</div>
@endsection