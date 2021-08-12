<?php

namespace App\Http\Controllers;

use App\Models\AWB;
use Illuminate\Http\Request;
use App\Models\MyOrder;

class AWBController extends Controller
{
    //
    public function awbReport()
    {
        $data = [
            'title' => 'AWB',
            'date' => date('m/d/Y')
        ];
        $orders=MyOrder::paginate(12);  
        $pdf = 'PDF'::loadView('myAWB', compact('orders'));
    
        return $pdf->download('awb.pdf');
    }

   
}
