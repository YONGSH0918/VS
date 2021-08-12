@extends('layouts.app')
@section('content')

<div>
    <div style="text-align: center;">
        <form class="subform" method="post" action="{{ route('addOrder') }} " enctype="multipart/form-data">
            @csrf
            <!-- very important if you didn't insert CSRF, it not allow submit the data-->
            <p>
                <label for="ID" class="label">ID</label>
                <input type="text" name="ID" id="ID">
            </p>
            <p>
                <label for="orderID" class="label">Order ID: </label>
                <input type="text" name="orderID" id="orderID">
            </p>
            <p>
                <label for="customerName" class="label">Customer ID: </label>
                <input type="text" name="customerID" id="customerID">
            </p>
            <p>
                <label for="orderDate" class="label">Order Date: </label>
                <input type="date" name="orderDate" id="orderDate">
            </p>
            <p>
                <label for="receiverName" class="label">Receiver Name: </label>
                <input type="text" name="receiverName" id="receiverName">
            </p>
            
            <p>
                <label for="address" class="label">Address: </label>
                <input type="text" name="address" id="address">
            </p>
            <p>
                <label for="postCode" class="label">Postcode: </label>
                <input type="text" name="postCode" id="postCode">
            </p>
            <p>
                <label for="courierID" class="label">Courier ID: </label>
                <input type="text" name="courierID" id="courierID">
            </p>
            <p>
                <input type="submit" name="insert" value="Insert">
            </p>
        </form>
    </div>
</div>
@endsection