<?php defined('SYSPATH') or die('No direct script access.');

class Model_Author {
	
	
        public function get_all_id()
        {
            return DB::query(Database::SELECT , 'SELECT author_id, CONCAT_WS(" ", first_name, middle_name, last_name) AS name FROM authors')
			->execute()
                        ->as_array();
        }
        public function add_author($first_name, $last_name, $middle_name = NULL, $country = NULL)
        {
            return DB::query(Database::INSERT, 'INSERT INTO authors (first_name, middle_name, last_name, country) 
                VALUES (:first_name, :middle_name, :last_name, :country)')
                    ->param(':first_name', $first_name)
                    ->param(':middle_name', $middle_name)
                    ->param(':last_name', $last_name)
                    ->param(':country', $country)
                    ->execute();
        }
	
	
}