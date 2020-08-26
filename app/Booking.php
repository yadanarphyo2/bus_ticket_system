<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['customer_id', 'schedule_id','seat_amout','seat_no','dapature_date'];

    public function customer($value='')
    {
    	return $this->belongsTo('App\Customer');
    }
    public function schedule($value='')
    {
    	return $this->belongsTo('App\Schedule');
    }
}
