<?php

class Controller_Admin_Login extends Controller_Admin_Base
{
	public $template = 'admin/template_login';

	public function action_index()
	{
		$data = array('username'=>null, 'login_error'=>null);

	    if (Input::post())
	    {
	        if (Auth::login())
	        {
	            Response::redirect('admin');
	        }
	        else
	        {
	            $data['username']    = Input::post('username');
	            $data['login_error'] = 'E-mail/senha inválido. Tente novamente';
	        }
	    }

	    $this->template->content = View::forge('admin/login/index', $data);
	}

	public function action_logout()
	{
		Auth::logout();
		Response::redirect('admin');
	}
}