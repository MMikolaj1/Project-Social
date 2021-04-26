<?php require('navbar.php')?>
<?php 
  session_start(); 

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: login.php");
  }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Main page</title>
</head>
<body>
	<h2>Home Page</h2>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['email'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['email']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
	
	<form class=container method="post" action="index.php">
 <div class="form-group">
    <label for="post">Post</label>
    <input type="text" class="form-control" name="post" placeholder="Say what's on your mind.">
	<img src="images/camera.png" style="max-width:35" text="photo";>
    <img src="images/video.png" style="max-width:30" text="video";>
    </label>
	  <br>
    <input type="submit" value="Submit Message" class="btn btn-primary">
	</div>
</form>
</body>
</html>

<?php require('footer.php')?>