<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['employee_name', 'phone_number', 'email', 'designation', 'location'];
    protected $table    = 'employee';
}
