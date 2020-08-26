<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subregion extends Model
{
    protected $fillable = ['subregion_name','region_id'];

    public function region($value='')
    {
    	return $this->belongsTo('App\Region');
    }
    public function busschedules($value='')
    {
    	return $this->hasMany('App\Busschedule');
    }
}
