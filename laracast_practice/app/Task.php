<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{ 
    protected $guarded = [];
    
	public function project(){

		return $this->belongsTo(Project::class);

	} //func

	public function complete($completed = true){

		$this->update(compact('completed'));


	} //complete func

	public function incomplete(){
		$this->complete(false);
	} //func




} //class
