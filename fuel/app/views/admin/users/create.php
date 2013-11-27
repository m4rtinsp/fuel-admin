<?php
	echo View::forge('admin/_inc/_create_form', array(
		'title'=>$title,
		'data'=>$user, 
		'model'=>'User',
		'fields'=>array('username', 'email', 'group', 'password'),
	)); ?>