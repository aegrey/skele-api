<?php
	namespace Api;

	//Config Object
	class Config {	
		
		//set holders for both private and public config items
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