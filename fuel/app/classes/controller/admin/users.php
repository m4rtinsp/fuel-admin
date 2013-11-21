<?php

class Controller_Admin_Users extends Controller_Admin_Base
{
	public function action_index()
	{
		$view = View::forge('admin/users/index');
		$view->set('title', 'Usuários');
		$view->set('users', Model_User::find('all'));

		// Breadcrumb
		$this->set_breadcrumb();

		$this->template->content = $view;
	}

	public function action_edit($id)
	{
		$view = View::forge('admin/users/edit');
		$view->set('title', 'Editar Usuário');
		$view->set('user', Model_User::find($id));

		// Breadcrumb
		$this->set_breadcrumb(array('Edit'));

		$this->template->content = $view;
	}
}