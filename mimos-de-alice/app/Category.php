<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'color'
    ];

    public function Products(){
       return $this->belongsToMany('App\Product');
    }
}
