<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Student signup</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="name" value="<?php echo $name; ?>">
  	</div>
  	<div class="input-group">
  	  <label>College name</label>
  	  <input type="text" name="collegename" value="<?php echo $collegename; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Department</label>
  	  <input type="text" name="department" value="<?php echo $department ; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Registration id</label>
  	  <input type="text" name="registrationid" value="<?php echo $registrationid; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Course </label>
  	  <input type="text" name="course" value="<?php echo $course; ?>">
  	</div>
  	<div class="input-group">
  	  <label>email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>gender</label>
  	  <input type="text" name="gender" value="<?php echo $gender; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Address</label>
  	  <input type="text area" name="message" value="<?php echo $message; ?>">
  	</div>
  	<div class="input-group">
  	  <label>DOB</label>
  	  <input type="date" name="dob" value="<?php echo $dob; ?>">
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