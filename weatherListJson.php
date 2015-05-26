<?php
/*****************************
*JSON web service
*parameters: startDay and dayOffset
*
******************************/
//echo phpinfo();
 header("Access-Control-Allow-Origin: *");
function printRow($data) {
  echo "<td>", $data, "</td>";
  }

function f2c($f) {
  return ((5/9)*($f-32));
}
$offset = 1;
//$offset = $_REQUEST["offset"];
//$limit = $_REQUEST["limit"];
$startDay = $_REQUEST["startDay"];
$endDay = $startDay + $_REQUEST["dayOffset"];
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

//toggle between detailed query if less than 9 days or return max temp if longer date range.
if ($endDay < 9) {
	$results = $db->query("select * from archive WHERE datetime > strftime('%s','now', '-" . $endDay . " day') 
			AND datetime < strftime('%s','now', '-" . $startDay ." day') ");
} else {
	$results = $db->query("select dateTime, windSpeed, max(windGust) as windGust, max(outTemp) as outTemp from archive
		 WHERE datetime > strftime('%s','now', '-" . $endDay . " day') 
		AND datetime < strftime('%s','now', '-" . $startDay ." day') GROUP BY date(datetime,'unixepoch','localtime') ");
}

while ($row = $results->fetchArray()) {
//    var_dump($row);

     $date = date("Y/m/d g:i a",$row["dateTime"]);
	//$date = date("g:i",$row["dateTime"]);
      $outTemp =  round(f2c($row["outTemp"]),2);
      $windSpeed =  round($row["windSpeed"]);
      $windGust = round($row["windGust"]);
//    echo $windGust,", "; 
	$returnValue[] = array("date"=>$date, "outTemp"=>$outTemp, "windGust"=>$windGust);
}
	// Send back request in JSON format
	echo json_encode($returnValue);  

$db->close();
?>


