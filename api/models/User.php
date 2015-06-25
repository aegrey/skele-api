<?php
	namespace Model;

	/**
	* SkeleAPI - User Model
	*
	* User Models
	*
	* @category SkeleAPI
	* @package Model
	* @subpackage User
	* @see /api/load.php For all app tags
	* @uses \Slim\Slim Slim Framework
	* 
	*/

	class User extends \Model\Base {	
		/**
	 	* METHOD: get
	 	* @param  int   $id  ID of user
	 	* @return array      Full User Record
	 	*/
		public function get($id) {
			$sql = "SELECT * FROM users WHERE id = " . $id;
			$query = $this->conn->query($sql);
			return $query->fetch();
		}

	}
?>