<?php

namespace App\Http\Controllers;

use App\Models\MyOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    //
    public function store()
    {    //step 2 
        $r = request(); //step 3 get data from HTML

        $addOrder = MyOrder::create([    //step 3 bind data
            'id' => $r->ID, //add on 
            'orderID' => $r->orderID,
            'customerID' => $r->customerID,
            'orderDate' => $r->orderDate,
            'receiverName' => $r->receiverName,
            'address' => $r->address,
            'postCode' => $r->postCode,
            'courierID' => $r->courierID,
            //fullname from HTML

        ]);

        Session::flash('success', "Order create succesful!");

        return redirect()->route('showOrder'); // step 5 back to last page
    }

    public function create()
    {
        return view('insertOrder');
    }
    //
   
    public function show()
    {
        $orders = MyOrder::paginate(12);
        return view('showOrder')->with('orders', $orders);
    }


    public function delete($id)
    {
        $orders = MyOrder::find($id);
        $orders->delete();
        return redirect()->route('showOrder');
    }
}
