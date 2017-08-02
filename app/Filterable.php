<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filterable extends Model
{
    public function scopeYear($query, $year){
    	return $query->where('exam_year', $year);
    }

    public function scopeExamType($query, $type)
    {

    	return $query->whereExamType($type);
    }

}
