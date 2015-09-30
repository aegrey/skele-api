<?php
	namespace Api;

	/**
	* SkeleAPI - ApiView Object
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

	class ApiView extends \Slim\View {	

		/**
	 	* METHOD: render
	 	* Renders custom view template
	 	*
	 	* @param  array  $this->data->result  Data Array to be processed
	 	* @param  int    $this->data->status  HTTP Status Code
	 	* @return void
	 	*/
		public function render($template = '', $data = null, $status = 200) {
			
			//Set Status
			if(isset($this->data->status)) {
				$status = $this->data->status;
			}

			//Set JSON Data
			if(isset($this->data->result)) {
				$jsondata = json_encode($this->data->result);
			} else {
				$status = 404;
				$data = '{ "error": "No Data Received" }';
			}

			//Set Status, Headers, and Data Response
			$this->app = \Slim\Slim::getInstance();
			
			try {
				$response = $this->app->response;
				$response->setStatus($status);
				$response->headers->set('Content-Type','application/json');
				$response->setBody($jsondata);

			} catch(Exception $e) {
				print_r('{ "error": "'.$e.'" }');
			}

			//Stop App after load
			$this->app->stop();
		}

	}
?>