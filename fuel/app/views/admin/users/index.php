<?php
	echo View::forge('admin/_inc/_list', array(
		'title'=>$title, 
		'data'=>$users, 
		'fields'=>array('username', 'email'), 
		'routes'=>array(
			'remove'=>'admin_users_remove',
			'edit'=>'admin_users_edit',
			'view'=>'admin_users_view',
			'new'=>'admin_users_new',
		)
	));
?>