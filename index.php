<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>html 5</title>
		<link href="css/styles.css" rel="stylesheet">	
	</head>
	<body>
		<h1>Список</h1>

		<?php
		$url = "http://api.openweathermap.org/data/2.5/weather?id=706483&lang=en&units=metric&appid=853437dd97c1de13d607d8ea9a4cbae4";
		$contents = file_get_contents($url);

		echo ($contents);
		?>

	</body>
</html>
