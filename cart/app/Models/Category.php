<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name']; //enable user update the field

    public function product()
    {

        return $this->hasMany('App\Product');
    }
}
