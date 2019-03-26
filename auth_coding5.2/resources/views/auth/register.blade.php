<!DOCTYPE html>
<html>
<head>
	<title> Registration  </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  
  <div class= "row">	
  	<div class= "col-6 col-offset-6">
  		
      <h1>  Register here</h1>	
  		<form method="POST" action="{{ route('register') }}">

  			{!! csrf_field() !!}


        <div class = "form-group"> 
            <label for="name">Name</label>
            <input class = "form-control" type="text" name="name" > 
        </div>

        <div class = "form-group"> 
            <label for="email">Email</label>
            <input class = "form-control" type="text" name="email" > 
        </div>


        <div class = "form-group"> 
            <label for="password">Password</label>
            <input class = "form-control" type="password" name="password" > 
        </div>

        <div class = "form-group"> 
            <label for="confirm_password">Confirm Password</label>
            <input class = "form-control" type="password" name="confirm_password" > 
        </div>

  			

        <button type="submit" class="btn btn-primary btn-block"> Register</button>
    	</form>
  	</div> <!-- col-->

  </div> <!-- row -->
</div> <!-- container -->
  <script src="js/jquery-slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>