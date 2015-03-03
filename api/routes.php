<?php
	use Controller\User;
	use Controller\Event;
	use Controller\Contact;
	
	//USERS
	$app->post('/user/add', '\Controller\User:add');
	$app->post('/user/edit', '\Controller\User:edit');
	$app->post('/user/login', '\Controller\User:login');
	$app->delete('/user/delete', '\Controller\User:delete');
	$app->get('/user/logout/:id', '\Controller\User:logout');
	$app->get('/user/:id', '\Controller\User:get');
	$app->get('/user/auth/:id', '\Controller\User:getAuth');
	

	//EVENTS
	$app->post('/event/add', '\Controller\Event:add');
	$app->post('/event/edit', '\Controller\Event:edit');
	$app->delete('/event/delete', '\Controller\Event:delete');
	$app->get('/event/:id', '\Controller\Event:get');
	$app->get('/event/all', '\Controller\Event:getAll');
	
	//CONTACTS
	$app->post('/contact/add', '\Controller\Contact:add');
	$app->delete('/contact/delete', '\Controller\Contact:delete');
	$app->get('/contact/:id', '\Controller\Contact:get');
	$app->get('/contact/all', '\Controller\Contact:getAll');
?>