<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class writing_answers extends Model
{
	protected $fillable = ['writing_id','user_id','studentAns'];    
}
