<?php

class Controller_Admin_Users extends Controller_Admin_Base
{
	public $page_title = 'Usuários';

	public function action_index()
	{
		$view = View::forge('admin/users/index');
		$view->set('title', 'Usuários');
		$view->set('users', Model_User::find('all'));

		// Breadcrumb
		$this->set_breadcrumb();

		$this->template->content = $view;
	}

	public function action_new()
	{
		$user = new Model_User;

		// Breadcrumb
		$this->set_breadcrumb(array('Adicionar'));

		// Save
		if (Input::method() == 'POST')
		{
			$this->save($user, 'new');
		}

		$view = View::forge('admin/users/create');
		$view->set('title', 'Adicionar Usuário');
		$view->set('user', $user);

		$this->template->content = $view;
	}

	public function action_edit($id)
	{
		$user = Model_User::find($id);

		// Breadcrumb
		$this->set_breadcrumb(array('Editar'));

		// Save
		if (Input::method() == 'POST')
		{
			$this->save($user, 'edit');
		}

		$view = View::forge('admin/users/edit');
		$view->set('title', 'Editar Usuário');
		$view->set('user', $user);

		$this->template->content = $view;
	}

	public function action_remove($id)
	{
		$user = Model_User::find($id);
		$current_user = Auth::get_user_id();

		if ($current_user[1] == $user->id) {
			Session::set_flash('error', e('Você não pode remover o usuário: #' . $user->username));
		}
		else {
			Auth::delete_user($user->username);
			Session::set_flash('success', e('Usuário removido com sucesso: #' . $user->username));
		}
		
		Response::redirect('admin/users');
	}

	private function save($user, $action)
	{
		$check_password = (Input::post('password') OR $action == 'new') ? true : false;
		$val = Model_User::validate('edit', $check_password);

		if ($val->run())
		{
			if ($action == 'new')
			{
				$status = Auth::create_user(Input::post('username'), Input::post('password'), Input::post('email'), (int)Input::post('group'));

				if ($status)
				{
					Session::set_flash('success', e('Usuário adicionado com sucesso: #' . Input::post('username')));
				}
			}
			else
			{
				$user->username = Input::post('username');
				$user->email = Input::post('email');

				if (Input::post('password')) {
					$user->password = Auth::hash_password( Input::post('password') );
				}

				$status = $user->save();

				if ($status)
				{
					Session::set_flash('success', e('Usuário alterado com sucesso: #' . Input::post('username')));
				}
			}

			if ($status)
			{
				Response::redirect('admin/users');
			}
			else
			{
				Session::set_flash('error', e('Ocorreu um erro ao tentar salvar o usuário'));
			}
		}
		else
		{
			$user->username = Input::post('username');
			$user->email = Input::post('email');
			$user->group = Input::post('group');

			Session::set_flash('error', $val->error());
		}
	}
}