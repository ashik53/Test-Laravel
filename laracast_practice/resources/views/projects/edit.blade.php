@extends('layout')

@section('content')

	<h2 class ="mt-20"> Edit Project</h2>

	<form method ="POST" action="/projects/{{ $project->id}}">

		{{ method_field('PATCH') }}
		{{ csrf_field() }}

		<div class="form-group">
			<label for = "title"> Project Name: </label>
			<input  name ="title" class ="form-control" type ="text" placeholder =" {{ $project->title }}"> 
		</div> <!-- title div -->
		
		<div class="form-group">
			<label for = "description"> Project Description: </label>
			<textarea class ="form-control" name ="description" type ="text"> {{ $project->description }} </textarea>
		</div> <!-- title div -->

		<button type ="submit" class ="btn btn-success btn-lg"> Update Project </button>

	</form>

	<form method ="POST" action = "/projects/{{ $project->id }}">	

		{{ method_field('DELETE') }}
		{{ csrf_field() }}

     	<button type ="submit" class ="btn btn-danger btn-lg mt-3"> Delete Project</button> 	
	</form>

@endsection