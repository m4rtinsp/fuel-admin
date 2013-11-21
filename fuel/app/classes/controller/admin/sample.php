<?php

class Controller_Admin_Sample extends Controller_Admin_Base
{
	public $page_title = 'Sample';

	public function action_index()
	{
		$view = View::forge('admin/sample/index');
		$view->set('title', 'Sample');

		// Breadcrumb
		$this->set_breadcrumb();

		$this->template->content = $view;
	}

	public function action_new()
	{
		$view = View::forge('admin/sample/new');
		$view->set('title', 'New page');

		$this->template->content = $view;
	}

	public function action_edit()
	{
		$view = View::forge('admin/sample/edit');
		$view->set('title', 'Edit');

		// Breadcrumb
		$this->set_breadcrumb(array('Edit'));

		$this->template->content = $view;
	}
}