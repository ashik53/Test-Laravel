<!DOCTYPE html>
<html>
<head>
	<title>Index page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

	  

	<div class= "container">
		  <h1> Projects</h1>

		  <form method="POST" action="/projects">

		  	@csrf
		  		
		  		<div class = "form-group"> 
	                <label for="title">Title </label>
	                <input class = "form-control {{ $errors->has('title') ? 'is-invalid' : ''}}" type="text" name="title" value = {{ old('title')}} > 
	        	</div>

	        	<div class = "form-group"> 
	                <label for="description mt-1">Description </label>
	                <textarea class = "form-control form-control-lg {{ $errors->has('title') ? 'is-invalid' : ''}}" type="text" name="description" required> {{ old('description') }}</textarea>
	        	</div>

	        	<button class = "btn btn-primary mt-1" type="submit">Create Project</button>

		  </form>

		  @include('errors')

	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</body>
</html>