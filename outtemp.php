<?php
$con=mysqli_connect("localhost","root","password","test");

// Check connection
if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM weather  ORDER BY time DESC limit 20");

echo "<table border='1'>
<tr>
<th>Time</th>
<th>Temp</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
    echo "<tr>";
	echo "<td>" . $row['time'] . "</td>";   
	echo "<td>" . $row['temp'] . "</td>";
    echo "</tr>";
  
}
echo "</table>";

mysqli_close($con);
?>
<a href="form.php">form</a> 
