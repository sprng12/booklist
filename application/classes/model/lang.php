<?php defined('SYSPATH') or die('No direct script access.');

class Model_Lang {
	
	
        public function get_all_id()
        {
            return DB::query(Database::SELECT , 'SELECT lang_id, lang_title FROM languages')
			->execute()
                        ->as_array();
        }
	public function add_lang($lang_title, $short_title, $native_title)
         {
                return DB::query(Database::INSERT, 'INSERT INTO languages (lang_title, short_title, native_title) 
                    VALUES (:lang_title, :short_title, :native_title)')
                        ->param(':lang_title', $lang_title)
                        ->param(':short_title', $short_title)
                        ->param(':native_title', $native_title)
                        
                        ->execute();
        }
	
}