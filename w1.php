<!--//<style type="text/css" media="screen">@import "weewx/mobile.css";</style>-->
<?php
//echo phpinfo();
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

$results = $db->query('SELECT * FROM archive ORDER BY dateTime  DESC LIMIT 1');
while ($row = $results->fetchArray()) {
//    var_dump($row);
      echo "<tr><td>";
      echo date("Y-m-d g:i a",$row["dateTime"]), "</td><td>";
      echo   round($row["outTemp"],2), "</td><td>";
      echo round($row["windSpeed"]), "</td><td>";
      echo round($row["windGust"]);

      echo "</td></tr>";
      
}
$db->close();
?>

</table>
