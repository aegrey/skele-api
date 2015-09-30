<?php
	namespace Model;

	/**
	* SkeleAPI - Example User Model
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
		
		private $table     = "users";
		private $joinTable = "users_friends"; //allows for a 2nd relational table

		public  $publicFields  = array('first_name', 'last_name', 'email', 'phone');
		private $privateFields = array('password', 'auth_key');
		private $loginFields   = array('id', 'email', 'password', 'auth_key');

		public $joinTableFields = array('user_id', 'friend_id');

		/**
		* ------
		* GROUP: Retrieve Methods
		* For retrieving user records
		*/

		/**
	 	* METHOD: get
	 	* Retrieve a record (based on defined fields)
	 	* @param  int   $id  ID of record
	 	* @return array      Record
	 	*/
		public function get($id) {
			$sql = "SELECT ". implode(", ", $this->publicFields) ." FROM ". $this->table ." WHERE id = " . $id;
			$query = $this->conn->query($sql);			
			return $query->fetch();
		}

		/**
	 	* METHOD: auth
	 	* Check auth
	 	* @param  int   $id  ID of record
	 	* @return array      Auth Key
	 	*/
		public function auth($id) {
			$sql = "SELECT ". implode(", ", $this->loginFields) ." FROM ". $this->table ." WHERE id = " . $id;
			$query = $this->conn->query($sql);			
			return $query->fetch();
		}

		/**
	 	* METHOD: login
	 	* Check login
	 	* @param  array  $email  Email
	 	* @return array          User Data
	 	*/
		public function login($email) {
			$sql = "SELECT ". implode(", ", $this->loginFields) ." FROM ". $this->table ." WHERE email = '" . $email . "'";
			$query = $this->conn->query($sql);			
			return $query->fetch();
		}

		/**
	 	* METHOD: getFriends
	 	* Retrieve a users friends (custom method w/ hardcoded query)
	 	* @param  int   $id  ID of user
	 	* @return multi-array  All friends
	 	*/
		public function getFriends($id) {
			$sql = "SELECT ". implode(", ", $this->joinTableFields) ." FROM ". $this->joinTable ." WHERE user_id = " . $id;
			$query = $this->conn->query($sql);			
			return $query->fetchAll();
		}

		/**
		* ------
		* GROUP: Create Methods
		* For creating new user records and community associations
		*/

		/**
	 	* METHOD: add
	 	* Adds a new record
	 	* @param  array   $record  Record to add (key == column name)
	 	* @return string  id  new ID || error  error message
	 	*/
	 	public function add($record) {
	 		$fields = array_merge($this->publicFields, $this->privateFields);
	 		$sql = "INSERT INTO ". $this->table ." (".implode(", ", $fields).") VALUES (:".implode(", :", $fields).")";
	 		$query = $this->conn->prepare($sql);

	 		$data = array();

	 		foreach($fields as $field) {
	 			$data[':'.$field] = $record[$field]; 
	 		}

	 		return $query->execute($data);
		}

		/**
		* ------
		* GROUP: Update Methods
		* For updating user records
		*/

		/**
	 	* METHOD: update
	 	* update based on fields sent, method for all updates
	 	* @param  int   $id  ID of record to update
	 	* @param  array  $record fields to be updated & values
	 	* @return string  result  success or error
	 	*/
	 	public function update($id, $record) {
	 		
	 		$data = array();

	 		$sql = "UPDATE " . $this->table . " SET";
	 		foreach($record as $key => $value) {
	 			$sql = $sql . " " . $key . " = :" . $key . ",";
	 			$data[':'.$key] = $value;
	 		}
	 		$sql = rtrim($sql, ",");
	 		$sql = $sql . " WHERE id = " . $id;
	 		$query = $this->conn->prepare($sql);
	 		return $query->execute($data);
	 	}

	 	/**
		* ------
		* GROUP: Delete Methods
		* For deleting users and community associations
		*/

		/**
	 	* METHOD: delete
	 	* deletes user and calls deleteCommunity
	 	* @param  int   $id  ID of record to delete
	 	* @return string  result  success or error
	 	*/
		public function delete($id) {

			$sql = "DELETE FROM " . $this->table . " WHERE id = :id";
			$query = $this->conn->prepare($sql);
			return $query->execute(array(":id" => $id));

		}
	}
?>