<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class English extends Filterable
{
	use Traits\Getters;
	
    protected $table = 'english';
}
