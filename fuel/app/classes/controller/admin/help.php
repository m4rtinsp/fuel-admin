<?php

class Controller_Admin_Help extends Controller_Admin_Base
{
	public $page_title = 'Ajuda';

	public function action_index()
	{
		// Breadcrumb
		$this->set_breadcrumb();

		$this->template->content = View::forge('admin/help/index');
	}
}