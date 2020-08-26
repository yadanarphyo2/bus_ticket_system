<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
     protected $fillable = ['region_name'];

     public function subregions($value='')
    {
    	return $this->hasMany('App\Subregion');
    }
    public function busschedules($value='')
    {
    	return $this->hasMany('App\Busschedule');
    }
}
