<?php
$con=mysqli_connect("localhost","root","","sdop1");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT cid,cname FROM company");

echo "<table border='5' align='center' cellpadding='20'>
<tr>
<th>Company ID</th>
<th>Company name</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['cid'] . "</td>";
echo "<td>" . $row['cname'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title>company</title>
</head>
<body>

</body>
</html>