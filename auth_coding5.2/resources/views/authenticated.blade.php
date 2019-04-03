<!DOCTYPE html>
<html>
<head>
	<title> Home </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<p> You are authenticated</p>

	<form action= "{{ route('logout') }}"" mehtod="GET">
		
		<button type ="submit" class="btn btn-danger"> Log out</button>
	</form>
</body>
</html>