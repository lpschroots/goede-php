<?php
date_default_timezone_set("Europe/Amsterdam");
$date = date("H:i");
$hour = date('H');
$minute = date('i');

	if ($hour <= 11.59){
		$greeting = "Goede morgen!";
		$image = "backgrounds/morning.png";
	} elseif ($hour <= 17.59){
		$greeting = "Goede Middag!";
		$image = "backgrounds/afternoon.png";
	} elseif ($hour <= 23.59){
		$image = "backgrounds/evening.png";
		$greeting = "Goede avond!";
	} elseif ($hour <= 5.59){
		$image = "backgrounds/night.png";
		$greeting = "Goede nacht!";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welkom!</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body style="background-size: 90%; background-image: url(<?php echo $image?>)">

<h1><?=$greeting?></h1>
<h2>Het is nu <?=$date?></h2>

</body>
</html>