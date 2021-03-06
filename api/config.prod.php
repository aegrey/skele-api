<?php
	/**
	* SkeleAPI - Production Config
	*
	* Sets all relevant config for the production environment.
	* CHANGES: Do not remove current keys. Change values to your environment variables. 
	* ADD: Add any new config if required for your API.
	* EXAMPLES: 
	* Private config items: <code>Config::addPrivate('key', 'val');</code>
	* Public config items: <code>Config::addPublic('key', 'val');</code>
	*
	* @category SkeleAPI
	* @package /api/config.prod.php
	* @see /api/load.php For all app tags
	* @uses \Slim\Slim Slim Framework
	* @uses \Api\Config Controls config values
	* 
	*/

	use Api\Config;

	//ADD CONFIG - Private Vars
	Config::addPrivate('db.host', '');
	Config::addPrivate('db.user', '');
	Config::addPrivate('db.pass', '');
	Config::addPrivate('db.database', '');
	Config::addPrivate('db.port', '');
	Config::addPrivate('db.char', 'UTF-8');

	//ADD CONFIG - Public Vars
	Config::addPublic('api.name', 'API Prod');
	Config::addPublic('api.url', '');
	Config::addPublic('api.debug', FALSE);
?>
