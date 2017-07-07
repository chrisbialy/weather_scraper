<?php

$city=$_GET['city'];

$city=str_replace(" ","", $city);

$contents=file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");
													// 	/s" multiline
preg_match('/3 Day Weather Forecast Summary:<\/b>(.*?)<\/span></s', $contents,$matches);

//preg_match('/3 Day Weather Forecast Summary:<\/b>(.*?)Summary</s', $contents,$matches);

echo $matches[1];



?>

