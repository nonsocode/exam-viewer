<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commerce extends Filterable
{
	use Traits\Getters;

    protected $table = 'commerce';
}
