<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'cost',
        'margin',
        'loss',
        'active'
    ];

    public function Categories(){
        return $this->belongsToMany('App\Category');
    }

    public function Recipes(){
        return $this->belongsToMany('App\Recipe','product_recipe', 'product_id', 'recipe_id');
    }

    public function Orders(){
        return $this->belongsToMany('App\Order');
    }
}
