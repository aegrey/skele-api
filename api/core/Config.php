<?php
	/**
	* SkeleAPI - Config Object
	*
	* Controls configuration data
	* CHANGES: No changes required.
	*
	* @category SkeleAPI
	* @package Api
	* @subpackage Config
	* @see /api/load.php For all app tags
	* @uses \Slim\Slim Slim Framework
	* @todo Finish object/method/var documentation
	* 
	*/

	namespace Api;

	class Config {	

		static private $private;
		static private $public;

		public function addPrivate($key, $val) {
			self::$private[$key] = $val;
		}

		public function addPublic($key, $val) {
			self::$public[$key] = $val;
		}

		public function getPrivate($key) {
			if(isset(self::$private[$key])) {
				return self::$private[$key];
			} else {
				return false;
			}
		}

		public function getPublic($key) {
			if(isset(self::$public[$key])) {
				return self::$public[$key];
			} else {
				return false;
			}
		}
	}
?>