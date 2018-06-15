<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = ['name', 'addrees', 'state', 'city'];
    protected $table    = 'site';
}
