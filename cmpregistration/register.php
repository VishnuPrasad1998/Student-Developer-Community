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
      <label>ID</label>
      <input type="text" name="cid" value="<?php echo $cid; ?>">
    </div>
    <div class="input-group">
  	  <label>Company Name</label>
  	  <input type="text" name="cname" value="<?php echo $cname; ?>">
  	</div>
  	<div class="input-group">
  	  <label>email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
        <div class="input-group">
  	  <label>Address</label>
  	  <textarea name="address" rows="5" cols="40" value="<?php echo $address; ?>"></textarea>
  	</div>
  	<div class="input-group">
  	  <label>About</label>
  	  <textarea name="about" rows="5" cols="40" value="<?php echo $about; ?>"></textarea>
  	</div>
  	<div class="input-group">
  	  <label>Services</label>
  	  <textarea name="services" rows="5" cols="40" value="<?php echo $services; ?>"></textarea>
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
