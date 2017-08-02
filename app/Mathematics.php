<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mathematics extends Filterable
{
	use Traits\Getters;
	
    protected $table = 'mathematics';
}
