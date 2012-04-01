<?php defined('SYSPATH') or die('No direct script access.');

class Model_Myuser {
	
	public function add_user_diff($user_id)
        {
            $users = DB::query(DATABASE::SELECT, 'SELECT id FROM users WHERE NOT id = :user_id')
			->param(':user_id', $user_id)
			->execute()
                        ->as_array();
            
            foreach($users as $user)
            {
            
                $diff = DB::query(DATABASE::INSERT, 'INSERT INTO differences (first_user_id, second_user_id) 
                    VALUES(:first_user_id, :second_user_id)')
			->param(':first_user_id', $user_id)
                        ->param(':second_user_id', $user['id'])
			->execute();
            }
            
            
        }
	
        public function get_rate($user_id, $book_id)
        {
            return DB::query(DATABASE::SELECT, 'SELECT rate FROM rates 
                WHERE user_id=:user_id  AND book_id=:book_id ')
                    ->param(':user_id', $user_id)
                    ->param(':book_id', $book_id)
                    ->execute()
                    ->get('rate');
        }
	
}