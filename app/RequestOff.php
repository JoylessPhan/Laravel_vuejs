<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Support\DataTablePaginate;

class RequestOff extends Model
{
    //
    use DataTablePaginate;
    protected $fillable = ['reason', 'interval_time_start', 'interval_time_end', 'date', 'to', 'carbon_copy', 'employee_id'];
    protected $hidden   = [];
}
