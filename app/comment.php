<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
	protected $fillable = [
   'body',
   'url',
   'commentable_id',
   'commentable_type',
   'user_id',
   ];
}
