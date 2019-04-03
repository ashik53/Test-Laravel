<?php

namespace App\Http\Controllers;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use App\Project;
use App\User;
use App\Services\Twitter;
use App\Mail\ProjectCreated;
class ProjectsController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    } //func


    public function index(){

    	//$projects = auth()->user()->id()->projects;

        //dump($projects);

        //$value = cache()->get('stats');

    	return view('projects.index', [
            
            'projects' => auth()->user()->projects
        ]);

    } //function

    public function create(){
    	return view('projects.create');
    } // func

    public function store(){

        //Project::create(request()->all());

        $validated = $this->validateProject();  /*request()->validate([

            'title' => 'required|min:3',
            'description' => 'required|min:4'

        ]); */

        $validated['owner_id'] = auth()->id();

        $project = Project::create($validated);
    	
        /*$project = new Project();

    	$project->title = request('title');
    	$project->description = request('description');

    	$project->save(); */

        event(new ProjectCreated($project));
        

    	return redirect('/projects'); 


    } //func

    public function show(Project $project){

        /*if($project->owner_id !== auth()->id()){
            abort(403);
        } */

        $this->authorize('view', $project);

       // abort_unless(\Gate::allows('view', $project), 403);


        return view('projects.show', compact('project'));

    } //func

    public function edit(Project $project){
        
        if($project->owner_id !== auth()->id()){
            abort(403);
        } 
        return view('projects.edit', compact('project'));
        
    } //func

    public function update(Project $project){

        //dd(request()->all());

        $validated = $this->validateProject();

        $project->update($validated);

        return redirect('/projects');
    } //update

    public function destroy(Project $project){

        $project->delete();

        return redirect('/projects');

    }//func

    public function validateProject(){

        return request()->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:4'
        ]);


    }//func

} //class
