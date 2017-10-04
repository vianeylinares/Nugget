<?php

	include_once("include/connections.php");
	
	$score = $_GET['clickScore'];
	$idRate = $_GET['idRate'];
	$idDevice = $_GET['idDevice'];
	$userPosition = $_GET['userPosition'];
	
	date_default_timezone_set("America/Tijuana");
	$today_date = date("m-d-Y");
	$current_time = date("H:i:s");
	
	$sql = "INSERT INTO " . DB_TABLE . "_ratings (idR, rating, date, time, device, page_popup)
			VALUES ({$idRate}, {$score}, '{$today_date}', '{$current_time}', '{$idDevice}', '{$userPosition}')";
	
	mysqli_query($connection, $sql);
	
	mysqli_close($connection);
?>