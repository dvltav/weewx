

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
         "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!--

  This is a phone-formatted summary page based on examples posted
  to the wview Google Group, and salted to taste for weewx.

  It takes a full screen on my Verizon Fascinate (Samsung Galaxy S)
  and its predecessor(s) were reportedly developed for a Apple iPhone.

  vince@skahan.net - 1/16/2010

-->


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Belmont, CA Weather</title>
<meta name="viewport" content="width=320; initial-scale=1.0; maximum-scale=1.0; user-scalable=1;"/>
<script type="application/x-javascript">

    if (navigator.userAgent.indexOf('iPhone') != -1)
    {
        addEventListener("load", function()
        {
        setTimeout(hideURLbar, 0);
        }, false);
    }

    function hideURLbar()
    {
        window.scrollTo(0, 1);
    }
	
</script>
<style type="text/css" media="screen">@import "mobile.css";</style>
</head>

<body>
<center>
<p style="font-size: 12px; color: black; text-align: center;">25-May-2015 17:00 </p>

<div>
    <table class="readings"> 
	<tr>            
		<td style="text-align: center;">Temp:</td>
		<td style="text-align: center;">Wind Speed</td>
	</tr>
    <tr>            
		<td id="outTemp" class="dataBig" style="color: black"> 16.0&#176;C  

<?php include '../outTempOne.php' ?>


 </td>
		<td class="dataBig">  12 mph (WSW) 26 mph </td>
	</tr>
      <tr>
                <td>Inside Temp:</td><td class="data"> 21.1&#176;C </td>
        </tr>
        <tr class="alt">
                <td>High Temp:</td><td class="data"> 18.0&#176;C at 14:47 </td>
        </tr>
        <tr>
                <td>Low Temp:</td><td class="data"> 11.1&#176;C at 06:23 </td>
        </tr>
        <tr class="alt">
                <td><a href="daywind.png">Wind Speed:</a></td><td class="data"> 12 mph (WSW)</td>
        </tr>
        <tr>
                <td>High Wind Speed:</td><td class="data"> 33 mph at 15:31 </td>
        </tr>

        <tr class="alt">
                <td><a href="daytempchill.png">Heat Index / Wind Chill:</a></td><td class="data"> 16.0&#176;C / 16.0&#176;C </td>
        </tr>
        <tr>
                <td>Humidity:</td><td class="data"> 75% </td></tr>
        </tr>
        <tr class="alt">
                <td><a href="dayrain.png">Rainfall:</a></td><td class="data"> 0.00 in </td>
        </tr>
        <tr>
                <td>High Rain Rate:</td><td class="data"> 0.00 in/hr at 00:00 </td>
        </tr>

    </table>
</div>
<div>
<a href='/weewx/'>
<img src="daytempdew.png">
<img src="daywind.png">
<img src="weektempdew.png">
<img src="weekwind.png">
</a>
</div>
<script>
	var temp = "16.0&#176;C";
	console.log("char at 3  " + temp.charAt("2") );
	if  (temp.charAt("2") == "." )
	{
	temp=temp.substring(0,2); 
	} else
	{
		temp=temp.substring(0,1);
	}
	console.log("temp " + temp);
	
	node = document.getElementById('outTemp');
 
	if (temp > 20)
		{
		node.style.backgroundColor = '#FB081C';
		} 
	else if (temp > 10 )
		{
		node.style.backgroundColor = '#3BDB78';
		}
	else 
		{
		console.log("else");
		node.style.backgroundColor = '#3FEFDA';
		}
</script>
</center>
<br>
<a href='http://radar.weather.gov/ridge/lite/N0R/MUX_loop.gif'>Radar Loop</a>
<br>
<a href='http://radar.weather.gov/ridge/radar.php?product=NCR&rid=mux&loop=yes'>Radar Loop NOAA</a>
<br>
<a href='/weewx/'>more detail</a>
</body>
</html>




