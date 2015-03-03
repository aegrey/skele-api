<?php
	// SET DEV ENVIRONMENT
	// if multiple environments, add host vars & change if to switch.
	$devHost = 'localhost';

	//LOAD CONFIG BASED ON CURRENT ENVIRONMENT
	if($_SERVER['HTTP_HOST'] == $devHost) {
		require 'config.dev.php';
	} else {
		//defaulting to prod
		require 'config.prod.php';
	}
?>
