<?php require('navbar.php')?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title>
</head>
<body>
	
<form class=container method="post" action="contactus.php">
		
  <h2>Contact us</h2>
		
	<div class="form-group">
    <label for="firstname">Name</label>
    <input type="text" class="form-control" name="firstname" placeholder="Enter your name." required>
  </div>
  <div class="form-group">
    <label for="subject">Email</label>
    <input type="text" class="form-control" name="email" placeholder="Enter your email." required>
  </div>
  <div class="form-group">
    <label for="contents">Message</label>
    <textarea class="form-control" name="message" placeholder="Enter your message here." rows="4" required>
    </textarea>
  </div>
  <div class="form-group">
    <input type="submit" value="Submit Message" class="btn btn-primary">
  </div>
</form>
</body>
</html>
<?php require('footer.php')?>