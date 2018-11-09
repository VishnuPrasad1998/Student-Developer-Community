<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Company signup</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Company Name</label>
  	  <input type="text" name="cname" value="<?php echo $cname; ?>">
  	</div>
  	<div class="input-group">
  	  <label>ID</label>
  	  <input type="text" name="id" value="<?php echo $id; ?>">
  	</div>
  	<div class="input-group">
  	  <label>About</label>
  	  <input type="text" name="about" value="<?php echo $about; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Services</label>
  	  <input type="text area" name="services" value="<?php echo $services; ?>">
  	</div>
  	<div class="input-group">
  	  <label>email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Address</label>
  	  <input type="text area" name="address" value="<?php echo $address; ?>">
  	</div>
  	<div class="input-group">
  	  <label>username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
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