<!DOCTYPE html>
<html>
<head>
    <title>AWB</title>
</head>
<body>
    <h1>AWB</h1>
    <p>AWB List</p>
    <div>
	    <div>
		    <table>
		        <thead>
		        <tr>
		            <th>Order ID</th>  
                    <th>Customer ID</th>                  
		            <th>Order Date</th>
                    <th>Receiver Name</th>
		            <th>Address</th>
		            <th>Post Code</th>
					<th>Courier ID</th>
                    
		        </tr>
		    </thead>
		        <tbody>	
                @foreach($orders as $order)
		            <tr>
		                <td>{{$order->orderID}}</td>
                        <td>{{$order->customerID}}</td>
                        <td >{{$order->orderDate}}</td>
		                <td>{{$order->receiverName}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->postCode}}</td>
						<td>{{$order->courierID}}</td>
		                
		            </tr> 
                @endforeach				
		        </tbody>
		    </table>
	</div>
    </div>
</body>
</html>