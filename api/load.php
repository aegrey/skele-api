<?php
	/**
	* SkeleAPI 
	*
	* Lightweight API Skeleton using Slim.
	* CHANGES: No changes required.
	*
	* @author AEGrey <ae@mesmergroup.net>
	* @license http://opensource.org/licenses/GPL-3.0 GNU General Public License, version 3
	* @link https://github.com/aegrey/skeleapi GitHub Repository for package.
	* @category SkeleAPI
	* @package /api/load.php
	* @version 0.1
	* @uses \Slim\Slim Slim Framework
	* @uses \Api\ApiView to load custom view for slim init
	* @uses \Api\Config to access variable 
	* @todo Rewrite as class, move to core
	* 
	*/

	require __DIR__ . '/../vendor/autoload.php';
	require 'config.php';

	use Api\ApiView;
	use Api\Config;

	//Initiate Slim Application
	$app = new \Slim\Slim(array(
		'debug' => Config::getPublic('api.debug'),
		'view' => new Api\ApiView()
	));

	//Load Routes
	require 'routes.php';

	//Start Application
	$app->run();
?>
