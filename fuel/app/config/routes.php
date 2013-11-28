<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'site/404',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
	// Admin
	'admin' => array('admin/home', 'name' => 'admin'),
	'admin/login' => array('admin/login', 'name' => 'admin_login'),
	'admin/logout' => array('admin/login/logout', 'name' => 'admin_logout'),
	'admin/help' => array('admin/home/help', 'name' => 'admin_help'),
	// Users
	'admin/users' => array('admin/users/index', 'name' => 'admin_users'),
	'admin/users/new' => array('admin/users/new', 'name' => 'admin_users_new'),
	'admin/users/view/(:id)' => array('admin/users/view/$1', 'name' => 'admin_users_view'),
	'admin/users/edit/(:id)' => array('admin/users/edit/$1', 'name' => 'admin_users_edit'),
	'admin/users/remove/(:id)' => array('admin/users/remove/$1', 'name' => 'admin_users_remove'),
	// Sample
	'admin/sample' => array('admin/sample', 'name' => 'admin_sample'),
	'admin/sample/edit/(:id)' => array('admin/sample/edit/$1', 'name' => 'admin_sample_edit'),
	'admin/sample/new' => array('admin/sample/new', 'name' => 'admin_sample_new'),
);