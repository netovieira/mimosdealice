<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipe extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'quantity',
        'cost',
        'margin',
        'loss',
        'production_time',
        'active'
    ];

    public function Ingredients(){
        return $this->hasMany('App\Category');
    }

    public function Products(){
        return $this->belongsToMany('App\Product','product_recipe', 'recipe_id', 'product_id');
    }

    public function Types(){
        return $this->belongsToMany('App\RecipesType','product_recipe', 'recipe_id', 'recipetype_id');
    }
}
