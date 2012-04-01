<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Form extends Controller {
	
	public function action_form()
	{
		if($this->request->is_initial())
		{
			throw new HTTP_Exception_404('File not found!');
		}
		
		$auth = Auth::instance();

		if($auth->logged_in())
		{
			$this->response->body(View::factory('form/account'));
		}
		else
		{       
			$this->response->body(View::factory('form/login'));
		}

	}

} 
