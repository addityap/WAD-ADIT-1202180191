@extends('layouts.master')
@section('title','Product')
@section('content')
<!-- code here -->
<div class="container">
    @if($products->count())

    <h4 class="text-center py-4">LIST PRODUCT</h4>

    <a href="/product/create" class="btn btn-dark btn-outline-light mb-3" role="button">Add Product</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach ($products as $p)
            <tr>
                <td>{{$i++}}</td>
                <td>{{ $p->name}}</td>
                <td>$ {{ $p->price}}</td>
                <td>
                    <a href="/edit/{{$p->id}}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="/delete/{{$p->id}}" class="d-inline" method="post">
                        @method('Delete')
                        @csrf
                       <button class="btn btn-sm btn-danger" role="button">Delete</button>
                    </form>
                </td>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    @else
    <div class="text-center">
        There is no Data! <br> <br>
        <a href="/product/create" class="btn btn-dark btn-outline-light mb-3" role="button">Add Product</a>
    </div>
    @endif
</div>
@endsection