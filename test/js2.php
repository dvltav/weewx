<?php
$value = array("outTemp" => 22,"windGust" => 10);
header('Content-Type: application/javascript');


//*************MYSQL*****************************
$con=mysqli_connect("localhost","root","password","test");

$result = mysqli_query($con,"SELECT * FROM weather  ORDER BY time DESC limit 20"
		       );

$row = mysqli_fetch_array($result);

//echo "" . $row['temp'] . "";

$temp = "" . $row['temp'] . "";

$len = strlen($len);

echo substr($temp,0,$len-3) . "." . substr($temp,$len-3,1) . " C";

mysqli_close($con);

//***************SQLite*********************************
function printRow($data) {
  echo "<td>", $data, "</td>";
  }

function f2c($f) {
  return ((5/9)*($f-32));
}

$i = 0;

echo "Open DB";
if(!class_exists('SQLite3'))
  die("SQLite 3 NOT supported.");

$db = new SQLite3('/var/lib/weewx/weewx.sdb');
echo "22222222";
   if(!$db){
	echo "Failed";
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }

echo "<table border='1' >";

$results = $db->query('SELECT * FROM archive ORDER BY dateTime  DESC');
while ($row = $results->fetchArray()) {
//    var_dump($row);
  if ($i == 0) {
      echo "<tr style='background-color: #9bc4e2;'>";
      $i = 1;
  } else 
    {
      echo "<tr style='background-color: #0066FF;'>";
      $i = 0;
  }

      printRow(date("Y-m-d g:i a",$row["dateTime"]));
      printRow( round(f2c($row["outTemp"]),2));
      printRow( round($row["windSpeed"]));
      printRow(round($row["windGust"]));
      echo "</tr>";
      
}
$db->close();



exit(json_encode($value));
?>