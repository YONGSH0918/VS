<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; //step 1  link models //instead with Laravel 8 format

class CategoryController extends Controller
{
    //
    public function store()
    {    //step 2 
        $r = request(); //step 3 get data from HTML
        $addCategory = Category::create([    //step 3 bind data
            'id' => $r->ID, //add on 
            'name' => $r->name, //fullname from HTML

        ]);

        return view('insertCategory'); // step 5 back to last page
    }

    public function show()
    {
        $categories = Category::all(); //instead SQL select * from categories

        return view('showCategory')->with('categories', $categories);
    }

    public function delete($id)
    {
        $categories = Category::find($id);
        $categories->delete(); //apply delete from categories where id='$id'
        return redirect()->route('showCategory');
    }
}
