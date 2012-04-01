<?php defined('SYSPATH') or die('No direct script access.');

class Model_Genre {
	
	
        public function get_all_id()
        {
            return DB::query(Database::SELECT , 'SELECT genre_id, genre_title FROM genres')
			->execute()
                        ->as_array();
        }
         public function add_genre($genre_title, $description)
         {
                return DB::query(Database::INSERT, 'INSERT INTO genres (genre_title, description) 
                    VALUES (:genre_title, :description)')
                        ->param(':genre_title', $genre_title)
                        ->param(':description', $description)
                        ->execute();
        }
	
	
}