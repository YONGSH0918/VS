<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AWB extends Model
{
    use HasFactory;
    protected $fillable=['ID','courierName'];

    
    public function MyOrder(){

        return $this->belongsTo('App\MyOrder');

    }

    public function user(){

        return $this->belongsTo('App\User');

    }
}
