<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Government extends Filterable
{
	use Traits\Getters;
	
    protected $table = 'government';
}
