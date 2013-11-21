<?php

class Controller_Admin_Home extends Controller_Admin_Base
{
	public function action_index()
	{
		// Breadcrumb
		$this->set_breadcrumb();

		$this->template->content = View::forge('admin/home/index');
	}

	public function action_help()
	{
		// Breadcrumb
		$this->set_breadcrumb(array('Ajuda'));

		$this->template->content = View::forge('admin/home/help');
	}

}