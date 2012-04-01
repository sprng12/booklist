<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Common extends Controller_Template {
 
    public function before()
    {
        parent::before();
        
        $r = new Model_Rate;
        $best = $r->get_best_books(7);
        $auth = Auth::instance();
        $user_id = $auth->logged_in() ? $auth->get_user()->id : NULL;
        $rec = $r->get_user_rec_books($user_id, 7);
        $this->template->best = $best;
        $this->template->rec = $rec;
     
        //Session::instance()->set('url', Request::initial()->url());
        $request = Request::factory('form/form');
	$response = $request->execute();

	$this->template->login = $response;
        $this->template->scripts = array();
        if(Auth::instance()->logged_in())
        {
            $this->template->scripts=array('/jquery/bootstrap-dropdown.js');            
        }
        
    }
    
    public function after()
    {
        Session::instance()->set('url', Request::detect_uri());
        parent::after();
    }
 
} // End Common