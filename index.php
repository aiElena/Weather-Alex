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
$city = (int)$_REQUEST['city'];
if($city!=0){
   
 $url = "http://api.openweathermap.org/data/2.5/weather?id=".$city."&lang=en&units=metric&appid=853437dd97c1de13d607d8ea9a4cbae4"; 
  $contents = file_get_contents($url);
  echo $contents;

}
?>
	</body>
</html>
