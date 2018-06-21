<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteEmployee extends Model
{
    protected $fillable = ['site_id', 'employee_id'];
    protected $table    = 'site_employee';
}
