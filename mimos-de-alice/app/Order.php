<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'address_id',
        'client_id',
        'delivery_at',
        'notes',
        'price'
    ];

    public function Items(){
        return $this->hasMany('App\OrderItem');
    }

    public function Client(){
        return $this->hasOne('App\Client');
    }

    public function Address(){
        return $this->hasOne('App\Address');
    }
}
