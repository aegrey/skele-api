<?php
	namespace Api;
	use Api\Config;

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

	class Database {	
		
		/** @var object $dbconn Database connection object */
		protected $dbconn;

		public function __construct() {}

		/**
	 	* METHOD: openConn
	 	* Opens the database connection
	 	*/
		protected function openConn() {
			$dbhost = Config::getPrivate('db.host');
			$dbuser = Config::getPrivate('db.user');
			$dbpass = Config::getPrivate('db.pass');
			$dbname = Config::getPrivate('db.database');
			$dbport = Config::getPrivate('db.port');
			$dbchar = Config::getPrivate('db.char');
			$dsn = 'mysql:host='.$dbhost.';port='.$dbport.';dbname='.$dbname;

			try {
				$this->dbconn = new \PDO($dsn, $dbuser, $dbpass);
				$this->dbconn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
				$this->dbconn->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
			} catch(PDOException $e) {
				error_log($e->getMessage(), 0);
			}
		}

		/**
	 	* METHOD: getConn
	 	* Returns the database connection
	 	* @return object $this->dbconn Database Connection
	 	*/
	 	public function getConn() {
			if(!isset($this->dbconn)) {
				$this->openConn();
			}
			return $this->dbconn;
		}

		/**
	 	* METHOD: closeConn
	 	* Closes the database connection
	 	* @return void
	 	*/
	 	public function closeConn() {
			$this->dbconn = null; 
		}

	}
?>