<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestOt extends Model
{
    //
    protected $fillable = ['reason', 'interval_time', 'date', 'to', 'carbon_copy', 'employee_id'];
}
