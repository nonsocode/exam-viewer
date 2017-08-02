<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chemistry extends Filterable
{
	use Traits\Getters;
    protected $table = 'chemistry';    
}
