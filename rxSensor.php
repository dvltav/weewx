<?php
$con=mysqli_connect("localhost","root","password","test");

$result = mysqli_query($con,"SELECT * FROM sensor ORDER BY time DESC limit 20");

while ($row = mysqli_fetch_array($result)) {

    $temp = "" . $row['data'] . "";
    $time = $row['time'];

    //$len = strlen($len);
    echo substr($time,10,9) . "..... " .$temp/100 . "C"   . "<br>";

  }
//echo substr($temp,0,$len-3) . "." . substr($temp,$len-3,1) . " C";

mysqli_close($con);
?>

