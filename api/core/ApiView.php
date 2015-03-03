<?php
	/**
	* SkeleAPI - ApiView Custom View
	*
	* Custom view for Slim that processes data array into JSON.
	* CHANGES: No changes required. 
	* EXCEPT: Custom error message on line 27
	*
	* @category SkeleAPI
	* @package Api
	* @subpackage ApiView
	* @see /api/load.php For all app tags
	* @uses \Slim\Slim Slim Framework
	* @uses \Slim\View Slim View Object
	* @todo Finish object/method/var documentation
	* 
	*/

	namespace Api;
	
	/**
	 * OBJECT: ApiView
	 */
	class ApiView extends \Slim\View {	
		
		public function render($template) {
			
			//process data
			if(isset($this->data->result)) {
				$jsondata = json_encode($this->data->result);
			} else {
				$status = 404;
				$data = '{ "error": "No Data Received" }';
			}

			//set headers and content
			$this->app = \Slim\Slim::getInstance();
			$response = $this->app->response;
			$response->setStatus($status);
			$response->headers->set('Content-Type','application/json');
			$response->setBody($jsondata);

			//all data is rendered, stop the app
			$this->app->stop();
		}

	}
?>