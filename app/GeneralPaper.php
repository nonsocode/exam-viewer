<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneralPaper extends Filterable
{
	use Traits\Getters;
	
    protected $table = 'generalpaper';
}
