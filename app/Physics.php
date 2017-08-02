<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Physics extends Filterable
{
	use Traits\Getters;
	
    protected $table = 'physics';
}
