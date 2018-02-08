<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $fillable = ['name','category_id'];

     protected $table = 'heros';

     public $timestamps = false;

    public function category()
   {
   		return $this->hasOne('App\Category','id','category_id');
   }
}
