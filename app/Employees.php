<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Support\DataTablePaginate;

class Employees extends Model
{
    //
    use DataTablePaginate;
    protected $fillable = ['last_name', 'first_name', 'birthday', 'email', 'phone', 'address', 'role_id'];
    protected $hidden   = [];
}
