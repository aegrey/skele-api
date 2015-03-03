<?php
	namespace Api;
	
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