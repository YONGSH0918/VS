<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Category; //step 1  link models //instead with Laravel 8 format

class CategoryController extends Controller
{
    //
    public function store()
    {    //step 2 
        $r = request(); //step 3 get data from HTML
        $addCategory = Category::create([    //step 3 bind data
            'stuID' => $r->studentID, //add on 
            'stuName' => $r->name, //fullname from HTML

        ]);

        return view('insertStudent'); // step 5 back to last page
    }

    public function show()
    {
        $categories = Category::all(); //instead SQL select * from categories

        return view('showCategory')->with('categories', $categories);
    }

}