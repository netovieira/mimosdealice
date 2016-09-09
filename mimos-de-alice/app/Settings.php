<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
   public function Sections(){
        return $this->hasMany('App\Section')->get();
   }

   public function Pages(){
        return $this->hasMany('App\Page')->get();
   }

   public function Contacts(){
        return $this->hasMany('App\Contact')->get();
   }

   public function Workers(){
        return $this->hasMany('App\Worker')->get();
   }

    public function MetaTags(){
        return $this->hasMany('App\MetaTag')->get();
    }

   public function Address(){
        return $this->hasOne('App\Address')->get();
   }
}

class Section extends Model
{
    //
}

class Page extends Model
{
    //
}

class Contact extends Model
{
    //
}

class Worker extends Model
{
    //
}

class MetaTag extends Model
{
    //
}
