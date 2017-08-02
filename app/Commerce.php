<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commerce extends Model
{
	use Traits\Getters;
	
    protected $table = 'commerce';
}
