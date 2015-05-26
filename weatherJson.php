<?php
//echo phpinfo();

function printRow($data) {
  echo "<td>", $data, "</td>";
  }

function f2c($f) {
  return ((5/9)*($f-32));
}
$offset = 1;
$offset = $_REQUEST["offset"];
$i = 0;

if(!class_exists('SQLite3'))
  die("SQLite 3 NOT supported.");

$db = new SQLite3('/var/lib/weewx/weewx.sdb');
/*   
if(!$db){
	echo "Failed";
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }
*/

$results = $db->query('SELECT * FROM archive ORDER BY dateTime  DESC LIMIT 1 OFFSET ' . $offset );
while ($row = $results->fetchArray()) {
//    var_dump($row);

      $date = date("Y-m-d g:i a",$row["dateTime"]);
      $outTemp =  round(f2c($row["outTemp"]),2);
      $windSpeed =  round($row["windSpeed"]);
      $windGust = round($row["windGust"]);
     
	$returnValue = array("date"=>$date, "outTemp"=>$outTemp, "windGust"=>$windGust);

	// Send back request in JSON format
	echo json_encode($returnValue);  
}
$db->close();
?>


