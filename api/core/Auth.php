<?php
	namespace Api;
	use \Model\User as UserModel;

	/**
	* SkeleAPI - Auth Middleware
	*
	* User Validation
	* CHANGES: No changes required.
	*
	* @category SkeleAPI
	* @package Api
	* @subpackage Auth
	* @see /api/load.php For all app tags
	* @uses \Slim\Slim Slim Framework
	* @uses \Slim\Middleware Slim Middleware
	* 
	*/

	class Auth extends \Slim\Middleware {	
		
		/**
	 	* METHOD: call
	 	* @param  session  session_id     ID of user
	 	* @param  session  session_token  App Token
	 	* @return bool 
	 	*/
		public function call() {

        	$this->app = \Slim\Slim::getInstance();
        	$route = $this->app->request()->getPathInfo();
        	$error = false;
        	
        	//check for user session
        	if(isset($_SESSION['session_id']) && isset($_SESSION['session_token']) ) {
        		
        		$this->userModel = new UserModel();
        		$user = $this->userModel->auth($_SESSION['session_id']);
        		
        		//Check login auth record
        		if($_SESSION['session_token'] == $user['auth_key']) {
        			$this->next->call(); 

        		} else {
        			//error token is invalid
        			session_destroy();
        			$error = 'invalid_token';
        		}

        	} else if($route == '/login') {
        		//login request, continue load
        		$this->next->call();
        		
        	} else {
        		//user not logged in
        		$error = 'not_logged_in';
        	}

        	//Display error if true
    		if($error) {
    			$response = $this->app->response;
				$response->setStatus(403);
				$response->headers->set('Content-Type','application/json');
				$response->setBody('{"error": "'.$error.'"}');
			}
		}
	}
?>