<?php
	namespace Controller;

	class User extends \Controller\Base {	

    	public function add() {

		}
		public function edit() {
			
		}
		public function delete() {
			
		}
		public function get() {
			
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