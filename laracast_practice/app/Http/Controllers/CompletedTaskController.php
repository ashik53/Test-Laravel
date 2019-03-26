<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task; 

class CompletedTaskController extends Controller
{
    //
	public function store(Task $task){
		
		//dd('complete');
		$task->complete();

		return back();
	} //func 

	public function destroy(Task $task){
		
		//dd('incomplete');
		$task->incomplete();
		
		return back();
	} //func





} //class
