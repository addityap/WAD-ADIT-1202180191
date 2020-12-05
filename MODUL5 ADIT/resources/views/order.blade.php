@extends('layouts.master')
@section('title','Order')
@section('content')
<!-- insert code below -->
<div class="container">
    @if($products->count())
    <h4 class="text-center py-4">ORDER</h4>
    @foreach ($products as $p)
    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="{{asset ('img/'.$p->img_path) }}" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">{{ $p->name }}</h5>
                <p class="card-text">{{ $p->description }}</p>
                <h3 class="card-title">$ {{ $p->price }}</h3>
                <a href="/proses_order/{{$p->id}}" class="btn btn-sm btn-success btn-outline-dark">Order Now</a>
            </div>
        </div>
    </div>
    @endforeach
    @else
    <div class="text-center">
        There is no Data! <br> <br>
        <a href="/product/create" class="btn btn-dark btn-outline-light mb-3" role="button">Add Product</a>
    </div>
    @endif
</div>
@endsection