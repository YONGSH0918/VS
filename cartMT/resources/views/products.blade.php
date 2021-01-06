@extends('layouts.app')



@section('content')


<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/lightslider.css" />

<div class="c">

    <ul>
    @foreach($products as $product)
        <li class="item-a">
            
            <div class="box">
                <p class="marvel">{{$product->name}}</p>
                <!--model-->
                <a href="{{ route('product.detail', ['id' => $product->id]) }}"><img src="{{ asset('images/') }}/{{$product->image}}" alt="" class="model"></a>
                <!--details-->
                <div class="details">
                    <!--logo-character-->
                    <p class="logo" width="100px" style="height: auto;">RM {{$product->price}} </p>
                </div>

            </div>

        </li>
          @endforeach
    </ul>
</div>


@endsection