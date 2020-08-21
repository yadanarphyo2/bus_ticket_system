<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    protected $fillable = ['operator_name', 'operator_email','operator_phone','operator_address','operator_logo','status'];
}
