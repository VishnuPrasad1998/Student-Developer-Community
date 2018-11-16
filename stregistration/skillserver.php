<?php
session_start();

// initializing variables
$skillname = "";
$skilllevel    = "";
$stid = "";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'sdop1');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $skillname = mysqli_real_escape_string($db, $_POST['skillname']);
  $skilllevel = mysqli_real_escape_string($db, $_POST['skilllevel']);
  $stid = mysqli_real_escape_string($db, $_POST['stid']);
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($skillname)) { array_push($errors, "skillname is required"); }
  if (empty($skilllevel)) { array_push($errors, "skilllevel is required"); }
  if (empty($stid)) { array_push($errors, "username is required"); }
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  //$user_check_query = "SELECT * FROM studentskills WHERE stid='$stid' ";
  //$result = mysqli_query($db, $user_check_query);
  //$user = mysqli_fetch_assoc($result);
  
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
   
    $query = "INSERT INTO studentskills(skillname,skilllevel,stid) 
          VALUES('$skillname', '$skilllevel' , '$stid')";
    if(mysqli_query($db, $query))
    {
    echo "Successfull";
  }
  else{
    echo "Not Successfull";
  }
  }
}  