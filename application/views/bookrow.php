<div class="row">
	<?php           
		foreach($books as $book)
		echo View::factory('thumbnail')
				->set('book_title', $book['book_title'])
				->set('book_description', $book['description'])
                                ->set('rate', $book['rate'])
                                ->set('stars', $s = isset($stars) ? $stars : '')
				->set('book_id', $book['book_id']);
	?>
</div>