<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyOrder extends Model
{
    use HasFactory;
    protected $fillable=['orderID', 'customerID', 'orderDate', 'receiverName', 'address', 'postCode', 'courierID'];

    public function user(){

        return $this->belongsTo('App\User');

    }
}
