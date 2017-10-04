<?php
	// Database Constants
	define("DB_SERVER", "localhost");
	define("DB_USER", "nugget_db");
	define("DB_PASS", "armadillo123@");
	define("DB_NAME", "nugget_db");
	dbid
	
	
	
	
	// 1. Create a database connection
	$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	
	if (!$connection) {
		die("Database connection failed: " . mysqli_error());
		
	}
	
	
?>
