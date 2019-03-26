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

} //class
