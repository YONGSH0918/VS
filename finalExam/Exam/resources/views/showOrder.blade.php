@extends('layouts.app')
@section('content') 
@if(Session::has('success'))           
        <div class="alert alert-success" role="alert">
            {{ Session::get('success')}}
        </div>       
@endif 
@guest
	 @if (Route::has('login'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
    @endif
                            
    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
     @endif
@else    

<div class="container">
	    <div class="row">
		    <table class="table table-hover table-striped">
		        <thead>
		        <tr class="thead-dark">
		            <th>Order ID</th>
                    <th>Customer ID</th>
		            <th>Order Date</th>
                    <th>Receiver Name</th>
		            <th>Address</th>
		            <th>PostCode</th>
                    <th>Courier ID</th>
		        </tr>
		    </thead>
		        <tbody>	
                @foreach($orders as $order)
		            <tr>
		                <td>{{$order->orderID}}</td>
                        <td>{{$order->customerID}}</td>
						<td>{{$order->orderDate}}</td>
						<td>{{$order->receiverName}}</td>
		                <td>{{$order->address}}</td>
                        <td>{{$order->postCode}}</td>
                        <td>{{$order->courierID}}</td>
		            </tr> 
                @endforeach

				
		        </tbody>
		    </table>
		<div class="text-center">
			<a href="{{ route('awbReport') }}" class="btn btn-info">Download AWB</a>
        </div>
		<div class="text-center">
			{{ $orders->links() }}
        </div>

	</div>
    </div>
@endguest
@endsection