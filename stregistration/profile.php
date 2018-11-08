<html>
<body>
<div id="container">
		<div id="left-nav">
				<div class="user-details">
					<h3><?php echo $name ?></h3>
					<h2><?php echo $username ?></h2>
				</div>
		</div>

		<div id="right-nav">
			<h1>Personal Info</h1>
			<hr />
			<br />
			<?php
			include('server.php');
			$result=mysql_query("SELECT * FROM students where username='$username' ");
			while($test = mysql_fetch_array($result))
			{
				$id = $test['user_id'];
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
				echo " <a href ='edit_profile.php?user_id=$id'><button>Edit Profile</button></a>";
				echo "</div> ";
				echo "<br /> ";
				echo "<br /> ";
			}
			?>
		</div>
	</div>
</body>
</html>
