<!DOCTYPE html>
<html>
<head>
	<title>Index page</title>
</head>
<body>

	  <h1> Projects</h1>

	  @foreach ($projects as $project)
	  	<ul>
	  		<li> {{ $project->title }} </li>

	  	</ul>

	  @endforeach


</body>
</html>