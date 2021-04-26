<?php require('navbar.php')?>
<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Register</title>
</head>
<body>
	
<form class=container action="register.php" method="post">

    <h2>Register</h2>	
	
	<div class="form-group">
    <label for="firstname"><b>First name</b></label>
    <input type="text" class="form-control" placeholder="Enter Firstname" name="firstname">
</div>
	
	<div class="form-group">
    <label for="lastname"><b>Last name</b></label>
    <input type="text" class="form-control" placeholder="Enter Lastname" name="lastname">
</div>
	
  <div class="form-group">
	  <label for="email"><b>Email</b></label>
    <input type="text" class="form-control" placeholder="Enter email" name="email">
	  </div>
	<div class="form-group">
    <label for="password"><b>Password</b></label>
    <input type="password" class="form-control" placeholder="Enter Password" name="password">
</div>
	<div>
    <button type="submit" class="btn btn-primary" name="reg_user">Register</button>
  </div>

	<?php require('footer.php')?>
</body>
</html>