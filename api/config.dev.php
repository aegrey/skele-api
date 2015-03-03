<?php
	use Api\Config;

	Config::addPrivate('db.host', 'localhost');
	Config::addPrivate('db.user', 'root');
	Config::addPrivate('db.pass', '');
	Config::addPrivate('db.database', 'test');
	Config::addPrivate('db.port', '');
	Config::addPrivate('db.char', 'UTF-8');

	Config::addPublic('api.name', 'Test');
	Config::addPublic('api.url', 'http://localhost');
	Config::addPublic('api.debug', TRUE);
?>
