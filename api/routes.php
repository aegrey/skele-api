<?php
	/**
	* SkeleAPI - Routes
	*
	* Routes API calls to associated class & method.
	* CHANGES: Set your application routes here.
	* EXAMPLE: <code>$app->post('/route/method/:var', '\Controller\Object:method');</code>
	*
	* @category SkeleAPI
	* @package /api/routes.php
	* @see /api/load.php For all app tags
	* @uses \Slim\Slim Slim Framework
	* @uses \Controller All API controllers
	* 
	*/

	use \Controller;
	
	//ROUTES for \Controller\User - /api/controllers/User.php 
	$app->post('/user/add', '\Controller\User:add'); 
	$app->post('/user/edit', '\Controller\User:edit');
	$app->post('/user/login', '\Controller\User:login');
	$app->delete('/user/delete', '\Controller\User:delete');
	$app->get('/user/logout/:id', '\Controller\User:logout');
	$app->get('/user/:id', '\Controller\User:get');
	$app->get('/user/self', '\Controller\User:getSelf');
	$app->get('/user/auth/:id', '\Controller\User:getAuth');
	
	//ROUTES for \Controller\Contact - /api/controllers/Contact.php 
	$app->post('/contact/add', '\Controller\Contact:add');
	$app->delete('/contact/delete', '\Controller\Contact:delete');
	$app->get('/contact/all', '\Controller\Contact:getAll');
?>