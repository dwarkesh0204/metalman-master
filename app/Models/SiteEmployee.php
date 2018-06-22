<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteEmployee extends Model
{
    protected $fillable = ['site_id', 'employee_id'];
    protected $table    = 'site_employee';

    public function employeeDetail() {
	    return $this->belongsTo("App\Models\Employee",'employee_id');
	}
}
