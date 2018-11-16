<?php
include("server.php");
session_start();
if (!isset($_SESSION['username'])){
header('location:index.php');
}

$username = $_SESSION['username'];
$con = mysqli_connect('localhost', 'root', '', 'sdop1');
$query=mysqli_query ($con,"SELECT * FROM company WHERE username ='username'") or die(mysql_error());
$row=mysqli_fetch_array($query);
$cname=$row['cname'];
$email=$row['email'];
$username=$row['username'];
?>
