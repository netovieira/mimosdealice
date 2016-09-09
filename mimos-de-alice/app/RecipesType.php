<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipesType extends Model
{

    protected $fillable = [
        'name',
        'color'
    ];

    public function Recipes(){
        return $this->belongsToMany('App\Recipe','product_recipe', 'recipetype_id', 'recipe_id');
    }
}
