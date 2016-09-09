<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'product_id',
        'order_id',
        'quantity',
        'notes',
        'price'
    ];

    public function Product(){
        return $this->hasOne('App\Product');
    }

    public function Order(){
        return $this->hasOne('App\Order');
    }
}
