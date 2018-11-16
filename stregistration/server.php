<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$name = "";
$collegename = "";
$department = "";
$registrationid = "";
$course = "";
$gender = "";
$message = "";
$dob = "";
$password_1 = "";
$password_2 = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'sdop1');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $collegename = mysqli_real_escape_string($db, $_POST['collegename']);
  $department = mysqli_real_escape_string($db, $_POST['department']);
  $registrationid = mysqli_real_escape_string($db, $_POST['registrationid']);
  $course = mysqli_real_escape_string($db, $_POST['course']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $message = mysqli_real_escape_string($db, $_POST['message']);
  $dob = mysqli_real_escape_string($db, $_POST['dob']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "name is required"); }
  if (empty($collegename)) { array_push($errors, "collegename is required"); }
  if (empty($department)) { array_push($errors, "department is required"); }
  if (empty($registrationid)) { array_push($errors, "registrationid is required"); }
  if (empty($course)) { array_push($errors, "course is required"); }
  if (empty($email)) { array_push($errors, "email is required"); }
  if (empty($gender)) { array_push($errors, "gender is required"); }
  if (empty($message)) { array_push($errors, "message is required"); }
  if (empty($dob)) { array_push($errors, "dob is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM students WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO students(name,collegename,department,registrationid,course,email,gender,message,dob,username,password) 
  			  VALUES('$name', '$collegename' , '$department','$registrationid','$course','$email','$gender','$message','$dob','$username','$password')";
  	if(mysqli_query($db, $query))
    {
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
  else{
    header('location:login.php');
  }
  }
}
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM students WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?>
