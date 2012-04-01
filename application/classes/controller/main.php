<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Common {
	
	public function action_index()
	{
		$b = new Model_Book();		
		
		$books_id = $b->get_random_book_id(6);
		$books = $b->get_short_books($books_id, 170);	
		
		$content = View::factory('main')
			->set('books', $books);
		$this->template->scripts = array_merge($this->template->scripts, array('/jquery/jquery-ui.custom.js', '/jquery/ui.stars/jquery.ui.stars.js'));
		$this->template->nav = 'main';
		$this->template->content = $content;
	}

} 
