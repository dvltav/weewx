<?php
$con=mysqli_connect("localhost","root","password","test");

$result = mysqli_query($con,"SELECT * FROM weather  ORDER BY time DESC limit 20");

$row = mysqli_fetch_array($result);

//echo "" . $row['temp'] . "";

$temp = "" . $row['temp'] . "";

$len = strlen($len);

echo substr($temp,0,$len-3) . "." . substr($temp,$len-3,1) . " C";

mysqli_close($con);
?>

