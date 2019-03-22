<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //

	protected $guarded = [];

	public function tasks() {
		return $this->hasMany(Task::class);
	} //tasks

	public function addTask($task){
		
		return $this->tasks()->create($task); 
	
	} //add task

} //class
