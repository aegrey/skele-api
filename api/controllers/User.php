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

		function __construct() {
			parent::__construct();
			$this->userModel = new UserModel();
		}

		/**
	 	* METHOD: get
	 	* @param  int   $_SESSION  ID of user
	 	* @return array            User Data or Error Response
	 	* @todo Add try catch
	 	*/
		public function get($id) {
			$code = 200;
			$user = $this->userModel->get($id);

			if(!$user) {
				$user['error'] = 'no_result';
				$code = 403;
			}
			$data = array('result' => $user);
			$this->app->render('', $data, $code);
		}

		/**
	 	* METHOD: add
	 	* @uses   string $_POST['email']     Form Post e-mail     
	 	* @uses   string $_POST['user']      Form Post username   
	 	* @uses   string $_POST['password']  Form Post password 
	 	* @uses   string $_POST['phone']     Form Post phone number     
	 	* @return array                      Success or Error Response
	 	*/
	 	public function add() {

		}
		
		/**
	 	* METHOD: edit
	 	* @uses   string $_POST['email']     Form Post e-mail     
	 	* @uses   string $_POST['user']      Form Post username   
	 	* @uses   string $_POST['password']  Form Post password 
	 	* @uses   string $_POST['phone']     Form Post phone number     
	 	* @return array                      Success or Error Response
	 	*/
	 	public function edit() {
			
		}

		/**
	 	* METHOD: delete
	 	* @param  int   $_POST['id']  ID of user
	 	* @return array               Success or Error Response
	 	*/
		public function delete() {
			
		}
	}
?>