<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    protected $fillable = [
        'streeet',
        'district',
        'number',
        'complement',
        'city',
        'country'
    ];

    public function Orders(){
        return $this->hasMany('App\Order');
    }
}
