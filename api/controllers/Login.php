<?php
	namespace Controller;
	use \Model\User as UserModel;

	/**
	* SkeleAPI - Login Controller Object
	*
	* Login Object & Methods
	*
	* @category SkeleAPI
	* @package Controller
	* @subpackage Login
	* @see /api/load.php For all app tags
	* @uses \Slim\Slim Slim Framework
	* 
	*/

	class Login extends \Controller\Base {	

		function __construct() {
			parent::__construct();
			$this->userModel = new UserModel();
		}

		/**
	 	* METHOD: login   
	 	* @uses   string $_POST['email']  Form Post username   
	 	* @uses   string $_POST['pass']   Form Post password   
	 	* @return array                   Session Key or Error Response
	 	*/
		public function login() {

			$code = 200;
			$post = $_POST;
			$user = $this->userModel->login($post['email']);
			if(!$user) {
				//no user record
				$result['error'] = 'email'; 
				$code = 403;

			} else if($post['pass'] != $user['password']) {
				//user record, wrong password
				$result['error'] = 'password'; 
				$code = 403;

			} else if($post['pass'] == $user['password']) {

				//user confirmed, set auth key
				try {
					$result['auth_key'] = hash('sha256', $user['email'] + time());
					$result['id'] = $user['id'];

					$this->userModel->update($result['id'], array('auth_key' => $result['auth_key']));
					
					$_SESSION['session_id'] = $result['id'];
					$_SESSION['session_token'] = $result['auth_key'];

				} catch(Exception $e) {
					$result['error'] = $e; 
					$code = 403;
				}
			}

			$data = array('result' => $result);
			$this->app->render('', $data, $code);
		}

		/**
	 	* METHOD: logout
	 	* @return array      Success or Error Response
	 	*/
	 	public function logout() {

			$code = 200;

			//destroy session, auth
			try {
				session_destroy();
				$this->userModel->update($_SESSION['session_id'], array('auth_key' => ''));
				$result['success'] = 'logged_out';

			} catch(Exception $e) {
				$result['error'] = $e; 
				$code = 403;
			}

			$data = array('result' => array($result));
			$this->app->render('', $data, $code);
		}
	}
?>