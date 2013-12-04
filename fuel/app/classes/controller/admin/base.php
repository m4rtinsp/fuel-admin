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

	// Action override
	protected function _index()
	{
		// Filter
		$this->check_filter();

		// Breadcrumb
		$this->set_breadcrumb();
	}

	// Action override
	protected function _addOrUpdate($data, $title, $action)
	{
		// Breadcrumb
		$this->set_breadcrumb(array($title));

		// Save
		if (Input::method() == 'POST')
		{
			$this->save($data, $action);
		}
	}

	protected function _filter($class, $messages=array())
	{
		if (isset($_GET['filter']))
		{
			switch ($_GET['filter']) {
				case 'remove':
					if (isset($_GET['ids']) AND $_GET['ids'])
					{
						$ids = explode(',', $_GET['ids']);

						foreach ($ids as $id)
						{
							$class::find($id)->delete();
						}

						Session::set_flash('success', $messages['remove']['success']);
					}
					else
					{
						Session::set_flash('error', $messages['remove']['error']);
					}

					Response::redirect('admin/users');
					break;
				
				default:
					break;
			}
		}
	}

	protected function set_breadcrumb($pages=array())
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