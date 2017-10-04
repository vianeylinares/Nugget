<?php
	// Database Constants
	define("DB_SERVER", "localhost");
	define("DB_USER", "nugget_db");
	define("DB_PASS", "armadillo123@");
	define("DB_NAME", "nugget_db");
define("DB_ID", "107");define("DB_TABLE", "pruebaaurora");define("DB_EMAIL", "cupones@click-mx.com");	
	
	// 1. Create a database connection
	$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	
	if (!$connection) {
		die("Database connection failed: " . mysqli_error());
		
	}
	
	
?>
