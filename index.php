<!DOCTYPE html>
<html>
<head>
	<title>Goede dag!</title>
</head>
<body>

<?php 
date_default_timezone_set("Europe/Amsterdam");
$time = date("G:i");

	if ($hour >= "6" && $time <= "12"){
		echo "Good Morning!";
		$image = "backgrounds/morning.png"
	} else if ($hour >= "12" && $time <= "18"){
		echo "Good Afternoon!";
		$image = "backgrounds/afternoon.png"
	} else if ($hour >= "18" && $time <= "23"){
		echo "Good Evening!";
		$image = "backgrounds/evening.png"
	} else ($hour >= "23" && $time <= "6"){
		echo "Good Night!";
		$image = "backgrounds/night.png"
	}
?>

</body>
</html>