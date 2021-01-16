<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function store(){
        $r=request();
        $addCategory=Category::create([
            'id'=>$r->ID,
            'name'=>$r->name,
        ]);
        return redirect()->route('showCategory');
    }

    public function show(){
        $categories=Category::all();
        return view('showCategory')->with('categories',$categories);
    }

    public function delete($id){
        $categories=Category::find($id);
        $categories->delete();
        return redirect()->route('showCategory');
    }
}