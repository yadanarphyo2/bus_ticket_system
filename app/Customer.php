<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['customer_name', 'customer_email','customer_phone','customer_address'];

    public function bookings($value='')
    {
        return $this->hasMany('App\Booking');
    }
}
