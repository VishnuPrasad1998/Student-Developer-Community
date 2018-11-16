<?php
require('server.php');
$conn = mysqli_connect('localhost', 'root', '', 'sdop1');
$username = $_SESSION['username'];
$result=mysqli_query($conn,"SELECT * FROM students where username='$username' ");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
$sql = "DELETE FROM students WHERE username='$username'";

if ($conn->query($sql) === TRUE) {
    header('Location: login.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>