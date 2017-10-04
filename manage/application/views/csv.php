<?php

	echo "something";

	// tell the browser we want to save it instead of displaying it
    header('Content-Disposition: attachement; filename="csv.csv";');
    // make php send the generated csv lines to the browser
    //fpassthru($f);
	
	
?>