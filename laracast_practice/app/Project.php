<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\User;

use App\Mail\ProjectCreated;
class Project extends Model
{
    //

	protected $guarded = [];

	/*protected static function boot(){
		
		parent::boot();
		static::created(function ($project){

			\Mail::to($project->owner->email)->send(

            	new ProjectCreated($project)

        	);

		});

	} //func
   */	
	public function owner(){

		return $this->belongsTo(User::class);
	} //func
	public function tasks() {
		return $this->hasMany(Task::class);
	} //tasks

	public function addTask($task){
		
		return $this->tasks()->create($task); 
	
	} //add task

} //class
