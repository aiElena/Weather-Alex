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
					<option value="1">Выбрать</option>
					<option value="706483">Харьков</option>
					<option value="703448">Киев</option>
					<option value="688533">Ялта</option>
				</select>
				<input type="submit">
			</form>
		</section>
<?php
$url = "http://api.openweathermap.org/data/2.5/weather?id=706483&lang=en&units=metric&appid=853437dd97c1de13d607d8ea9a4cbae4";
$url1 = "http://api.openweathermap.org/data/2.5/weather?id=703448&lang=en&units=metric&appid=853437dd97c1de13d607d8ea9a4cbae4";
$url2 = "http://api.openweathermap.org/data/2.5/weather?id=688533&lang=en&units=metric&appid=853437dd97c1de13d607d8ea9a4cbae4";
$contents = file_get_contents($url);
$contents1 = file_get_contents($url1);
$contents2 = file_get_contents($url2);
	if (isset($_REQUEST['city']) and $_REQUEST['city'] == 1) {
		echo '';
	}
	if (isset($_REQUEST['city']) and $_REQUEST['city'] == 706483) {
		echo $contents;
	}
	if (isset($_REQUEST['city']) and $_REQUEST['city'] == 703448) {
		echo $contents1;
	}
	if (isset($_REQUEST['city']) and $_REQUEST['city'] == 688533) {
		echo $contents2;
	}
?>


	</body>
</html>
