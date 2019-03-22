<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\Project;

class ProjectTaskController extends Controller
{
   	
    public function store(Project $project){

    	$data = request()->validate(['description' => 'required']);

    	$project->addTask($data);

    	return back();

    } //store


   	public function update(Task $task){

   		//dd($task->completed);

   		/*if (request()->has('completed')) {
   			$task->complete(true);
   		} else {
   			$task->complete(false);
   		} */

   		//request()->has('completed') ? $task->complete() : $task->incomplete();

   		$method = request()->has('completed') ? 'complete' : 'incomplete';
   		$task->$method();


   		/*$task->update([

   			'completed' => request()->has('completed')

   		]); */

   		

   		return back();
   		
   	} //function
} //class
