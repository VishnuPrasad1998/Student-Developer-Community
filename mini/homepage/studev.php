<?php
$con=mysqli_connect("localhost","root","","sdop");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT name,collegename FROM students");

echo "<table border='5'>
<tr>
<th>Name</th>
<th>College name</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['collegename'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>