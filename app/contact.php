<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $fillable = ['cname','cemail','ccontact','ccity','cdes'];
}
