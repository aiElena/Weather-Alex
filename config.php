<?php
function coord($city){
  $url = "http://api.openweathermap.org/data/2.5/weather?id=".$city."&lang=en&units=metric&appid=853437dd97c1de13d607d8ea9a4cbae4";
  $contents = file_get_contents($url);

  $clima=json_decode($contents);
  return [
    'lat' => $clima->coord->lat,
	'lon' => $clima->coord->lon,
	'name' => $clima->name,
	'date' => date("F j, Y, g:i a"),
	'temp' => $clima->temp_max,
	
  ];
}
?>