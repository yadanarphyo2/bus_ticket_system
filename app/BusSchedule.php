<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Busschedule extends Model
{
    protected $fillable = ['bus_id', 'operator_id','region_id','subregion_id','start_time','arrive_time','price'];

    public function bus($value='')
    {
    	return $this->belongsTo('App\Bus');
    }
    public function operator($value='')
    {
        return $this->belongsTo('App\Operator');
    }
    public function region($value='')
    {
    	return $this->belongsTo('App\Region');
    }
    public function subregion($value='')
    {
    	return $this->belongsTo('App\Subregion');
    }
    public function bookings($value='')
    {
        return $this->hasMany('App\Booking');
    }
}
