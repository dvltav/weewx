<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
       
            <title> Belmont, CA Weather</title>
            <meta http-equiv="refresh" content="120">
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
<style type="text/css" media="screen">@import "tablet.css";</style>
</head>

<body>
<center>
<p class="data">25-May-2015 17:00 </p>

<div>
    <table class="readings"> 
	
    	<tr>            
		<td  class="dataBig" >16.0&#176;C </td>
	</tr>
    <tr> <td>
        <table  align="center"><tr >
        <td class="data" >Min: 11.1&#176;C at 06:23</td><td class="data">Max: 18.0&#176;C at 14:47</td>
       </tr> </table>
        </td>
    </tr>
        <tr>
		<td class="dataBigWind">26 mph</td>
        
	</tr>
	<tr>
		<td class="data">Max wind 33 mph from 270&#176; at 15:31 </td>
	</tr>
        <tr>
                <td  class="dataBig" >21.1&#176;C </td>
        </tr>
    <tr> <td>
        <table  align="center"><tr >
        <td class="data" >Min: 19.9&#176;C </td><td class="data">Max: 21.6&#176;C</td>
       </tr> </table>
        </td>
    </tr>
	<tr>
		<td class="data">Rain today 0.00 in </td>
	</tr> 
    </table>
    <div>
<!--
<img src="./Belmont, CA Weather_files/daytempdew.png">
<img src="./Belmont, CA Weather_files/daywind.png">
 
</div>
</center>
<br>
<a href="http://radar.weather.gov/ridge/lite/N0R/MUX_loop.gif">Radar Loop</a>
<br>
<a href="http://radar.weather.gov/ridge/radar.php?product=NCR&rid=mux&loop=yes">Radar Loop NOAA</a>
<br>
<a href="http://192.168.1.140/weewx/">more detail</a>
 -->
<script>
	var temp = "8.6&#176;C";
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

</body></html>

