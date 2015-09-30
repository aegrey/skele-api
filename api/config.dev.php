<?php
	/**
	* SkeleAPI - Development Config
	*
	* Sets all relevant config for the development environment.
	* CHANGES: Do not remove current keys. Change values to your environment variables. 
	* ADD: Add any new config if required for your API.
	* EXAMPLES: 
	* Private config items: <code>Config::addPrivate('key', 'val');</code>
	* Public config items: <code>Config::addPublic('key', 'val');</code>
	*
	* @category SkeleAPI
	* @package /api/config.dev.php
	* @see /api/load.php For all app tags
	* @uses \Slim\Slim Slim Framework
	* @uses \Api\Config Controls config values
	* 
	*/

	use Api\Config;

	Config::addPrivate('db.host', 'localhost');
	Config::addPrivate('db.user', 'root');
	Config::addPrivate('db.pass', '');
	Config::addPrivate('db.database', '');
	Config::addPrivate('db.port', '');
	Config::addPrivate('db.char', 'UTF-8');

	Config::addPublic('api.name', 'API Dev');
	Config::addPublic('api.url', 'http://localhost');
	Config::addPublic('api.debug', TRUE);
?>
