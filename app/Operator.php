<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    protected $fillable = ['operator_name', 'operator_email','operator_phone','operator_address','operator_logo'];

    public function buses($value='')
    {
    	return $this->hasMany('App\Bus');
    }
    public function busschedules($value='')
    {
    	return $this->hasMany('App\Busschedule');
    }
}
