<div class="hero-unit">
    <h1>Book List</h1>
</div>
<?php
    echo View::factory('bookrow')->set('books', array_slice($books, 0, 3));
?>
<hr>
<?php
    echo View::factory('bookrow')->set('books', array_slice($books, 3, 3));
?>
