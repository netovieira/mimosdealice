<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'client_id',
        'text'
    ];

    public static function create(array $attributes = []){
        parent::create($attributes);

    }

    public function Client(){
        return $this->hasOne('App\Client');
    }
}
