<?php
	/**
	* SkeleAPI - Database Object
	*
	* Creates database connection instance. Database Changes should be made in environment config
	* CHANGES: No changes required.  
	* EXCEPT: Database other than MySQL being used - change PDO settings on line 35
	*
	* @category SkeleAPI
	* @package Api
	* @subpackage Database
	* @see /api/load.php For all app tags
	* @uses \Slim\Slim Slim Framework
	* @uses \Api\Config Database Config
	* @todo Finish object/method/var documentation
	* 
	*/

	namespace Api;

	use Api\Config;

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