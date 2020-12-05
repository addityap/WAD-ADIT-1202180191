@extends('layouts.master')
@section('title','Proses Order')
@section('content')
<div class="container">
    <div class="card mb-3" style="max-width: 1040px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{asset ('img/'.$product->img_path) }}" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name}}</h5>
                    <p class="card-text">{{$product->description}}</p>
                    <p class="card-text">Stock : {{$product->stock}}</p>
                    <h3 class="card-title">$ {{ $product->price}}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3" style="max-width: 1040px;">

    <h3 class="text-center mt-3">Buyer Information</h3>
        <form class="col-md-12" action="/order/store" method="post">
        @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="number" class="form-control" id="contact" name="contact">
            </div>
            <div class="form-group">
                <label for="amount">Quantity</label>
                <input type="number" class="form-control" id="amount" name="amount">
            </div>
            <button type="submit"  name="submit" id="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection