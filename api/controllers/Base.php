<?php
	namespace Controller;

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
	
	class Base {	
		
		/**
	 	* Constructor
	 	* Assigns Slim app instance
	 	* @return void
	 	*/
	 	public function __construct() {
			
			/** @var object $this->app Application Instance */
			$this->app = \Slim\Slim::getInstance();
		}
	}
?>