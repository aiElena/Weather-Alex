<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>html 5</title>
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

<?php		
$city = $_REQUEST['city'];
if($city!=0){ 
 $url = "http://api.openweathermap.org/data/2.5/weather?id=".$city."&lang=en&units=metric&appid=853437dd97c1de13d607d8ea9a4cbae4"; 
  $contents = file_get_contents($url);
  echo $contents;
}
echo '<br>';
if($city == '706483'){
	echo '<div id="map_canvas">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d164153.52229183938!2d36.14574331499669!3d49.99450702726504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a09f63ab0f8b%3A0x2d4c18681aa4be0a!2z0KXQsNGA0YzQutC-0LIsINCl0LDRgNGM0LrQvtCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0Yw!5e0!3m2!1sru!2sua!4v1530715382183" width="400" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>';
}
if($city == '703448'){
	echo '<div id="map_canvas">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1303187.57583318!2d29.592658282788225!3d50.3611796863133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce5dfc458af7%3A0xa6e00aaf7b205d07!2z0JrQuNC10LLRgdC60LDRjyDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1sru!2sua!4v1530715842118" width="400" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
		  </div>';
}
if($city == '688533'){
	echo  '<div id="map_canvas">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45530.49942588019!2d34.12511162745886!3d44.50171064983488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4094c9077c8d204b%3A0x7c5f808a64d487ae!2z0K_Qu9GC0LAgOTg2MDA!5e0!3m2!1sru!2sua!4v1530716001390" width="400" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
		  </div>';
}
?>
	</body>
</html>

