<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Common {
	


	public function action_index()
	{
		$auth = Auth::instance();
		
		if($auth->logged_in())
		{
			Request::initial()->redirect('');
		}
		
		$content = View::factory('login');
		
		$post = $this->request->post();		
		 
		if(isset($post['submit']))
		{		
			if($auth->login($post['username'], $post['password']))
			{
                                $url = Session::instance()->get('url', '');     
				Request::initial()->redirect($url);
                                
			}
			else
			{
				$content->set('error', '');
			}				
		}
			$this->template->nav = '';
			$this->template->content = $content;
									
	}
	
	public function action_hash()
	{
		$password = $this->request->param('id');
		$auth = Auth::instance();
		echo $auth->hash_password($password);	
	}
	
	public function action_logout()
	{
		$auth = Auth::instance();
		$auth->logout();
		$url = Session::instance()->get('url', '');       
                Request::initial()->redirect($url);
	}
        
         public function action_register()
	 {
             $auth = Auth::instance();
		
		if($auth->logged_in())
		{
			Request::initial()->redirect('');
		}
	    // Если есть данные, присланные методом POST
             $content = View::factory('reg');
	    if ($_POST)
	        {
	        // Создаем переменную, отвечающую за связь с моделью данных User
	        $model = ORM::factory('user');
	        // Вносим в эту переменную значения, переданные из POST
	        $model->values(array(
	           'username' => $_POST['username'],
	           'email' => $_POST['email'],
	           'password' => $_POST['password'],
	           'password_confirm' => $_POST['repeat_password'],
	        ));
                
	        try
	        {
	            // Пытаемся сохранить пользователя (то есть, добавить в базу)
	            $model->save();
                    $m = new Model_Myuser;
                    
                    $m->add_user_diff($model->id);
                    
	            // Назначаем ему роли
	            $model->add('roles', ORM::factory('role')->where('name', '=', 'login')->find());
	            // И отправляем его на страницу пользователя
	                $this->request->redirect('');
	        }
	        catch (ORM_Validation_Exception $e)
	        {
	            // Это если возникли какие-то ошибки
                    $content->set('error', '');
	            
	        }
	        }
	        // Загрузка формы логина
	        
                $this->template->nav = '';
                $this->template->content = $content;
	   }

} 
