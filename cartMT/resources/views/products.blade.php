@extends('layouts.app')



@section('content')


<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/lightslider.css" />
<!--Jquery-->
<script type="text/javascript" src="js/JQuery3.3.1.js"></script>
<script type="text/javascript" src="js/lightslider.js"></script>

<div class="c">

    <ul id="autoWidth" class="cs-hidden">
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

<script src="js/script.js" type="text/javascript"></script>
@endsection