<?php
$con=mysqli_connect("localhost","root","password","test");

// Check connection
if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM cim_results");

echo "<table border='1'>
<tr>
<th>Place</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Time</th>
<th>Pace</th>
<th>City</th>
<th>State</th>

</tr>";

while($row = mysqli_fetch_array($result))
  {
    echo "<tr>";
	echo "<td>" . $row['place'] . "</td>";   
	echo "<td>" . $row['first_name'] . "</td>";
	echo "<td>" . $row['last_name'] . "</td>";
	echo "<td>" . $row['time'] . "</td>";
	echo "<td>" . $row['pace'] . "</td>";
	echo "<td>" . $row['city'] . "</td>";
	echo "<td>" . $row['state'] . "</td>";
    echo "</tr>";
  
}
echo "</table>";

mysqli_close($con);
?>
<a href="form.php">form</a> 
