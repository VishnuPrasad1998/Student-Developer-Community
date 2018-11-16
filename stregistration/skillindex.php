<?php include('.php');
	//session_start();
	$db = mysqli_connect('localhost', 'root', '', 'sdop1');

	// initialize variables
        
	//$id = 0;
	$update = false;
        $field= "";
	if (isset($_POST['save'])) {
		$skillname = $_POST['skillname'];
                $skilllevel = $_POST['skilllevel'];
                $username = $_POST['username'];
                $skill_test=mysqli_query($db,"SELECT skillname FROM studentskills WHERE stid ='$username'") or die(mysqli_error());
                if (empty($skill_test)) {
		        mysqli_query($db, "INSERT INTO studentskills(skillname,skilllevel,stid)
                        VALUES('$skillname' , ' $skilllevel','$username')"); 
                }
                else{
                		mysqli_query($db, "UPDATE studentskills SET skillname ='$skillname'where stid ='$username'")or die(mysql_error()); }
       
		$_SESSION['message'] = "skill info saved"; 
		header('location: skill.php');
	}
?>
