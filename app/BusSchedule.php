<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusSchedule extends Model
{
    protected $fillable = ['bus_id', 'operator_id','region_id','subregion_id','start_time','arrive_time','price'];
}
