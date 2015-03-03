<?php
	/**
	* SkeleAPI - Contact Controller Object
	*
	* Contacts Object & Methods
	*
	* @category SkeleAPI
	* @package Controller
	* @subpackage Contact
	* @see /api/load.php For all app tags
	* @uses \Slim\Slim Slim Framework
	* 
	*/

	namespace Controller;

	class Contact {	

		/**
	 	* METHOD: add
	 	* @uses   string $_POST['email'] Form Post e-mail     
	 	* @uses   string $_POST['phone'] Form Post phone number     
	 	* @return int                    Contact ID or Error Response
	 	*/
	 	public function add() {
			
		}

		/**
	 	* METHOD: delete
	 	* @param  int   $id  ID of contact
	 	* @return array      Success or Error Response
	 	*/
		public function delete($id) {
			
		}

		/**
	 	* METHOD: getAll
	 	* @param  int   $id  ID of user
	 	* @return array      All Contacts or Error Response
	 	*/
	 	public function getAll() {
			
		}
	}
?>