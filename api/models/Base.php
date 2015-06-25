<?php
	namespace Model;
	use \Api\Database as db;

	/**
	* SkeleAPI - Base Model Object
	*
	* Any methods used by all models.
	*
	* @category SkeleAPI
	* @package Model
	* @subpackage Base
	* @see /api/load.php For all app tags
	* @uses \Api\Database Database Object
	* 
	*/
	
	class Base {	
		
		/** @var object $conn Database connection object */
		public $conn;

		/**
	 	* Constructor
	 	* Calls database connection
	 	* @return void
	 	*/
	 	public function __construct() {
			$db = new db;
			$this->conn = $db->getConn();
		}
	}
?>