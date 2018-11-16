<?php include('projectserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registering project infoL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>project info</h2>
  </div>
	
  <form method="post" action="project.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
      <label>Name</label>
      <input type="text" name="pname" value="">
    </div>
    <div class="input-group">
      <label>pid</label>
      <input type="text" name="pid" value="">
    </div>
                <div class="input-group">
      <label>details</label>
      <textarea name="details" rows="5" cols="40" value=""></textarea>
    </div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>