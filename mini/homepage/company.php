<?php
$con=mysqli_connect("localhost","root","","sdop");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT companyname,companyid FROM company");

echo "<table border='5'>
<tr>
<th>Name</th>
<th>College name</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['companyname'] . "</td>";
echo "<td>" . $row['companyid'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>