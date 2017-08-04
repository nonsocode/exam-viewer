<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class HomeController extends Controller
{
    public function index()
    {
    	$subjects = ['Biology','Chemistry','Commerce','Crs','Economics','English','GeneralPaper','Government','LiteratureInEnglish','Mathematics','Physics'];
    	$exams = [];
    	$counter=[];
    	foreach ($subjects as $subject) {
    		$count = 0;
    		$model = "App\\$subject";
    		$examYears = $model::groupBy('exam_year')->get();
    		foreach ($examYears as $exam) {
    			$count++;
    			$exam->name = $subject;
    			$exam->url = route('exam-view', [$exam->type, $subject, $exam->exam_year]);
    			$exams[] = $exam;
    		}
    		$counter[$subject] = $count;
    	}

    	return view('home', compact('exams','counter'));
    }
}
