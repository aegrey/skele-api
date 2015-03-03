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
	$app->get('/user/self', '\Controller\User:getSelf');
	$app->get('/user/auth/:id', '\Controller\User:getAuth');
	
	//CONTACTS
	$app->post('/contact/add', '\Controller\Contact:add');
	$app->delete('/contact/delete', '\Controller\Contact:delete');
	$app->get('/contact/all', '\Controller\Contact:getAll');
?>