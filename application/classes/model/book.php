<?php defined('SYSPATH') or die('No direct script access.');

class Model_Book {
	
        private $book_id;
    
        public function set_book_id($book_id)
        {
            $this->book_id = $book_id;
        }
	public function get_book($book_id)
	{
		/*<govnokod>
		 *books_with_authors - ��� VIEW, ������� ��������� ������� books � authors
		 *���� �������� ��������� � books � authors ������� genres
		 */
		$book = DB::query(Database::SELECT , 'SELECT b.book_id, b.book_title, b.description, b.year, b.pages,
                            ban.author, bg.genres, ba.avg_rate, l.lang_title AS lang
                            FROM books AS b

                            INNER JOIN book_author_name AS ban ON ban.book_id = b.book_id
                            INNER JOIN book_genres AS bg ON bg.book_id = b.book_id
                            INNER JOIN languages AS l ON l.lang_id = b.lang_id
                            LEFT JOIN book_avg AS ba ON ba.book_id = b.book_id
                            WHERE b.book_id = :book_id
                            LIMIT 1')
			->param(':book_id', $book_id)
			->execute()
			->current();
		//</govnokod>	
			
		return $book;
	}
	
	public function get_random_book_id($num)
	{
		$result = DB::query(Database::SELECT, 'SELECT COUNT(*) AS count FROM books')
			->execute()
			->current();
                if( ! $result['count'])
                    return 0;
		$temp = array();
		for($i = 0; $i < $num; ++$i)
		{
			do
			{
				$t = mt_rand(1, $result['count']);
				
				$flag = FALSE;
				
				foreach($temp as $item)
				{
					if($t == $item)
						$flag = TRUE;
				}
			}
			while($flag);
			$temp[$i] = $t;
		}
		
		return $temp;		
	}
	
	public function get_short_books($books_id, $description_length)
	{
		$query = '(';
                
               
                if($books_id == NULL)
                    throw new HTTP_Exception_500('Internal Server Error');
		foreach($books_id as $book_id)
		{
			$query.= $book_id.', ';
		}
		$query = substr($query, 0, strlen($query)-2);
                $query.= ')';
                if($query)
		$books = DB::query(Database::SELECT, 'SELECT b.book_id, b.book_title, 
                    LEFT(description, :letter_count) AS description, avg_rate AS rate FROM books AS b
                    LEFT JOIN book_avg AS ba ON ba.book_id = b.book_id WHERE b.book_id IN '.$query)
			->param(':letter_count', $description_length)
			->execute()
                        ->as_array();
			
		return $books;
	}
        public function get_short_books_limit($genre_id, $offset, $rows, $description_length)
	{
		
		return DB::query(Database::SELECT, 'SELECT  avg_rate AS rate, books.book_id, book_title, 
                    LEFT(description, :letter_count) AS description                                         
                    FROM books
                    INNER JOIN books_genres ON books_genres.book_id=books.book_id
                    LEFT JOIN book_avg AS ba ON ba.book_id = books.book_id 
                    WHERE genre_id=:genre_id
                    LIMIT :offset, :rows
                          ')
			->param(':letter_count', $description_length)
                        ->param(':genre_id', $genre_id)
                        ->param(':offset', $offset)
                        ->param(':rows', $rows)
			->execute()
                        ->as_array();
	}
	
        public function get_genres()
        {
            return DB::query(Database::SELECT, 'SELECT genres.genre_id, genre_title, COUNT(book_id) AS books_count FROM genres
                        INNER JOIN books_genres ON books_genres.genre_id=genres.genre_id
                        GROUP BY genres.genre_id')->execute();
        }	
        
        public function get_rec_books($user_id, $book_id, $limit = 3)
        {
                           
            $users = DB::query(Database::SELECT, 'SELECT user_id FROM rates 
                            WHERE book_id = :book_id AND NOT user_id = :user_id 
                            ORDER BY rate DESC
                            LIMIT :limit')
			->param(':book_id', $book_id)
                        ->param(':user_id', $user_id)
                        ->param(':limit', $limit)
			->execute()
                        ->as_array();
           
            if( ! $users)
                return;
            
            $ids = '';
            foreach($users as $user)
                $ids.=$user['user_id'].', ';
            $ids = substr($ids, 0, strlen($ids)-2);
            
            $books = DB::query(Database::SELECT, 'SELECT DISTINCT  book_id 
                FROM rates WHERE user_id IN('.$ids.') AND NOT book_id = :book_id 
                GROUP BY book_id
                ORDER BY rate DESC
                LIMIT 3')
			->param(':book_id', $book_id)
			->execute()
                        ->as_array(); 
            $b = array();
            foreach($books as $book)
                $b[] = $book['book_id'];
            
            return $b;
        }
        public function get_author_books($book_id)
        {
            $books =   DB::query(Database::SELECT, 'SELECT books_authors.book_id FROM books_authors 
                LEFT JOIN book_avg AS ba ON ba.book_id = books_authors.book_id 
                WHERE author_id IN (SELECT author_id FROM books_authors WHERE book_id = :book_id) 
                AND NOT books_authors.book_id = :book_id
                ORDER BY avg_rate DESC')
			->param(':book_id', $book_id)
			->execute()
                        ->as_array();
            $b = array();
            
            if($books == NULL)
                return;
            foreach($books as $book)
                $b[] = $book['book_id'];
            return $b;
        }
        
        public function add_book($book_title, $lang, $description, $year = NULL, $pages = NULL)
        {
            
            return DB::query(Database::INSERT, 'INSERT INTO books  (book_title, year, lang_id, pages, description) 
                VALUES (:book_title, :year, :lang_id, :pages, :description)')
                    ->param(':book_title', $book_title)
                    ->param(':lang_id', $lang)
                    ->param(':year', $year)
                    ->param(':pages', $pages)
                    ->param(':description', $description)
                    ->execute();
        }
        
        public function add_genres($genres)
        {
            $value = '';
            foreach($genres as $genre)
            {
                $value .= '( '.$genre['genre_id'].', '.$this->book_id.' ), ';
            }
            $value =  substr($value, 0, strlen($value)-2);
            
            return DB::query(Database::INSERT, 'INSERT INTO books_genres (genre_id, book_id) 
                VALUES '.$value)
                    ->execute();
        }
        public function add_authors($authors)
        {
            $value = '';
            foreach($authors as $author)
            {
                $value .= '( '.$author['author_id'].', '.$this->book_id.' ), ';
            }
            $value =  substr($value, 0, strlen($value)-2);
            
            return DB::query(Database::INSERT, 'INSERT INTO books_authors (author_id, book_id) 
                VALUES '.$value)
                    ->execute();
        }
	
	
}