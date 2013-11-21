<?php

class Controller_Admin_Login extends Controller_Admin_Base
{
	public $template = 'admin/template_login';

	public function action_index()
	{
		$data = array('username'=>null, 'login_error'=>null);

	    // If so, you pressed the submit button. Let's go over the steps.
	    if (Input::post())
	    {
	    	// Check the credentials. This assumes that you have the previous table created and
	        // you have used the table definition and configuration as mentioned above.
	        if (Auth::login())
	        {
	            // Credentials ok, go right in.
	            Response::redirect('admin');
	        }
	        else
	        {
	            // Oops, no soup for you. Try to login again. Set some values to
	            // repopulate the username field and give some error text back to the view.
	            $data['username']    = Input::post('username');
	            $data['login_error'] = 'Wrong username/password combo. Try again';
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