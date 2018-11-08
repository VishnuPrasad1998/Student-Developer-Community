<html>
<body>
<div id="container">
		
		<div id="right-nav">
			<h1>Personal Info</h1>
			<hr />
			<br />
			<?php 
			include('server.php');
			$con = mysqli_connect('localhost', 'root', '', 'sdop');
			$username = "abc45";
			$result=mysqli_query($con,"SELECT * FROM students where username='$username' ");
			while($test = mysqli_fetch_array($result))
			{
				$username = $test['username'];
				echo " <div class='info-user'>";
				echo " <div>";
				echo " <label>Name:</label>&nbsp;&nbsp;&nbsp;<b>".$test['name']."</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
				echo " <label>Mail id:</label>&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['email']."</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
				echo " <label>College name:</label>&nbsp;&nbsp;&nbsp;<b>".$test['collegename']."</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
				echo " <label>Birthday</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['dob']."</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
				echo " <label>Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['gender']."</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
				echo " <label>Department</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['department']."</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo "</div> ";
				echo "<br /> ";
				echo " <div class='edit-info'>";
				echo " <a href ='edit_profile1.php?username=$username'><button>Edit Profile</button></a>";
				echo "</div> ";
				echo "<br /> ";
				echo "<br /> ";
			}
			?>
		</div>
	</div>
</body>
</html>