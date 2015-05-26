<!--//<style type="text/css" media="screen">@import "weewx/mobile.css";</style>-->
<?php
//echo phpinfo();

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

$results = $db->query('SELECT * FROM archive ORDER BY dateTime  DESC LIMIT 10');
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
?>

</table>
