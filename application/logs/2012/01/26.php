<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-26 00:41:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 00:41:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 00:43:56 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP_CONCAT(genres.genre_title SEPARATOR ", ")
							FROM books 
							LEFT J' at line 4 [ SELECT books.book_id, books.book_title, books.year, books.lang_id, books.pages, books.rate, 
							books.description,
							GROUP_CONCAT(authors.first_name, " ", authors.middle_name,  " ", authors.last_name SEPARATOR ", ") AS author
							GROUP_CONCAT(genres.genre_title SEPARATOR ", ")
							FROM books 
							LEFT JOIN books_authors ON books_authors.book_id = books.book_id
							LEFT JOIN authors ON books_authors.author_id = authors.author_id
							LEFT JOIN books_genres ON books_genres.book_id = books.book_id
							LEFT JOIN genres ON books_genres.genre_id = genres.genre_id
							WHERE books.book_id = '1'
							GROUP BY books.book_title ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-26 00:43:56 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP_CONCAT(genres.genre_title SEPARATOR ", ")
							FROM books 
							LEFT J' at line 4 [ SELECT books.book_id, books.book_title, books.year, books.lang_id, books.pages, books.rate, 
							books.description,
							GROUP_CONCAT(authors.first_name, " ", authors.middle_name,  " ", authors.last_name SEPARATOR ", ") AS author
							GROUP_CONCAT(genres.genre_title SEPARATOR ", ")
							FROM books 
							LEFT JOIN books_authors ON books_authors.book_id = books.book_id
							LEFT JOIN authors ON books_authors.author_id = authors.author_id
							LEFT JOIN books_genres ON books_genres.book_id = books.book_id
							LEFT JOIN genres ON books_genres.genre_id = genres.genre_id
							WHERE books.book_id = '1'
							GROUP BY books.book_title ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT books.bo...', false, Array)
#1 D:\sites\booklist\www\application\classes\controller\catalog.php(22): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Catalog->action_book()
#3 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-26 00:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 00:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 00:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 00:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 00:44:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 00:44:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 00:46:01 --- ERROR: Database_Exception [ 1056 ]: Can't group on 'author' [ SELECT books.book_id, books.book_title, books.year, books.lang_id, books.pages, books.rate, 
							books.description,
							GROUP_CONCAT(authors.first_name, " ", authors.middle_name,  " ", authors.last_name SEPARATOR ", ") AS author,
							GROUP_CONCAT(genres.genre_title SEPARATOR ", ") AS genre
							FROM books 
							LEFT JOIN books_authors ON books_authors.book_id = books.book_id
							LEFT JOIN authors ON books_authors.author_id = authors.author_id
							LEFT JOIN books_genres ON books_genres.book_id = books.book_id
							LEFT JOIN genres ON books_genres.genre_id = genres.genre_id
							WHERE books.book_id = '1'
							GROUP BY books.book_title, author ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-26 00:46:01 --- STRACE: Database_Exception [ 1056 ]: Can't group on 'author' [ SELECT books.book_id, books.book_title, books.year, books.lang_id, books.pages, books.rate, 
							books.description,
							GROUP_CONCAT(authors.first_name, " ", authors.middle_name,  " ", authors.last_name SEPARATOR ", ") AS author,
							GROUP_CONCAT(genres.genre_title SEPARATOR ", ") AS genre
							FROM books 
							LEFT JOIN books_authors ON books_authors.book_id = books.book_id
							LEFT JOIN authors ON books_authors.author_id = authors.author_id
							LEFT JOIN books_genres ON books_genres.book_id = books.book_id
							LEFT JOIN genres ON books_genres.genre_id = genres.genre_id
							WHERE books.book_id = '1'
							GROUP BY books.book_title, author ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT books.bo...', false, Array)
#1 D:\sites\booklist\www\application\classes\controller\catalog.php(22): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Catalog->action_book()
#3 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-26 00:46:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 00:46:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 00:46:12 --- ERROR: Database_Exception [ 1247 ]: Reference 'author' not supported (reference to group function) [ SELECT books.book_id, books.book_title, books.year, books.lang_id, books.pages, books.rate, 
							books.description,
							GROUP_CONCAT(authors.first_name, " ", authors.middle_name,  " ", authors.last_name SEPARATOR ", ") AS author,
							GROUP_CONCAT(genres.genre_title SEPARATOR ", ") AS genre
							FROM books 
							LEFT JOIN books_authors ON books_authors.book_id = books.book_id
							LEFT JOIN authors ON books_authors.author_id = authors.author_id
							LEFT JOIN books_genres ON books_genres.book_id = books.book_id
							LEFT JOIN genres ON books_genres.genre_id = genres.genre_id
							WHERE books.book_id = '1'
							GROUP BY (books.book_title, author) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-26 00:46:12 --- STRACE: Database_Exception [ 1247 ]: Reference 'author' not supported (reference to group function) [ SELECT books.book_id, books.book_title, books.year, books.lang_id, books.pages, books.rate, 
							books.description,
							GROUP_CONCAT(authors.first_name, " ", authors.middle_name,  " ", authors.last_name SEPARATOR ", ") AS author,
							GROUP_CONCAT(genres.genre_title SEPARATOR ", ") AS genre
							FROM books 
							LEFT JOIN books_authors ON books_authors.book_id = books.book_id
							LEFT JOIN authors ON books_authors.author_id = authors.author_id
							LEFT JOIN books_genres ON books_genres.book_id = books.book_id
							LEFT JOIN genres ON books_genres.genre_id = genres.genre_id
							WHERE books.book_id = '1'
							GROUP BY (books.book_title, author) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT books.bo...', false, Array)
#1 D:\sites\booklist\www\application\classes\controller\catalog.php(22): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Catalog->action_book()
#3 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-26 00:46:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 00:46:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 00:46:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 00:46:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 00:48:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 00:48:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:07:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:07:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:07:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:07:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:09:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:09:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:09:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:09:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:09:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:09:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:09:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:09:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:09:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:09:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:14:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:14:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:18:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:18:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:19:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:19:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:20:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: book_title ~ APPPATH\views\book.php [ 79 ]
2012-01-26 01:20:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: book_title ~ APPPATH\views\book.php [ 79 ]
--
#0 D:\sites\booklist\www\application\views\book.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 79, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\sites\booklist\www\application\classes\controller\catalog.php(41): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Catalog->action_book()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-26 01:20:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:20:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:20:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH\views\book.php [ 86 ]
2012-01-26 01:20:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH\views\book.php [ 86 ]
--
#0 D:\sites\booklist\www\application\views\book.php(86): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 86, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\sites\booklist\www\application\classes\controller\catalog.php(41): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Catalog->action_book()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-26 01:20:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:20:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:22:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:22:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:23:24 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, boolean given, called in D:\sites\booklist\www\application\classes\controller\catalog.php on line 28 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2012-01-26 01:23:24 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, boolean given, called in D:\sites\booklist\www\application\classes\controller\catalog.php on line 28 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 D:\sites\booklist\www\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\sites\bookli...', 28, Array)
#1 D:\sites\booklist\www\application\classes\controller\catalog.php(28): Kohana_View::factory('book', false)
#2 [internal function]: Controller_Catalog->action_book()
#3 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-26 01:23:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:23:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:24:10 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, boolean given, called in D:\sites\booklist\www\application\classes\controller\catalog.php on line 29 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2012-01-26 01:24:10 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, boolean given, called in D:\sites\booklist\www\application\classes\controller\catalog.php on line 29 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 D:\sites\booklist\www\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\sites\bookli...', 28, Array)
#1 D:\sites\booklist\www\application\classes\controller\catalog.php(29): Kohana_View::factory('book', false)
#2 [internal function]: Controller_Catalog->action_book()
#3 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-26 01:24:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:24:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:24:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:24:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:24:20 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, boolean given, called in D:\sites\booklist\www\application\classes\controller\catalog.php on line 29 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2012-01-26 01:24:20 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, boolean given, called in D:\sites\booklist\www\application\classes\controller\catalog.php on line 29 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 D:\sites\booklist\www\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\sites\bookli...', 28, Array)
#1 D:\sites\booklist\www\application\classes\controller\catalog.php(29): Kohana_View::factory('book', false)
#2 [internal function]: Controller_Catalog->action_book()
#3 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-26 01:24:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:24:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:24:30 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, boolean given, called in D:\sites\booklist\www\application\classes\controller\catalog.php on line 28 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2012-01-26 01:24:30 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, boolean given, called in D:\sites\booklist\www\application\classes\controller\catalog.php on line 28 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 D:\sites\booklist\www\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\sites\bookli...', 28, Array)
#1 D:\sites\booklist\www\application\classes\controller\catalog.php(28): Kohana_View::factory('book', false)
#2 [internal function]: Controller_Catalog->action_book()
#3 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-26 01:24:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:24:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:24:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:24:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 01:31:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 01:31:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:08:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:08:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:09:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:09:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:10:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:10:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:10:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:10:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:10:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:10:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:10:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:10:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:10:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:10:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:15:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:15:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:15:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:15:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:15:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:15:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:15:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:15:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:15:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:15:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:16:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:16:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:16:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:16:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:16:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:16:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:16:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:16:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:17:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:17:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:17:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:17:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:17:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:17:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:17:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:17:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:18:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:18:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:18:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:18:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:18:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:18:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:18:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:18:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:18:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:18:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:20:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:20:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:20:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:20:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:20:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:20:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:20:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:20:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:24:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:24:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:25:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:25:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:25:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:25:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:25:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:25:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:25:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:25:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:25:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:25:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:26:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:26:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:26:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:26:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:26:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:26:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:27:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:27:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:27:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:27:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:27:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:27:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:27:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:27:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:27:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:27:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:29:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:29:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:29:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:29:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:35:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:35:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:35:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:35:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:35:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:35:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:37:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:37:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:39:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:39:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:45:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:45:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:52:20 --- ERROR: ErrorException [ 8 ]: Use of undefined constant flag - assumed 'flag' ~ APPPATH\classes\controller\main.php [ 29 ]
2012-01-26 13:52:20 --- STRACE: ErrorException [ 8 ]: Use of undefined constant flag - assumed 'flag' ~ APPPATH\classes\controller\main.php [ 29 ]
--
#0 D:\sites\booklist\www\application\classes\controller\main.php(29): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\sites\bookli...', 29, Array)
#1 [internal function]: Controller_Main->action_index()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-26 13:52:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:52:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:52:26 --- ERROR: ErrorException [ 8 ]: Use of undefined constant i - assumed 'i' ~ APPPATH\classes\controller\main.php [ 30 ]
2012-01-26 13:52:26 --- STRACE: ErrorException [ 8 ]: Use of undefined constant i - assumed 'i' ~ APPPATH\classes\controller\main.php [ 30 ]
--
#0 D:\sites\booklist\www\application\classes\controller\main.php(30): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\sites\bookli...', 30, Array)
#1 [internal function]: Controller_Main->action_index()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-26 13:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:52:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:52:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:52:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:52:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:52:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:52:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:52:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:52:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:52:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:52:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:52:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:52:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:52:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:52:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:52:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:52:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:52:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:52:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:52:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:52:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:53:34 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\controller\main.php [ 19 ]
2012-01-26 13:53:34 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\controller\main.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-26 13:53:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:53:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:53:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:53:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:53:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:53:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 13:55:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 13:55:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:00:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:00:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:00:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:00:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:00:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:00:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:00:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:00:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/5.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/5.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:02:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:02:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:02:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:02:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:02:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:02:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:02:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:04:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:04:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:04:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:04:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:04:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:04:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:04:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:04:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:04:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:04:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:04:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:04:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:04:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:04:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:04:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:04:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:04:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:04:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:04:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:04:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:04:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:04:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:04:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:04:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:04:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:04:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:04:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:04:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:04:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:04:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:04:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:04:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:10:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:10:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:10:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:10:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:10:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:10:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:10:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:10:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:10:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:10:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:10:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:10:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:10:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:10:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:10:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:10:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:10:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:10:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:11:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:11:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:13:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:13:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:13:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:13:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:13:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:13:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:13:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:13:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:13:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:13:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:16:05 --- ERROR: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\controller\main.php [ 17 ]
2012-01-26 14:16:05 --- STRACE: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\controller\main.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-26 14:16:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:16:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:16:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: book_title ~ APPPATH\views\main.php [ 113 ]
2012-01-26 14:16:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: book_title ~ APPPATH\views\main.php [ 113 ]
--
#0 D:\sites\booklist\www\application\views\main.php(113): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 113, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\sites\booklist\www\application\classes\controller\main.php(22): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Main->action_index()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-26 14:16:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:16:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:16:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:16:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:16:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:16:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:16:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:16:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:18:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:18:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:22:53 --- ERROR: ErrorException [ 8 ]: Undefined index: description ~ APPPATH\classes\controller\main.php [ 18 ]
2012-01-26 14:22:53 --- STRACE: ErrorException [ 8 ]: Undefined index: description ~ APPPATH\classes\controller\main.php [ 18 ]
--
#0 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\sites\bookli...', 18, Array)
#1 [internal function]: Controller_Main->action_index()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-26 14:22:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:22:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:23:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:23:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:23:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:23:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:23:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:23:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:23:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:23:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:23:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:23:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:23:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:23:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:23:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:23:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:23:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:23:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:23:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:23:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:23:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:23:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:23:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:23:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:23:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:23:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:23:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:23:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:23:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:23:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:24:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:24:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:37:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: books_id ~ APPPATH\classes\model\book.php [ 55 ]
2012-01-26 14:37:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: books_id ~ APPPATH\classes\model\book.php [ 55 ]
--
#0 D:\sites\booklist\www\application\classes\model\book.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 55, Array)
#1 D:\sites\booklist\www\application\classes\controller\main.php(18): Model_Book->get_short_book(3, 170)
#2 [internal function]: Controller_Main->action_index()
#3 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-26 14:37:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:37:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:38:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:38:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:38:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:38:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:38:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:38:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:38:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:38:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:39:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\controller\main.php [ 15 ]
2012-01-26 14:39:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\controller\main.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-26 14:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:40:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:40:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:43:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\model\book.php [ 56 ]
2012-01-26 14:43:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\model\book.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-26 14:43:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:43:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:43:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: ids ~ APPPATH\classes\model\book.php [ 56 ]
2012-01-26 14:43:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: ids ~ APPPATH\classes\model\book.php [ 56 ]
--
#0 D:\sites\booklist\www\application\classes\model\book.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 56, Array)
#1 D:\sites\booklist\www\application\classes\controller\main.php(15): Model_Book->get_short_book(Array, 170)
#2 [internal function]: Controller_Main->action_index()
#3 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-26 14:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:44:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_FOREACH ~ APPPATH\classes\model\book.php [ 55 ]
2012-01-26 14:44:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_FOREACH ~ APPPATH\classes\model\book.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-26 14:44:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:44:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:44:22 --- ERROR: ErrorException [ 1 ]: Call to undefined function set() ~ APPPATH\classes\model\book.php [ 54 ]
2012-01-26 14:44:22 --- STRACE: ErrorException [ 1 ]: Call to undefined function set() ~ APPPATH\classes\model\book.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-26 14:44:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:44:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:44:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:44:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:45:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\model\book.php [ 57 ]
2012-01-26 14:45:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\model\book.php [ 57 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-26 14:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:49:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:49:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:49:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:49:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:49:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:49:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:49:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:49:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:49:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:49:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:50:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:50:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:50:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:50:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:50:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\main.php [ 22 ]
2012-01-26 14:50:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\main.php [ 22 ]
--
#0 D:\sites\booklist\www\application\classes\controller\main.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 22, Array)
#1 [internal function]: Controller_Main->action_index()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-26 14:50:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:50:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:51:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:51:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:51:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:51:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:52:11 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\main.php [ 17 ]
2012-01-26 14:52:11 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\main.php [ 17 ]
--
#0 D:\sites\booklist\www\application\classes\controller\main.php(17): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\sites\bookli...', 17, Array)
#1 [internal function]: Controller_Main->action_index()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-26 14:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:52:19 --- ERROR: ErrorException [ 8 ]: Undefined index: 0 ~ APPPATH\classes\controller\main.php [ 17 ]
2012-01-26 14:52:19 --- STRACE: ErrorException [ 8 ]: Undefined index: 0 ~ APPPATH\classes\controller\main.php [ 17 ]
--
#0 D:\sites\booklist\www\application\classes\controller\main.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\sites\bookli...', 17, Array)
#1 [internal function]: Controller_Main->action_index()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-26 14:52:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:52:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:54:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:54:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:54:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:54:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:54:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:54:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:54:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:54:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:55:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:55:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:55:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:55:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:55:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:55:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 14:58:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: book_title ~ APPPATH\views\main.php [ 84 ]
2012-01-26 14:58:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: book_title ~ APPPATH\views\main.php [ 84 ]
--
#0 D:\sites\booklist\www\application\views\main.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 84, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\sites\booklist\www\application\classes\controller\main.php(19): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Main->action_index()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-26 14:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 14:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:01:39 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\classes\controller\main.php [ 14 ]
2012-01-26 15:01:39 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\classes\controller\main.php [ 14 ]
--
#0 D:\sites\booklist\www\application\classes\controller\main.php(14): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\sites\bookli...', 14, Array)
#1 [internal function]: Controller_Main->action_index()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-26 15:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:01:46 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\classes\controller\main.php [ 14 ]
2012-01-26 15:01:46 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\classes\controller\main.php [ 14 ]
--
#0 D:\sites\booklist\www\application\classes\controller\main.php(14): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\sites\bookli...', 14, Array)
#1 [internal function]: Controller_Main->action_index()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-26 15:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:01:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: book_title ~ APPPATH\views\main.php [ 84 ]
2012-01-26 15:01:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: book_title ~ APPPATH\views\main.php [ 84 ]
--
#0 D:\sites\booklist\www\application\views\main.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 84, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\sites\booklist\www\application\classes\controller\main.php(20): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Main->action_index()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-26 15:01:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:01:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:02:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: book_title ~ APPPATH\views\main.php [ 113 ]
2012-01-26 15:02:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: book_title ~ APPPATH\views\main.php [ 113 ]
--
#0 D:\sites\booklist\www\application\views\main.php(113): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 113, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\sites\booklist\www\application\classes\controller\main.php(20): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Main->action_index()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-26 15:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:02:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:02:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:02:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:02:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:02:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:02:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:02:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:02:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:02:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:02:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:02:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:02:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:02:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:02:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:02:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:02:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:14:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:14:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:16:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: ids ~ APPPATH\classes\model\book.php [ 63 ]
2012-01-26 15:16:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: ids ~ APPPATH\classes\model\book.php [ 63 ]
--
#0 D:\sites\booklist\www\application\classes\model\book.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 63, Array)
#1 D:\sites\booklist\www\application\classes\controller\main.php(11): Model_Book->get_short_book(Array, 170)
#2 [internal function]: Controller_Main->action_index()
#3 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-26 15:16:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:16:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:16:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:16:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:16:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:16:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:16:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:16:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:16:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:16:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:16:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:16:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:16:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:16:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:16:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:16:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:16:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:16:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:16:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:16:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:16:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:16:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:16:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:16:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:16:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:16:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:16:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:16:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:16:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:16:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:16:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:16:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:16:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:16:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:16:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:16:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:16:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:16:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:16:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:16:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:16:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:16:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:17:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:17:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:18:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:18:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:18:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:18:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:18:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:18:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:18:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:18:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:18:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:18:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:18:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:18:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:18:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:18:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:18:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:18:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:18:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:18:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:18:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:18:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:18:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:18:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:18:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:18:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:18:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:18:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:18:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:18:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:18:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:18:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:18:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:18:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:18:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:18:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:23:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:23:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:24:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:24:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:25:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:25:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:26:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:26:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:26:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:26:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:26:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:26:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:26:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:26:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:26:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:26:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:26:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:26:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:26:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:26:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:26:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:26:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:26:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:26:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:26:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:26:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:26:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:26:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:26:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:26:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:28:54 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\classes\controller\main.php [ 19 ]
2012-01-26 15:28:54 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\classes\controller\main.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\main.php(19): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Main->action_index()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-26 15:28:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:28:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:29:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: book_title_0 ~ APPPATH\classes\controller\main.php [ 28 ]
2012-01-26 15:29:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: book_title_0 ~ APPPATH\classes\controller\main.php [ 28 ]
--
#0 D:\sites\booklist\www\application\classes\controller\main.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 28, Array)
#1 [internal function]: Controller_Main->action_index()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-26 15:29:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:29:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:29:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:29:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:29:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:29:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:29:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:29:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:29:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:29:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:29:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:29:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:29:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:29:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:29:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:29:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:29:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:29:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:29:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:29:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:29:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:29:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:29:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:29:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:30:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:30:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:30:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:30:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:30:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:30:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:30:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:30:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:31:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:31:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:32:25 --- ERROR: ErrorException [ 8 ]: Undefined index: 0 ~ APPPATH\views\main.php [ 86 ]
2012-01-26 15:32:25 --- STRACE: ErrorException [ 8 ]: Undefined index: 0 ~ APPPATH\views\main.php [ 86 ]
--
#0 D:\sites\booklist\www\application\views\main.php(86): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\sites\bookli...', 86, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\sites\booklist\www\application\classes\controller\main.php(30): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Main->action_index()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-26 15:32:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:32:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:32:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:32:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:33:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: book_description_1 ~ APPPATH\views\main.php [ 90 ]
2012-01-26 15:33:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: book_description_1 ~ APPPATH\views\main.php [ 90 ]
--
#0 D:\sites\booklist\www\application\views\main.php(90): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 90, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\sites\booklist\www\application\classes\controller\main.php(30): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Main->action_index()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-26 15:33:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:33:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:33:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: book_description_0 ~ APPPATH\views\main.php [ 85 ]
2012-01-26 15:33:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: book_description_0 ~ APPPATH\views\main.php [ 85 ]
--
#0 D:\sites\booklist\www\application\views\main.php(85): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 85, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\sites\booklist\www\application\classes\controller\main.php(30): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Main->action_index()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-26 15:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:34:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: book_description_1 ~ APPPATH\views\main.php [ 90 ]
2012-01-26 15:34:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: book_description_1 ~ APPPATH\views\main.php [ 90 ]
--
#0 D:\sites\booklist\www\application\views\main.php(90): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 90, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\sites\booklist\www\application\classes\controller\main.php(30): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Main->action_index()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-26 15:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:34:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:34:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:34:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:34:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:34:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:34:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:34:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:34:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:34:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:34:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:34:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:34:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:34:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:34:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:34:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:34:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:34:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:34:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:34:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:34:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:34:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:34:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:34:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:34:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:35:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:35:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:35:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:35:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:35:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:35:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:35:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:35:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:36:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:36:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:37:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:37:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:40:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:40:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:45:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:45:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:45:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:45:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:45:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:45:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:45:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:45:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:45:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:45:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:45:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:45:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:46:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:46:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:46:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:46:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:46:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:46:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:46:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:46:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:46:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:46:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:46:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:46:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:46:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:46:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:46:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:46:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:46:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:46:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:46:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:46:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:47:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:47:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:47:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:47:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:47:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:47:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:47:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:47:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:47:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:47:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:47:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:47:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:47:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:47:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:47:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:47:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:47:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:47:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:47:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:47:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:47:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:47:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:47:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:47:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:47:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:47:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:47:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:47:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:47:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:47:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:47:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:47:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:47:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:47:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:47:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:47:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:47:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:47:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:47:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:47:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:47:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:47:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:48:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:48:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:48:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:48:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:48:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:48:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:48:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:48:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:48:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:48:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:48:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:48:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:48:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:48:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:48:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:48:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:48:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:48:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:48:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:48:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:49:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:49:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:49:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:49:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:50:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:50:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:50:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:50:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:50:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:50:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:50:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:50:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:50:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:50:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:50:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:50:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:50:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:50:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:50:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:50:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:50:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:50:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:50:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:50:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:50:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:50:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:50:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:50:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:50:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:51:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:51:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:51:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:51:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:52:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:52:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:53:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:53:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:54:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 4 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-26 15:54:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 4 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 15:54:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:54:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:54:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:54:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:54:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:54:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:54:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:54:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:54:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:54:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:54:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:54:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:54:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:54:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:54:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:54:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:54:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:54:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:54:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:54:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:54:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:54:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:54:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:54:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:56:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:56:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:56:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:56:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:56:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:56:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 15:58:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 15:58:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:01:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:01:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:03:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:03:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:03:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:03:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:03:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:03:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:03:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:03:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:03:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:03:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:03:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:03:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:03:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:03:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:03:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:03:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:03:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:03:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:03:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:03:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:03:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:48:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:48:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:48:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:48:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:52:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:52:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:53:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:53:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:55:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:55:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:56:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:56:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:58:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:58:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:59:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 17:59:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:00:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:00:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:03:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:03:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:04:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:04:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:04:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:04:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:06:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:06:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:06:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:06:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:07:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:07:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:07:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:07:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:08:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:08:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:08:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:08:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:09:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:09:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:09:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:09:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:10:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:10:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:10:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:10:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:12:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:12:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:12:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:12:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:13:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:13:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:13:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:13:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:14:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:14:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:14:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:14:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:14:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:14:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:14:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:14:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:15:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:15:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:16:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:16:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:22:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:22:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:22:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:22:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:22:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:22:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:22:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:22:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:22:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:22:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:22:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:22:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:23:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:23:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:24:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:24:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:24:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:24:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:28:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:28:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:29:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\auth.php [ 101 ]
2012-01-26 18:29:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\auth.php [ 101 ]
--
#0 D:\sites\booklist\www\application\views\auth.php(101): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 101, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\sites\booklist\www\application\classes\controller\auth.php(36): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Auth->action_index()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-26 18:29:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:29:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:30:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:30:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:30:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:30:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:31:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:31:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:31:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:31:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:32:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:32:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:34:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:34:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:34:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:34:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:34:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:34:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:34:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:34:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:34:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:34:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:35:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:35:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:37:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:37:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:37:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:37:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:38:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:38:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:42:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:42:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:45:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:45:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:46:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:46:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:46:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:46:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:46:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:46:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:46:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:46:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:46:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:46:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:46:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:46:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:47:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:47:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:47:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:47:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:47:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:47:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:48:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:48:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:48:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:48:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:48:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:48:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:48:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:48:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:48:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:48:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:48:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:48:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:48:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:48:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:48:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:48:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}                                                                                                                                                                                                                                                                                                                                                                                                                             
2012-01-26 18:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:59:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:59:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:59:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:59:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 18:59:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 18:59:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:03:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:03:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:06:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH\views\auth.php [ 79 ]
2012-01-26 19:06:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH\views\auth.php [ 79 ]
--
#0 D:\sites\booklist\www\application\views\auth.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 79, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\sites\booklist\www\application\classes\controller\auth.php(36): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Auth->action_index()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-26 19:06:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:06:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:06:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:06:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:06:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:06:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:07:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:07:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:07:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:07:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:08:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:08:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:11:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:11:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:11:37 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-01-26 19:11:37 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 D:\sites\booklist\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 D:\sites\booklist\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 D:\sites\booklist\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 D:\sites\booklist\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 D:\sites\booklist\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('admin', 'admin', false)
#5 D:\sites\booklist\www\application\classes\controller\auth.php(21): Kohana_Auth->login('admin', 'admin')
#6 [internal function]: Controller_Auth->action_index()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-26 19:11:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:11:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:20:39 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-01-26 19:20:39 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 D:\sites\booklist\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 D:\sites\booklist\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 D:\sites\booklist\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 D:\sites\booklist\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 D:\sites\booklist\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('admin', 'admin', false)
#5 D:\sites\booklist\www\application\classes\controller\auth.php(21): Kohana_Auth->login('admin', 'admin')
#6 [internal function]: Controller_Auth->action_index()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-26 19:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:20:44 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-01-26 19:20:44 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 D:\sites\booklist\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 D:\sites\booklist\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 D:\sites\booklist\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 D:\sites\booklist\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 D:\sites\booklist\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('admin', 'admin', false)
#5 D:\sites\booklist\www\application\classes\controller\auth.php(21): Kohana_Auth->login('admin', 'admin')
#6 [internal function]: Controller_Auth->action_index()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-26 19:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:22:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:22:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:22:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:22:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:22:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:22:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:22:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:22:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:22:32 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-01-26 19:22:32 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 D:\sites\booklist\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 D:\sites\booklist\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 D:\sites\booklist\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 D:\sites\booklist\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 D:\sites\booklist\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('admin', 'admin', false)
#5 D:\sites\booklist\www\application\classes\controller\auth.php(21): Kohana_Auth->login('admin', 'admin')
#6 [internal function]: Controller_Auth->action_index()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-26 19:22:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:22:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:27:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:27:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:27:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:27:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:37:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:37:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:38:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:38:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:38:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:38:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:40:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\controller\main.php [ 17 ]
2012-01-26 19:40:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\controller\main.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-26 19:40:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:40:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:40:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\controller\main.php [ 17 ]
2012-01-26 19:40:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\controller\main.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-26 19:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:40:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:40:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 19:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 19:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 20:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 20:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 20:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 20:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 20:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 20:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:08:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:08:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:09:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:09:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:09:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:09:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:10:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:10:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:10:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:10:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:11:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:11:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:11:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:11:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:12:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:12:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:15:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:15:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:15:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:15:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:15:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:15:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:16:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:16:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:16:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:16:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:16:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:16:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:20:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:20:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:20:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:20:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:20:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:20:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:20:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:20:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:20:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:20:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:20:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:20:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:21:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:21:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:21:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:21:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:32:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:32:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:32:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:32:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:32:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:32:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:32:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:32:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:32:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:32:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:32:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:32:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:32:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:32:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:32:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:32:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:32:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:32:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:33:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:33:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:34:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:34:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:34:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:34:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:34:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:34:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:34:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:34:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:34:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:34:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:34:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:34:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:34:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:34:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:34:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:34:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:34:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:34:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:34:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:34:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:34:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:34:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:34:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:34:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:34:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:34:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:34:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:34:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:34:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:34:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:34:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:34:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:34:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:34:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:34:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:34:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:34:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:34:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:34:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:34:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:34:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:34:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:34:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:34:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:34:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:34:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:36:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:36:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:36:08 --- ERROR: HTTP_Exception_404 [ 404 ]: File not found! ~ APPPATH\classes\controller\auth.php [ 49 ]
2012-01-26 21:36:08 --- STRACE: HTTP_Exception_404 [ 404 ]: File not found! ~ APPPATH\classes\controller\auth.php [ 49 ]
--
#0 [internal function]: Controller_Auth->action_form()
#1 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#2 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#5 {main}
2012-01-26 21:36:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:36:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:36:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:36:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:41:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\form\account.php [ 1 ]
2012-01-26 21:41:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\form\account.php [ 1 ]
--
#0 D:\sites\booklist\www\application\views\form\account.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 1, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\sites\booklist\www\application\classes\controller\auth.php(55): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Auth->action_form()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\application\views\main.php(47): Kohana_Request->execute()
#11 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#12 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#13 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#14 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#15 D:\sites\booklist\www\application\classes\controller\main.php(53): Kohana_Response->body(Object(View))
#16 [internal function]: Controller_Main->action_index()
#17 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#18 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#21 {main}
2012-01-26 21:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:41:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\form\account.php [ 1 ]
2012-01-26 21:41:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\form\account.php [ 1 ]
--
#0 D:\sites\booklist\www\application\views\form\account.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 1, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\sites\booklist\www\application\classes\controller\auth.php(55): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Auth->action_form()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\application\views\main.php(47): Kohana_Request->execute()
#11 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#12 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#13 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#14 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#15 D:\sites\booklist\www\application\classes\controller\main.php(53): Kohana_Response->body(Object(View))
#16 [internal function]: Controller_Main->action_index()
#17 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#18 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#21 {main}
2012-01-26 21:41:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:41:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:41:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\form\account.php [ 1 ]
2012-01-26 21:41:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\form\account.php [ 1 ]
--
#0 D:\sites\booklist\www\application\views\form\account.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 1, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\sites\booklist\www\application\classes\controller\auth.php(55): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Auth->action_form()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\application\views\main.php(47): Kohana_Request->execute()
#11 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#12 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#13 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#14 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#15 D:\sites\booklist\www\application\classes\controller\main.php(53): Kohana_Response->body(Object(View))
#16 [internal function]: Controller_Main->action_index()
#17 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#18 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#21 {main}
2012-01-26 21:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:41:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\form\account.php [ 1 ]
2012-01-26 21:41:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\form\account.php [ 1 ]
--
#0 D:\sites\booklist\www\application\views\form\account.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 1, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\sites\booklist\www\application\classes\controller\auth.php(55): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Auth->action_form()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\application\views\main.php(47): Kohana_Request->execute()
#11 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#12 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#13 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#14 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#15 D:\sites\booklist\www\application\classes\controller\main.php(53): Kohana_Response->body(Object(View))
#16 [internal function]: Controller_Main->action_index()
#17 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#18 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#21 {main}
2012-01-26 21:41:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:41:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:41:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\form\account.php [ 1 ]
2012-01-26 21:41:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\form\account.php [ 1 ]
--
#0 D:\sites\booklist\www\application\views\form\account.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 1, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\sites\booklist\www\application\classes\controller\auth.php(55): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Auth->action_form()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\application\views\main.php(47): Kohana_Request->execute()
#11 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#12 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#13 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#14 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#15 D:\sites\booklist\www\application\classes\controller\main.php(53): Kohana_Response->body(Object(View))
#16 [internal function]: Controller_Main->action_index()
#17 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#18 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#21 {main}
2012-01-26 21:41:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:41:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:41:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\form\account.php [ 1 ]
2012-01-26 21:41:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\form\account.php [ 1 ]
--
#0 D:\sites\booklist\www\application\views\form\account.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 1, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\sites\booklist\www\application\classes\controller\auth.php(55): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Auth->action_form()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\application\views\main.php(47): Kohana_Request->execute()
#11 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#12 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#13 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#14 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#15 D:\sites\booklist\www\application\classes\controller\main.php(53): Kohana_Response->body(Object(View))
#16 [internal function]: Controller_Main->action_index()
#17 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#18 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#21 {main}
2012-01-26 21:41:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:41:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:41:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\form\account.php [ 1 ]
2012-01-26 21:41:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\form\account.php [ 1 ]
--
#0 D:\sites\booklist\www\application\views\form\account.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 1, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\sites\booklist\www\application\classes\controller\auth.php(55): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Auth->action_form()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\application\views\main.php(47): Kohana_Request->execute()
#11 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#12 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#13 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#14 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#15 D:\sites\booklist\www\application\classes\controller\main.php(53): Kohana_Response->body(Object(View))
#16 [internal function]: Controller_Main->action_index()
#17 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#18 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#21 {main}
2012-01-26 21:41:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\form\account.php [ 1 ]
2012-01-26 21:41:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\form\account.php [ 1 ]
--
#0 D:\sites\booklist\www\application\views\form\account.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 1, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\sites\booklist\www\application\classes\controller\auth.php(55): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Auth->action_form()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\application\views\main.php(47): Kohana_Request->execute()
#11 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#12 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#13 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#14 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#15 D:\sites\booklist\www\application\classes\controller\main.php(53): Kohana_Response->body(Object(View))
#16 [internal function]: Controller_Main->action_index()
#17 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#18 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#21 {main}
2012-01-26 21:41:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:41:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:41:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\form\account.php [ 1 ]
2012-01-26 21:41:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\form\account.php [ 1 ]
--
#0 D:\sites\booklist\www\application\views\form\account.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 1, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\sites\booklist\www\application\classes\controller\auth.php(55): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Auth->action_form()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\application\views\main.php(47): Kohana_Request->execute()
#11 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#12 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#13 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#14 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#15 D:\sites\booklist\www\application\classes\controller\main.php(53): Kohana_Response->body(Object(View))
#16 [internal function]: Controller_Main->action_index()
#17 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#18 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#21 {main}
2012-01-26 21:41:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:41:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:41:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\form\account.php [ 1 ]
2012-01-26 21:41:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\form\account.php [ 1 ]
--
#0 D:\sites\booklist\www\application\views\form\account.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 1, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\sites\booklist\www\application\classes\controller\auth.php(55): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Auth->action_form()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\application\views\main.php(47): Kohana_Request->execute()
#11 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#12 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#13 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#14 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#15 D:\sites\booklist\www\application\classes\controller\main.php(53): Kohana_Response->body(Object(View))
#16 [internal function]: Controller_Main->action_index()
#17 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#18 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#21 {main}
2012-01-26 21:41:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:41:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:41:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\form\account.php [ 1 ]
2012-01-26 21:41:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\form\account.php [ 1 ]
--
#0 D:\sites\booklist\www\application\views\form\account.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 1, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\sites\booklist\www\application\classes\controller\auth.php(55): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Auth->action_form()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\application\views\main.php(47): Kohana_Request->execute()
#11 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#12 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#13 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#14 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#15 D:\sites\booklist\www\application\classes\controller\main.php(53): Kohana_Response->body(Object(View))
#16 [internal function]: Controller_Main->action_index()
#17 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#18 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#21 {main}
2012-01-26 21:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:42:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:42:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:45:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:45:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:45:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:45:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:45:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:45:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:45:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:45:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:45:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:45:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:47:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:47:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:47:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:47:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:48:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:48:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:48:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:50:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:50:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:52:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:52:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:54:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:54:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:54:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:54:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:54:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:54:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:55:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:55:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:55:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:55:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:55:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:55:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:56:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:56:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:56:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:56:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 21:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 21:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 22:00:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 22:00:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 22:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 22:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 22:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 22:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 22:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL auth/signup was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-01-26 22:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL auth/signup was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 22:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 22:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 22:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 22:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 22:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 22:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 22:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 22:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 22:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 22:01:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 22:01:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 22:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 22:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 22:02:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 22:02:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 22:02:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 22:02:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 22:02:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 22:02:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 22:02:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 22:02:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 22:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 22:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 22:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 22:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 22:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 22:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 23:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 23:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 23:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 23:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 23:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 23:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 23:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 23:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 23:03:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 23:03:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 23:06:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 23:06:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 23:06:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 23:06:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 23:06:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 23:06:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 23:06:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 23:06:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 23:11:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 23:11:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 23:11:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 23:11:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 23:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 23:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 23:15:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 23:15:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 23:32:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 23:32:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 23:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 23:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 23:56:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jquery/jquery/js was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-26 23:56:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jquery/jquery/js was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 23:56:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 23:56:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 23:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 23:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 23:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jquery/jquery/js was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-26 23:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jquery/jquery/js was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 23:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 23:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 23:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jquery/jquery/js was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-26 23:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jquery/jquery/js was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 23:56:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 23:56:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 23:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 23:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 23:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 23:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 23:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 23:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 23:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 23:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 23:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-26 23:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}