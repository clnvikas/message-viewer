<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    // 
     protected $fillable = [
'name',
'project_id',
'company_id',
'user_id',
'days',
'hours',
    ];
}
