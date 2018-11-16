<html>
<head>
		<title>sdop-edit</title>
		<link rel="stylesheet" type="text/css" href="edit_profile.css">
	</head>

<body>

	<div id="header">
		<div class="head-view">
			<ul>
				<li><a href="#home.php" title="sdop"><b>SDOP</b></a></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li><a href="http://localhost/mini/homepage/index.php" title="home"><label class="active">Profile</label></a></li>
				<li><a href="profile.php" title="Profile"><label class="active">Profile</label></a></li>
				<li><a href="project1.php" title="project"><label class="active">Project</label></a></li>
				<li><a href="logout.php" title="Log out"><button class="btn-sign-in" value="Log out">Log out</button></a></li>
			</ul>
		</div>
	</div>
			<?php include('server.php');
			$con = mysqli_connect('localhost', 'root', '', 'sdop1');
			$username = $_SESSION['username'];
			$result=mysqli_query($con,"SELECT * FROM company WHERE username ='$username'") or die(mysqli_error());
			while($test = mysqli_fetch_array($result))
			{
				$username = $test['username'];
				echo " <div class='info-user'>";
				echo " <div>";
				echo " <label>CompanyName:</label>&nbsp;&nbsp;&nbsp;<b>".$test['cname']."</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
				echo " <label>Mail id:</label>&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['email']."</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
                                echo " <label>Address:</label>&nbsp;&nbsp;&nbsp;<b>".$test['address']."</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
				echo " <label>About:</label>&nbsp;&nbsp;&nbsp;<b>".$test['about']."</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
				echo " <label>Services:</label>&nbsp;&nbsp;&nbsp;<b>".$test['services']."</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
				echo " <label>Username</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['username']."</b>";    
                                echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
                                echo " <label>Company id:</label>&nbsp;&nbsp;&nbsp;<b>".$test['cid']."</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
				echo " <div class='edit-info'>";
				echo " <a href ='edit_profile1.php?username=$username'><button>Edit Profile</button></a>";
				echo "</div> ";
				echo "<br /> ";
				echo "<br /> ";
				echo " <div class='delete-info'>";
				echo " <a href ='delete.php?username=$username'><button>Delete Profile</button></a>";
				echo "</div> ";
				echo "<br /> ";
				echo "<br /> ";
			}
			?>
		</div>
	</div>
</body>
</html>
