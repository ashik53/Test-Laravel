<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  
  <div class= "row">	
  	<div class= "col-6 col-offset-6">
  		<h1> Login here</h1>	
  		<form method="POST" action= {{ route('login') }}>
        {!! csrf_field() !!}
  			<div class = "form-group"> 
                <label for="email">Email</label>
                <input class = "form-control" type="text" name="email" > 
            </div>

            <div class = "form-group"> 
                <label for="password">Password</label>
                <input class = "form-control" type="password" name="password" > 
            </div>


  			<div class = "form-check">
             	<label class = "form-check-label">
             		<input class = "form-check-input" type="checkbox" name="remember"> Remember me
             	</label>
        	</div>

        	<button type="submit" class="btn btn-primary btn-block"> Login</button>
    	</form>
  	</div> <!-- col-->

  </div> <!-- row -->
</div> <!-- container -->
  <script src="js/jquery-slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>