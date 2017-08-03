<?php

namespace App\Http\Controllers;

use App\{Biology,Chemistry,Commerce,Crs,Economics, English, GeneralPaper, Government, LiteratureInEnglish, Mathematics, Physics};
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index($type, $subject, $year)
    {
    	$model = "App\\$subject";
    	$type = $type=='JAMB' ? "UTME" : $type;
    	$questions = $model::year($year)->examType($type)->get();
    	return view('exam')->with('questions',$questions);
    }
}
