<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Catalog extends Controller_Common {

    
        public function action_index()
        {
            $r = new Model_Rate;
            

            $genre_id = $this->request->param('id');
            
            $book_count = 6;
            
            $b = new Model_Book();
            $genres = $b->get_genres();
            $books = $b->get_short_books_limit($genre_id, 0, $book_count, 170);
            
          
            
            
            $content = View::factory('catalog')
                    ->set('genres', $genres)
                    ->set('current_tab', $genre_id)
                    ->set('books', $books);            
            
            $this->template->nav = 'catalog';
            $this->template->scripts = array_merge($this->template->scripts, array('/jquery/jquery-ui.custom.js', '/jquery/ui.stars/jquery.ui.stars.js'));
            $this->template->content = $content;
        }
	public function action_book()
	{
		//параметр id указывает на то, какую книгу нужно отобразить
		$book_id = $this->request->param('id');
		
		$b = new Model_Book();
                $rec = $b->get_rec_books(4, 1);    
                
                $rec_books = NULL;                
                if(isset($rec))
                {
                    $rec_books = $b->get_short_books($rec, 170);
                    //echo  View::factory('bookrow')->set('books', $rec_books);
                    //die;
                }
                
		
		$book = $b->get_book($book_id);
                $author = $b->get_author_books($book_id);
                
                $author_books = NULL;          
                if(isset($author))
                {
                    $author_books = $b->get_short_books($author, 170);
                }
		
		if( ! $book)
		{	
			throw new HTTP_Exception_404('Книга не найдена');
		}
		if(Auth::instance()->get_user())
                    $user_id = Auth::instance()->get_user()->id;
                
                else
                    $user_id = NULL;
                
                $m = new Model_Myuser;
                $pers_rate = $m->get_rate($user_id, $book_id);
                
                
		$content = View::factory('book', $book)
                        ->set('rec_books', $rec_books)
                        //->set('rec_books', $author_books)
                        ->set('author_books', $author_books)
                        ->set('user_id', $user_id)
                        ->set('pers_rate', $pers_rate);
		
		$this->template->nav = '';
                $this->template->scripts = array_merge($this->template->scripts, array('/jquery/jquery-ui.custom.js', '/jquery/ui.stars/jquery.ui.stars.js'));
		$this->template->content = $content;
			
	}

}
