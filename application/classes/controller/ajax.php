<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller {
	

        public function before()
        {
            parent::before();
            if( ! $this->request->is_ajax())
            {
                throw new HTTP_Exception_403('Forbidden');
            }
        }
	public function action_add_rate()
	{
            
            $user_id = Arr::get($_POST, 'user_id', NULL);
            $book_id = Arr::get($_POST, 'book_id', NULL);
            $rate = Arr::get($_POST, 'rate', NULL);
            $e = $book_id;
            if(isset($user_id) AND isset($book_id) AND isset($rate))
            {
                
                $r = new Model_Rate;
                $r->add_rate($user_id, $e, $rate);
            }
        }
        public function action_more_books()
        {
              $genre_id = Arr::get($_POST, 'genre_id', NULL);
              $offset = Arr::get($_POST, 'offset', NULL);
              $b = new Model_Book;
              $more_books = $b->get_short_books_limit($genre_id, (int)$offset, 2, 170);
              echo '<hr>';
              echo View::factory('bookrow')->set('books', $more_books);
        }
} 
