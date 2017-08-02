<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LiteratureInEnglish extends Filterable
{
	use Traits\Getters;
	
    protected $table = 'literatureinenglish';
}
