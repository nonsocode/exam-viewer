<?php

namespace App\Http\Controllers;

use App\{Biology,Chemistry,Commerce,Crs,Economics, English, GeneralPaper, Government, LiteratureInEnglish, Mathematics, Physics};
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index($type, $subject, $year)
    {
    	$model = "App\\$subject";
    	$modifiedType = $type=='JAMB' ? "UTME" : $type;
    	$questions = $model::year($year)->examType($modifiedType)->get();
    	return view('exam', compact('questions','type', 'subject','year'));
    }
}
