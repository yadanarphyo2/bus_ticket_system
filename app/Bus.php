<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $fillable = ['operator_id','total_seats'];

    public function operator($value='')
    {
    	return $this->belongsTo('App\Operator');
    }
    public function busschedules($value='')
    {
    	return $this->hasMany('App\Busschedule');
    }
}
