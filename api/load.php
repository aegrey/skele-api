<?php
	require __DIR__ . '/../vendor/autoload.php';
	require 'config.php';

	use Api\ApiView;
	use Api\Config;

	//Initiate Slim
	$app = new \Slim\Slim(array(
		 'debug' => TRUE
		,'view' => new Api\ApiView()
	));

	require 'routes.php';

	$app->run();
?>
