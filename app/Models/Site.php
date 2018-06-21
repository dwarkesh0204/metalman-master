<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = ['name', 'address', 'state', 'city'];
    protected $table    = 'site';

    public function siteEmployees()
    {
        return $this->hasMany("App\Models\SiteEmployee", "site_id", 'id');
    }

}
