<?php
require('server.php');
$con = mysqli_connect('localhost', 'root', '', 'sdop');
$username = "abc45";
			$result=mysqli_query($con,"SELECT * FROM students where username='$username' ");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
$name=$test['name'];
$email=$test['email'];
$collegename=$test['collegename'];
$dob=$test['dob'];
$gender=$test['gender'];
$department=$test['department'];
if(isset($_POST['save']))
{	
$name_save=$_POST['name'];
$email_save=$_POST['email'];
$username_save=$_POST['username'];
$birthday_save=$_POST['dob'];
$gender_save=$_POST['gender'];
$department_save=$_POST['department'];
	mysqli_query($con,"UPDATE students SET name ='$name_save', email ='$email_save', username ='$username_save', 
	dob ='$birthday_save' , gender ='$gender_save', department ='$department_save' WHERE username = '$username'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: profile.php");			
}
?>

<!DOCTYPE html>
<html>

	<head>
		<title>Welcome  To Biobook - Sign up, Log in, Post </title>
		<link rel="stylesheet" type="text/css" href="edit_profile.css">
	</head>

<body>

	<div id="header">
		<div class="head-view">
			<ul>
				<li><a href="home.php" title="sdop"><b>SDOP</b></a></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li><a href="#" title="<?php echo $username ?>"><label><?php echo $username ?></label></a></li>
				<li><a href="home.php" title="Home"><label>Home</label></a></li>
				<li><a href="profile.php" title="Profile"><label class="active">Profile</label></a></li>
				<li><a href="logout.php" title="Log out"><button class="btn-sign-in" value="Log out">Log out</button></a></li>
			</ul>
		</div>
	</div>

	<div id="container">
		
		<div id="right-nav">
			<h1>Edit Info</h1>
	
		<div id="left-nav1">
		
		<fieldset class="-------------">
			<table cellpadding="5" cellspacing="5">

<form method="post">
				<tr>
					<td><label>Name</label></td>
					<td><label>Mail id</label></td>
				</tr>
				<tr>
					<td><input type="text" name="name" value="<?php echo $name; ?>" placeholder="Enter your name....." class="form-1" title="Enter your name" required /></td>
					<td><input type="text" name="email" value="<?php echo $email; ?>" placeholder="Enter your mailid....." class="form-1" title="Enter your mailid" required /></td>
				</tr>
				<tr>
					<td><label>User name</label></td>
				</tr>
				<tr>
					<td><input type="text" name="username" value="<?php echo $username; ?>" placeholder="Enter your username....." class="form-1" title="Enter your username" required /></td>
				</tr>
			</table>
		</fieldset>
<br />
		<fieldset class="---------------">
			<legend><h1>Personal Info</h1></legend>
			<table cellpadding="5" cellspacing="5">
				<tr>
					<td><label>Birthday</label></td>
					<td><input type="date" name="dob" value="<?php echo $dob; ?>" class="form-1" title="Enter your dob" required /></td>
				
				</tr>
				<tr>
					<td><label>Gender</label></td>
					<td>
						<select name="gender" class="form-1" value="<?php echo $gender; ?>">
							<option>Select</option>
							<option>Male</option>
							<option>Female</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label>Department</label></td>
					<td><input type="text" name="department" value="<?php echo $department; ?>" placeholder="09...." maxlength="13" class="form-1" title="Enter your  department" required /></td>
				</tr>
			</table>
		</fieldset>
<br />		
		<button type="submit" name="save" class="">Save</button>

		
		</div>
		
		</div>
		

	
		
	</div>

</body>

</html>