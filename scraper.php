<?php
	
	error_reporting(0);
	$city=$_GET["city"];

	$city=str_replace(" ","",$city);

	$contents=file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");
	//$code= '3 Day (.*?) Summary'; 
	preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</s',$contents,$matches);
	echo $matches[1];

?>