<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Template {
    
    
	
        public $template = 'admin/basic';
        
        public function before()
        {

		$auth = Auth::instance();
		
		if($auth->logged_in() == 0) 
			Request::initial()->redirect('auth');
		
		if($auth->logged_in('admin') == 0) 
			 throw new HTTP_Exception_403('Forbidden');
		return parent::before();
	}

   
	public function action_book()
	{
            $view = View::factory('admin/book');
            if($_POST)
            {
                $book_title = Arr::get($_POST, 'book_title', NULL);
                $year = Arr::get($_POST, 'year', NULL);
                $pages = Arr::get($_POST, 'pages', NULL);
                $lang = Arr::get($_POST, 'lang', NULL);
                $description = Arr::get($_POST, 'description', NULL);
                $genres = Arr::get($_POST, 'genre', NULL);
                $authors = Arr::get($_POST, 'author', NULL);
                
                $b = new Model_Book;
            
                $res = $b->add_book($book_title, $lang, $description, $year, $pages);
                $b->set_book_id($res[0]);
                $b->add_genres($genres);
                $b->add_authors($authors);
                
                $saveto = 'img/'.$res[0].'.jpg';
                move_uploaded_file($_FILES['image']['tmp_name'], $saveto);
                $this->template->success = '';
                
                
            }
            $l = new Model_Lang;
            $a = new Model_Author;
            $g = new Model_Genre;
            
            $languages = $l->get_all_id();
            $authors = $a->get_all_id();
            $genres = $g->get_all_id();
            
            $view->set('languages', $languages)
                ->set('authors', $authors)
                ->set('genres', $genres)   ;
            $this->template->form = $view;
            $this->template->nav = 'book';
            
        }
        public function action_author()
        {
            if($_POST)
            {
                $first_name = Arr::get($_POST, 'first_name', NULL);
                $middle_name = Arr::get($_POST, 'middle_name', NULL);
                $last_name = Arr::get($_POST, 'last_name', NULL);
                $country = Arr::get($_POST, 'country', NULL);
              
                $a = new Model_Author;
            
                $a->add_author($first_name, $last_name, $middle_name, $country);
                $this->template->success = '';
            }
            
            $this->template->form = View::factory('admin/author');
            $this->template->nav = 'author';
        }
        public function action_genre()
        {
            if($_POST)
            {
                $genre_title = Arr::get($_POST, 'genre_title', NULL);
                $description = Arr::get($_POST, 'description', NULL);
              
                $g = new Model_Genre;
                $g->add_genre($genre_title, $description);
                $this->template->success = '';
            }
            
            $this->template->form = View::factory('admin/genre');
            $this->template->nav = 'genre';
        }
        public function action_lang()
        {
            if($_POST)
            {
                $lang_title = Arr::get($_POST, 'lang_title', NULL);
                $short_title = Arr::get($_POST, 'short_title', NULL);
                $native_title = Arr::get($_POST, 'native_title', NULL);
              
                $l = new Model_Lang;
                $l->add_lang($lang_title, $short_title, $native_title);
                $this->template->success = '';
            }
            
            $this->template->form = View::factory('admin/lang');
            $this->template->nav = 'lang';
        }
} 
