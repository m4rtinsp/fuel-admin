<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'site/404',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
	'admin' => array('admin/home', 'name' => 'admin'),
	'admin/login' => array('admin/login', 'name' => 'admin_login'),
	'admin/logout' => array('admin/login/logout', 'name' => 'admin_logout'),
	'admin/help' => array('admin/home/help', 'name' => 'admin_help'),
	'admin/sample' => array('admin/sample', 'name' => 'admin_sample'),
	'admin/sample/edit/(:id)' => array('admin/sample/edit/$1', 'name' => 'admin_sample_edit'),
	'admin/sample/new' => array('admin/sample/new', 'name' => 'admin_sample_new'),
);