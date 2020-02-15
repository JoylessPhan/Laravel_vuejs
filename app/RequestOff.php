<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestOff extends Model
{
    //
    protected $fillable = ['reason', 'interval_time', 'date', 'to', 'carbon_copy', 'employee_id'];
    protected $hidden   = [];
}
