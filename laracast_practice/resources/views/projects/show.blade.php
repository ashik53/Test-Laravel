@extends('layout')

@section('content')


	<h1> {{ $project->title }} </h1>

	<p> {{ $project->description }}</p>

	<a href = "/projects/{{ $project->id }}/edit"> Edit </a>
    <br>

	@if ($project->tasks->count())

	  <div>
		
		@foreach($project->tasks as $task)

			<form method="POST" action ="/tasks/{{ $task->id }}" >
				@method('PATCH')
				@csrf

				<div class = "form-check">
				  
				  <label class ="form-check-label" for ="completed"  > 
				     <input type="checkbox" name ="completed" class ="form-check-input"    onChange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}> 

				     {{ $task->description }}
				     

				  </label> 

				</div> <!---  checkbox -->

			</form>

		@endforeach

	  </div>

	@endif


	{{-- add task --}}
	<!--<form method ="POST" action ="/projects/{{ $project->id }}/tasks">
	
		{{ csrf_field() }}

		<div class ="form-group">
			<label for ="description"> </label>
			<input name = "description" class ="form-control {{ $errors->has('description') ? 'is-invalid' : ''}}" type ="text" value = {{ old('description') }}> 
		</div>

		<button type="submit" class = "btn btn-primary mt-1" >Create Task</button>

	</form>  -->


    <div class ="container">
		<form method ="POST" action="/projects/{{ $project->id }}/tasks">

			{{ csrf_field() }}

		
			<div class="form-group">
				<label for = "description"> </label>
				<input class ="form-control" name ="description" type ="text"> 
			</div> <!-- title div -->

			<button type ="submit" class ="btn btn-success "> Add Task </button>

			@include('errors')

		</form>
	</div>



@endsection
