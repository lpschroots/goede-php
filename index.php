<?php
date_default_timezone_set("Europe/Amsterdam");
$date = date("H:i");
$hour = date('H');
$minute = date('i');

	if ($hour <= 11.59){
		$greeting = "Goede morgen!";
		$time = "morning";
	} elseif ($hour <= 17.59){
		$time = "afternoon";
		$greeting = "Goede middag!";
	} elseif ($hour <= 23.59){
		$time = "evening";
		$greeting = "Goede avond!";
	} elseif ($hour <= 5.59){
		$time = "night";
		$greeting = "Goede nacht!";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welkom!</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body class="<?=$time?>">

<h1><?=$greeting?></h1>
<p>Het is nu <?=$date?></p>

</body>
</html>