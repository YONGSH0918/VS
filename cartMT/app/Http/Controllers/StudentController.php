<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Student;
use App\Models\Category;
Use Session;

class StudentController extends Controller
{
    //
    public function create()
    {
        return view('insertStudent')->with('categories', Category::all());
    }
    //
    public function store()
    {    //step 2 
        $r = request(); //step 3 get data from HTML
        $image = $r->file('product-image');
        $image->move('images', $image->getClientOriginalName());   //images is the location                
        $photoName=$image->getClientOriginalName(); 

        $addCategory = Student::create([    //step 3 bind data
             //add on 
            'stuID' => $r->stuID,
            'stuName' => $r->stuName,
            'stuEmail' => $r->stuEmail,
            'stuAddress' => $r->stuAddress,
            'stuPhone' => $r->stuPhone,
            'stuPhoto'=>$photoName,
            //fullname from HTML

        ]);

        'Session'::flash('success',"Student create succesful!");

        return redirect()->route('showStudent'); // step 5 back to last page
    }

    public function show()
    {
        $students = Student::all(); //instead SQL select * from categories

        return view('showStudent')->with('students', $students);
    }
}
