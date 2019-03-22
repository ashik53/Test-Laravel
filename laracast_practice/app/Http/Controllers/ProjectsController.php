<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index(){

    	$projects = \App\Project::all();

    	return view('projects.index', compact('projects'));

    } //function

    public function create(){
    	return view('projects.create');
    } // func

    public function store(){

        //Project::create(request()->all());

        $validated = request()->validate([

            'title' => 'required|min:3',
            'description' => 'required|min:4'

        ]);

        Project::create($validated);
    	
        /*$project = new Project();

    	$project->title = request('title');
    	$project->description = request('description');

    	$project->save(); */

    	return redirect('/projects'); 


    } //func

    public function show(Project $project){

        return view('projects.show', compact('project'));

    } //func

    public function edit(Project $project){
        
        return view('projects.edit', compact('project'));
        
    } //func

    public function update(Project $project){

        //dd(request()->all());

        $project->update(request(['title', 'description']));

        return redirect('/projects');
    } //update

    public function destroy(Project $project){

        $project->delete();

        return redirect('/projects');

    }//func
} //class
