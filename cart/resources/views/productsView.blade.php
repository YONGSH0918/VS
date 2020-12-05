@extends('layouts.app')
@section('content')
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success')}}
</div>
@endif

<div class="container-fluid">
    <div class="card">
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-3" style="margin: auto;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <img src="{{ asset('images/') }}/{{$product->image}}" alt="" width="100%" height="300px">
                        <div class="card-heading">RM {{$product->price}}</div>
                        <div style="text-align: right;"><button class="btn btn-danger btn-xs">Add to Cart</button></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div style="margin: 20px;">
    <div class="text-center">
        {{ $products->links() }}
    </div>
</div>

@endsection