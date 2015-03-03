<?php
	/**
	* SkeleAPI - Environment Config
	*
	* Loads correct config file based on environment
	* CHANGES: Change $devHost
	* ADD: Any additional environments.
	* ON ADD: Add hosts as variables under $devHost, change IF to SWITCH, add additional environment case(s).
	* EXAMPLE:
	* <code>
	*	switch($host) {
	*		case 'localhost':
	*			require 'config.dev.php';
	*			break;
	*		default:
	*			require 'config.prod.php';
	*	}
	* </code>
	*
	* @category SkeleAPI
	* @package /api/config.php
	* @see /api/load.php For all app tags
	* @uses \Slim\Slim Slim Framework
	* @uses \Api\Config Controls config values
	* 
	*/

	//Set Environment(s)
	$host = $_SERVER['HTTP_HOST'];
	$devHost = 'localhost';

	//Load correct config based on host
	if($host == $devHost) {
		require 'config.dev.php';
	} else {
		//default to prod
		require 'config.prod.php';
	}
?>
