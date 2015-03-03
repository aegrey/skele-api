<?php
	namespace Api;

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

	class Config {	

		/** @var array $private private config array */
		static private $private;
		/** @var array $public  public config array */
		static private $public;

		/**
	 	* METHOD: addPrivate
	 	* Sets private config item
	 	*
	 	* @param  string $key Config Key
	 	* @param  string $val Config Value
	 	* @return void
	 	*/
	 	public function addPrivate($key, $val) {
			self::$private[$key] = $val;
		}

		/**
	 	* METHOD: addPublic
	 	* Sets public config item
	 	*
	 	* @param  string $key Config Key
	 	* @param  string $val Config Value
	 	* @return void
	 	*/
	 	public function addPublic($key, $val) {
			self::$public[$key] = $val;
		}

		/**
	 	* METHOD: getPrivate
	 	* Gets private config item
	 	*
	 	* @param  string $key Config Key
	 	* @return string      Config item value
	 	*/
	 	public function getPrivate($key) {
			if(isset(self::$private[$key])) {
				return self::$private[$key];
			} else {
				return false;
			}
		}

		/**
	 	* METHOD: getPublic
	 	* Gets public config item
	 	*
	 	* @param  string $key Config Key
	 	* @return string      Config item value
	 	*/
	 	public function getPublic($key) {
			if(isset(self::$public[$key])) {
				return self::$public[$key];
			} else {
				return false;
			}
		}
	}
?>