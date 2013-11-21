<?php

class Controller_Admin_Base extends Controller_Template
{
	public $template = 'admin/template';
	public $breadcrumb = array();

	public function before()
	{
		parent::before();
		$request = Request::active();
		
		if ( !($request->controller == 'Controller_Admin_Login' AND $request->action == 'index') AND !Auth::check() )
		{
			Response::redirect('admin/login');
		}
	}

	public function set_breadcrumb($pages=array())
	{
		if ( !(Request::active()->controller == 'Controller_Admin_Home' AND Request::active()->action == 'index') )
		{
			if ( Request::active()->controller != 'Controller_Admin_Home' )
			{
				// Remove Controller_ from controller name
				$url = str_replace('Controller_', '', Request::active()->controller);
				// Lower case
				$url = strtolower($url);

				$page_title = (isset($this->page_title) AND $this->page_title) ? $this->page_title : Request::active()->controller;
				$this->breadcrumb[$page_title] = empty($pages) ? null : $url;
			}

			// If pages exists
			if ($pages)
			{
				foreach ( $pages as $i => $page )
				{
					$this->breadcrumb[$page] = count($pages)==($i+1) ? null : $url . '_' . Request::active()->action;
				}
			}
		}

		$this->template->breadcrumb = !empty($this->breadcrumb) ? (object)$this->breadcrumb : $this->breadcrumb;
	}
}