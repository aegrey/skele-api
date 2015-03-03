<?php
	/**
	* SkeleAPI - User Controller Object
	*
	* User Object & Methods
	*
	* @category SkeleAPI
	* @package Controller
	* @subpackage User
	* @see /api/load.php For all app tags
	* @uses \Slim\Slim Slim Framework
	* 
	*/

	namespace Controller;

	class User extends \Controller\Base {	

		public function add() {

		}
		public function edit() {
			
		}
		public function delete() {
			
		}
		public function get() {
			
			//TEST DATA TO TEST FUNCTIONALITY
			$data = array(
				'result' => array(
					'message' => 'worked',
					'now' => 'go eat')
			);
			$this->app->render('', $data, 200);
		}
		public function login() {
			
		}
		public function logout() {
			
		}
		public function getAuth() {
			
		}
	}
?>