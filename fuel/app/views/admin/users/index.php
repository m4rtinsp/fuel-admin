<?php
	echo View::forge('admin/_inc/_list', array(
		'title'=>$title, 
		'data'=>$users, 
		'fields'=>array('username', 'email'), 
		'uri'=>array(
			'remove'=>'admin/users/remove/:id',
			'edit'=>'admin/users/edit/:id',
			'view'=>'admin/users/view/:id',
			'new'=>'admin/users/new',
		)
	));
?>