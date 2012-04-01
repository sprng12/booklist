<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-14 19:44:45 --- ERROR: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
2012-03-14 19:44:45 --- STRACE: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
--
#0 D:\sites\booklist\www\application\classes\controller\main.php(10): Model_Book->get_short_books(0, 170)
#1 [internal function]: Controller_Main->action_index()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-14 19:44:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 19:44:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 19:44:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 19:44:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 19:45:01 --- ERROR: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
2012-03-14 19:45:01 --- STRACE: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
--
#0 D:\sites\booklist\www\application\classes\controller\main.php(10): Model_Book->get_short_books(0, 170)
#1 [internal function]: Controller_Main->action_index()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-14 19:45:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 19:45:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 19:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 19:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 19:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 19:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 19:51:05 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\model\book.php [ 45 ]
2012-03-14 19:51:05 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\model\book.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-14 19:51:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 19:51:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 19:51:45 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\model\book.php [ 47 ]
2012-03-14 19:51:45 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\model\book.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-14 19:51:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 19:51:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 19:51:46 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND NOT book_id = 1 
                GROUP BY book_id
                ORDER ' at line 2 [ SELECT DISTINCT  book_id 
                FROM rates WHERE user_id IN() AND NOT book_id = 1 
                GROUP BY book_id
                ORDER BY rate DESC
                LIMIT 3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-03-14 19:51:46 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND NOT book_id = 1 
                GROUP BY book_id
                ORDER ' at line 2 [ SELECT DISTINCT  book_id 
                FROM rates WHERE user_id IN() AND NOT book_id = 1 
                GROUP BY book_id
                ORDER BY rate DESC
                LIMIT 3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(135): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\catalog.php(37): Model_Book->get_rec_books(1, 1)
#3 [internal function]: Controller_Catalog->action_book()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-03-14 19:51:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 19:51:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 19:51:50 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND NOT book_id = 1 
                GROUP BY book_id
                ORDER ' at line 2 [ SELECT DISTINCT  book_id 
                FROM rates WHERE user_id IN() AND NOT book_id = 1 
                GROUP BY book_id
                ORDER BY rate DESC
                LIMIT 3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-03-14 19:51:50 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND NOT book_id = 1 
                GROUP BY book_id
                ORDER ' at line 2 [ SELECT DISTINCT  book_id 
                FROM rates WHERE user_id IN() AND NOT book_id = 1 
                GROUP BY book_id
                ORDER BY rate DESC
                LIMIT 3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(135): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\catalog.php(37): Model_Book->get_rec_books(1, 1)
#3 [internal function]: Controller_Catalog->action_book()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-03-14 19:51:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 19:51:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 19:55:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 19:55:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 19:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 19:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 19:58:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 19:58:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 19:59:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 19:59:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 19:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 19:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 19:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 19:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:04:53 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`booklist`.`books_authors`, CONSTRAINT `books_authors_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON UPDATE CASCADE) [ INSERT INTO books_authors (book_id, author_id) 
                VALUES ( 5, 4 ) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-03-14 20:04:53 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`booklist`.`books_authors`, CONSTRAINT `books_authors_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON UPDATE CASCADE) [ INSERT INTO books_authors (book_id, author_id) 
                VALUES ( 5, 4 ) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO boo...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(198): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\admin.php(41): Model_Book->add_authors(Array)
#3 [internal function]: Controller_Admin->action_book()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-03-14 20:04:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:04:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:06:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:06:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:08:12 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\model\book.php [ 45 ]
2012-03-14 20:08:12 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\model\book.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-14 20:08:12 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND NOT book_id = 1 
                GROUP BY book_id
                ORDER ' at line 2 [ SELECT DISTINCT  book_id 
                FROM rates WHERE user_id IN() AND NOT book_id = 1 
                GROUP BY book_id
                ORDER BY rate DESC
                LIMIT 3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-03-14 20:08:12 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND NOT book_id = 1 
                GROUP BY book_id
                ORDER ' at line 2 [ SELECT DISTINCT  book_id 
                FROM rates WHERE user_id IN() AND NOT book_id = 1 
                GROUP BY book_id
                ORDER BY rate DESC
                LIMIT 3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(135): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\catalog.php(37): Model_Book->get_rec_books(1, 1)
#3 [internal function]: Controller_Catalog->action_book()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-03-14 20:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:09:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL books was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-14 20:09:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL books was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-14 20:09:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:09:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:09:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL book was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-14 20:09:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL book was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-14 20:09:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:09:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:09:30 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND NOT book_id = 1 
                GROUP BY book_id
                ORDER ' at line 2 [ SELECT DISTINCT  book_id 
                FROM rates WHERE user_id IN() AND NOT book_id = 1 
                GROUP BY book_id
                ORDER BY rate DESC
                LIMIT 3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-03-14 20:09:30 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND NOT book_id = 1 
                GROUP BY book_id
                ORDER ' at line 2 [ SELECT DISTINCT  book_id 
                FROM rates WHERE user_id IN() AND NOT book_id = 1 
                GROUP BY book_id
                ORDER BY rate DESC
                LIMIT 3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(135): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\catalog.php(37): Model_Book->get_rec_books(1, 1)
#3 [internal function]: Controller_Catalog->action_book()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-03-14 20:09:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:09:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:09:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:09:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:12:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:12:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:12:26 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND NOT book_id = 1 
                GROUP BY book_id
                ORDER ' at line 2 [ SELECT DISTINCT  book_id 
                FROM rates WHERE user_id IN() AND NOT book_id = 1 
                GROUP BY book_id
                ORDER BY rate DESC
                LIMIT 3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-03-14 20:12:26 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND NOT book_id = 1 
                GROUP BY book_id
                ORDER ' at line 2 [ SELECT DISTINCT  book_id 
                FROM rates WHERE user_id IN() AND NOT book_id = 1 
                GROUP BY book_id
                ORDER BY rate DESC
                LIMIT 3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(135): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\catalog.php(37): Model_Book->get_rec_books(1, 1)
#3 [internal function]: Controller_Catalog->action_book()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-03-14 20:12:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:12:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:14:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:14:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:14:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:14:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:16:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:16:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:16:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:16:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:17:37 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\model\book.php [ 45 ]
2012-03-14 20:17:37 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\model\book.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-14 20:18:05 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\model\book.php [ 45 ]
2012-03-14 20:18:05 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\model\book.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-14 20:18:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:18:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:26:18 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\model\book.php [ 49 ]
2012-03-14 20:26:18 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\model\book.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-14 20:26:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:26:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:26:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:26:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:26:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:26:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:26:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:26:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:26:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:26:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:26:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:26:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:26:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:26:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:26:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:26:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:26:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:26:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:26:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:26:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:26:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:26:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:26:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:26:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:27:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:27:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-14 20:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-14 20:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}