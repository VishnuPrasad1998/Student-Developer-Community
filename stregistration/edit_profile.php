<?php
require('server.php');
$username =$_REQUEST['username'];

$result = mysql_query("SELECT * FROM students WHERE username  = '$username' ");
$test = mysql_fetch_array($result);
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
$first_save=$_POST['name'];
$last_save=$_POST['email'];
$username_save=$_POST['collegename'];
$birthday_save=$_POST['dob'];
$gender_save=$_POST['gender'];
$number_save=$_POST['department'];

	mysql_query("UPDATE user SET firstname ='$first_save', lastname ='$last_save', username ='$username_save', 
	birthday ='$birthday_save' , gender ='$gender_save', number ='$number_save' WHERE username = '$username'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: profile.php");			
}

?>

