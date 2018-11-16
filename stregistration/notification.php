<html>
<head>
		<title>notification</title>
		<link rel="stylesheet" type="text/css" href="edit_profile.css">
	</head>

<body>
<?php include('server.php');
			$con = mysqli_connect('localhost', 'root', '', 'sdop1');
			$username = $_SESSION['username'];
			$result=mysqli_query($con,"SELECT pid,projectfield,details from projectinfo p JOIN studentskills s ON(p.projectfield like s.skillname and s.stid like $username") or die(mysqli_error());
                        echo "<table border ="1px">";
			while($row = mysqli_fetch_array($result))
			{       $pid=row[0];
                                $projectfield=$row[1];
                                $details=$row[2];

                                echo "<tr>";
                                echo "<td> {$pid} </td>";
                                echo "<td> {$projectfield} </td>";
                                echo "<td> {$details} </td>";
                                echo "</tr>";
                        }
                         echo  "</table>";
                        ?>
    </body>  
</html>
