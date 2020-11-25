<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function store()
    {    //step 2 
        $r = request(); //step 3 get data from HTML
        $addProduct = Product::create([    //step 3 bind data
            'id' => $r->ID, //add on 
            'name' => $r->name,
            'description' => $r->description,
            'categoryID' => $r->category,
            'price' => $r->price,
            'quantity' => $r->quantity,
            'image'=> '-',
            //fullname from HTML

        ]);

        return view('insertProduct'); // step 5 back to last page
    }
}
