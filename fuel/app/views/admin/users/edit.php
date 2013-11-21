<?php
	echo View::forge('admin/_inc/_form', array(
		'title'=>$title,
		'data'=>$user, 
		'fields'=>array('username', 'group', 'email'),
	)); ?>