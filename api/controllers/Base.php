<?php
	namespace Controller;

	class Base {	
		public function __construct() {
        	$this->app = \Slim\Slim::getInstance();
    	}
	}
?>