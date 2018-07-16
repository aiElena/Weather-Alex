<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>Список</title>
		<link href="css/style.css" rel="stylesheet">
		
	</head>
	<body>
		<h1>Список</h1>
		<section class="city">
			<form action="" method="GET">
				<select  name="city">
					<option>Выбрать</option>
					<option value="706483">Харьков</option>
					<option value="703448">Киев</option>
					<option value="688533">Ялта</option>
				</select>
				<input type="submit">
			</form>
		</section>
		<div id="map_canvas">
			
		</div>
<?php		
$city = $_REQUEST['city'];
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

if($city!=0){ 

  $clima=coord($city);
  
  ?>
		<div class="weather">
			<div class="weather_city"><?php echo $clima['name'];?></div>
			<div class="lat"><?php echo $clima['lat'];?></div>
			<div class="lon"><?php echo $clima['lon'];?></div>
			<div class="weather_date"><?php echo $clima['date']; ?></div>
			<div class="temp_max"><?php echo $clima['temp'];?></div>
			
		</div>
		<div id="map_canvas">
			<img src="https://www.mapquestapi.com/staticmap/v5/map?key=mAuUGJiI4qIdyLowNSA8ltquKNzGXFok&center=<?php echo $clima['lat'];?>,<?php echo $clima['lon'];?>&size=@2x" style="width: 400px; height: 400px;"/>	
		</div>
<?php }
 ?>

	</body>
</html>
