<?php
	/**
	* SkeleAPI - Base Controller Object
	*
	* Any methods used by all controllers.
	*
	* @category SkeleAPI
	* @package Controller
	* @subpackage Base
	* @see /api/load.php For all app tags
	* @uses \Slim\Slim Slim Framework
	* 
	*/
	
	namespace Controller;

	class Base {	
		public function __construct() {
			$this->app = \Slim\Slim::getInstance();
		}
	}
?>