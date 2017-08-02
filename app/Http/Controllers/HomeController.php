<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class HomeController extends Controller
{
	protected $appends = ['type'];
    public function index()
    {
    	$subjects = ['Biology','Chemistry','Commerce','Crs','Economics','English','GeneralPaper','Government','LiteratureInEnglish','Mathematics','Physics'];
    	$exams = [];

    	foreach ($subjects as $subject) {
    		$model = "App\\$subject";
    		$examYears = $model::groupBy('exam_year')->get();
    		foreach ($examYears as $exam) {
    			$exam->name = $subject;
    			$exams[] = $exam;
    		}
    	}

    	return view('home')->with('exams',$exams);
    }
}
