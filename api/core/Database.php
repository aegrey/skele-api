<?php
	namespace Api;

	use Api\Config;

	//Config Object
	class Database {	
		
		public $conn;

		private function __construct() {
			$host = Config::getPrivate('db.host');
			$user = Config::getPrivate('db.user');
			$pass = Config::getPrivate('db.pass');
			$data = Config::getPrivate('db.database');
			$port = Config::getPrivate('db.port');
			$char = Config::getPrivate('db.char');
			$dsn = 'mysql:host=$host;port=$port;dbname=$data;charset=$char';

			try {
				$this->conn = new PDO($dsn, $user, $pass);
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch(PDOException $e) {
				error_log($e->getMessage(), 0);
			}
		}

		public function getConn() {
			return $this->conn;
		}

	}
?>