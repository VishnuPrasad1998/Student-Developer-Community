<?php
require('server.php');
$con = mysqli_connect('localhost', 'root', '', 'sdop1');
$username = $_SESSION['username'];
$result=mysqli_query($con,"SELECT * FROM company where username='$username' ");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
$cname=$test['cname'];
$email=$test['email'];
$address=$test['address'];
$about=$test['about'];
$services=$test['services'];

if(isset($_POST['save']))
{	
$cname_save=$_POST['cname'];
$email_save=$_POST['email'];
$address_save=$_POST['address'];
$about_save=$_POST['about'];
$services_save=$_POST['services'];

	mysqli_query($con,"UPDATE company SET cname ='$cname_save', email ='$email_save',  
	address='$address_save',about='$about_save', services ='$services_save'  WHERE username = '$username'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: profile.php");			
}
?>

<!DOCTYPE html>
<html>

	<head>
		<title>sdop-edit</title>
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
				<li><a href="project1.php" title="Project"><label class="active">Project</label></a></li>
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
					<td><label>CompanyName</label></td>
					<td><label>Mail id</label></td>
				</tr>
				<tr>
					<td><input type="text" name="cname" value="<?php echo $cname; ?>" placeholder="Enter your name....." class="form-1" title="Enter your name" required /></td>
					<td><input type="text" name="email" value="<?php echo $email; ?>" placeholder="Enter your mailid....." class="form-1" title="Enter your mailid" required /></td>
				</tr>
			</table>
		</fieldset>
<br />
		<fieldset class="---------------">
			<legend><h1>Company Info</h1></legend>
			<table cellpadding="5" cellspacing="5">
				<tr>
					<td><label>Address</label></td>
					<td><input type="text" name="address" value="<?php echo $address; ?>" class="form-1" title="Enter address of your company" required /></td>
				
				</tr>
				<tr>
					<td><label>About</label></td>
					<td><input type="text" name="about" value="<?php echo $about; ?>" class="form-1" title="Enter company about" required></input></td>
				</tr>
                <tr>
					<td><label>Services</label></td>
					<td><input type="textarea" name="services" value="<?php echo $services; ?>" class="form-1" title="Enter company services" required></input></td>
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
