<?php
	namespace Controller;
	use \Model\User as UserModel;

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

	class User extends \Controller\Base {	

		/**
	 	* METHOD: get
	 	* @param  int   $id  ID of user
	 	* @return array      User Data or Error Response
	 	*/
		public function get($id) {
			
			$user = new UserModel();
			$data = array(
				'result' => $user->get($id)
			);
			
			$this->app->render('', $data, 200);
		}

		/**
	 	* METHOD: add
	 	* @uses   string $_POST['email'] Form Post e-mail     
	 	* @uses   string $_POST['user']  Form Post username   
	 	* @uses   string $_POST['pass']  Form Post password 
	 	* @uses   string $_POST['phone'] Form Post phone number     
	 	* @return array                  Success or Error Response
	 	*/
	 	public function add() {

		}
		
		/**
	 	* METHOD: edit
	 	* @uses   string $_POST['email'] Form Post e-mail     
	 	* @uses   string $_POST['user']  Form Post username   
	 	* @uses   string $_POST['pass']  Form Post password 
	 	* @uses   string $_POST['phone'] Form Post phone number     
	 	* @return array                  Success or Error Response
	 	*/
	 	public function edit() {
			
		}

		/**
	 	* METHOD: delete
	 	* @param  int   $_POST['id']  ID of user
	 	* @return array      Success or Error Response
	 	*/
		public function delete() {
			
		}

		/**
	 	* METHOD: login   
	 	* @uses   string $_POST['user']  Form Post username   
	 	* @uses   string $_POST['pass']  Form Post password   
	 	* @return array                  Session Key or Error Response
	 	*/
		public function login() {
			
		}

		/**
	 	* METHOD: logout
	 	* @param  int   $id  ID of user
	 	* @return array      Success or Error Response
	 	*/
	 	public function logout($id) {
			
		}

		/**
	 	* METHOD: getAuth
	 	* @param  int    $id     ID of user
	 	* @param  string $token  App Token
	 	* @return array          Success or Error Response
	 	*/
		public function getAuth($id, $token) {
			
		}
	}
?>