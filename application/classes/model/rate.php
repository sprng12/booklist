<?php defined('SYSPATH') or die('No direct script access.');

class Model_Rate {
	
	public function add_rate($user_id, $book_id, $rate)
	{
            DB::query(DATABASE::UPDATE, 'CALL add_rate(:user_id, :book_id, :rate)')
			->param(':user_id', $user_id)
                        ->param(':book_id', $book_id)
                        ->param(':rate', $rate)
			->execute();	
            Database::instance()->disconnect();
            
            
            $users = DB::query(DATABASE::SELECT, 'SELECT id FROM users WHERE NOT id = :user_id')
			->param(':user_id', $user_id)
			->execute()
                        ->as_array();
            
            foreach($users as $user)
            {
            
                $diff = DB::query(DATABASE::SELECT, 'CALL users_diff(:first_user_id, :second_user_id)')
			->param(':first_user_id', $user_id)
                        ->param(':second_user_id', $user['id'])
			->execute()
                        ->get('diff');
                Database::instance()->disconnect();
               
                
                DB::query(DATABASE::UPDATE, 'UPDATE differences SET diff=:diff 
                    WHERE first_user_id=:first_user_id AND second_user_id=:second_user_id')
                        ->param(':first_user_id', $user_id)
                        ->param(':diff', $diff)
                        ->param(':second_user_id', $user['id'])
                        ->execute();
                Database::instance()->disconnect();
            }
            
	}
        public function get_best_books($limit)
        {
            $best = DB::query(Database::SELECT , 'CALL get_best_books(:limit)')
			->param(':limit', $limit)
			->execute();
            Database::instance()->disconnect();
            return $best;
        }
        public function get_user_rec_books($user_id, $limit)
        {
            $rec = DB::query(Database::SELECT , 'CALL get_user_rec_books(:user_id, :limit)')
			->param(':limit', $limit)
                        ->param(':user_id', $user_id)
			->execute();
            Database::instance()->disconnect();
            return $rec;
        }
	
	
}