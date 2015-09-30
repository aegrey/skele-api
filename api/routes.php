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

	use \Controller\User;
	use \Controller\Login;
	
	//ROUTES for \Controller\User - /api/controllers/User.php 
	$app->get('/user/:id', '\Controller\User:get');
	$app->post('/user/add', '\Controller\User:add'); 
	$app->post('/user/edit', '\Controller\User:edit');
	$app->post('/user/delete', '\Controller\User:delete');

	$app->post('/login', '\Controller\Login:login');
	$app->get('/logout', '\Controller\Login:logout');
	
?>