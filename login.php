<?php require('navbar.php')?>
<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
</head>
<body>
	
<form class=container method="post" action="login.php">
<?php include('errors.php'); ?>
	
    <h2>Login</h2>
	
  <div class="form-group">
	  <label for="email"><b>Email</b></label>
    <input type="text" class="form-control" placeholder="Enter email" name="email">
	  </div>
	
	<div class="form-group">
    <label for="password"><b>Password</b></label>
    <input type="password" class="form-control" placeholder="Enter Password" name="password">
</div>
	
	<div>
    <button type="submit" class="btn btn-primary" name="login_user">Login</button>
  </div>

  <div>
    <p>Don't have an account? <a href="register.php">Register with us</a></p>
  </div>
</form>

	<?php require('footer.php')?>
</body>
</html>