<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-17 13:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 13:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 13:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 13:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 13:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 13:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 13:49:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 13:49:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 13:49:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 13:49:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 13:49:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 13:49:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 13:49:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 13:49:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 13:49:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 13:49:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 13:49:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 13:49:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 13:54:53 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND NOT book_id = 1 
                GROUP BY book_id
                ORDER ' at line 2 [ SELECT DISTINCT  book_id 
                FROM rates WHERE user_id IN() AND NOT book_id = 1 
                GROUP BY book_id
                ORDER BY rate DESC
                LIMIT 3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-03-17 13:54:53 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND NOT book_id = 1 
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
2012-03-17 13:56:29 --- ERROR: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
2012-03-17 13:56:29 --- STRACE: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
--
#0 D:\sites\booklist\www\application\classes\controller\catalog.php(46): Model_Book->get_short_books(0, 170)
#1 [internal function]: Controller_Catalog->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 13:57:10 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND NOT book_id = 1 
                GROUP BY book_id
                ORDER ' at line 2 [ SELECT DISTINCT  book_id 
                FROM rates WHERE user_id IN() AND NOT book_id = 1 
                GROUP BY book_id
                ORDER BY rate DESC
                LIMIT 3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-03-17 13:57:10 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND NOT book_id = 1 
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
2012-03-17 14:01:24 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND NOT book_id = 1 
                GROUP BY book_id
                ORDER ' at line 2 [ SELECT DISTINCT  book_id 
                FROM rates WHERE user_id IN() AND NOT book_id = 1 
                GROUP BY book_id
                ORDER BY rate DESC
                LIMIT 3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-03-17 14:01:24 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND NOT book_id = 1 
                GROUP BY book_id
                ORDER ' at line 2 [ SELECT DISTINCT  book_id 
                FROM rates WHERE user_id IN() AND NOT book_id = 1 
                GROUP BY book_id
                ORDER BY rate DESC
                LIMIT 3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(141): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\catalog.php(37): Model_Book->get_rec_books(1, 1)
#3 [internal function]: Controller_Catalog->action_book()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-03-17 14:01:43 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND NOT book_id = 1 
                GROUP BY book_id
                ORDER ' at line 2 [ SELECT DISTINCT  book_id 
                FROM rates WHERE user_id IN() AND NOT book_id = 1 
                GROUP BY book_id
                ORDER BY rate DESC
                LIMIT 3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-03-17 14:01:43 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND NOT book_id = 1 
                GROUP BY book_id
                ORDER ' at line 2 [ SELECT DISTINCT  book_id 
                FROM rates WHERE user_id IN() AND NOT book_id = 1 
                GROUP BY book_id
                ORDER BY rate DESC
                LIMIT 3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(141): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\catalog.php(37): Model_Book->get_rec_books(1, 1)
#3 [internal function]: Controller_Catalog->action_book()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-03-17 14:02:06 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND NOT book_id = 1 
                GROUP BY book_id
                ORDER ' at line 2 [ SELECT DISTINCT  book_id 
                FROM rates WHERE user_id IN() AND NOT book_id = 1 
                GROUP BY book_id
                ORDER BY rate DESC
                LIMIT 3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-03-17 14:02:06 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND NOT book_id = 1 
                GROUP BY book_id
                ORDER ' at line 2 [ SELECT DISTINCT  book_id 
                FROM rates WHERE user_id IN() AND NOT book_id = 1 
                GROUP BY book_id
                ORDER BY rate DESC
                LIMIT 3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(141): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\catalog.php(37): Model_Book->get_rec_books(4, 1)
#3 [internal function]: Controller_Catalog->action_book()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-03-17 14:03:49 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND NOT book_id = 1 
                GROUP BY book_id
                ORDER ' at line 2 [ SELECT DISTINCT  book_id 
                FROM rates WHERE user_id IN() AND NOT book_id = 1 
                GROUP BY book_id
                ORDER BY rate DESC
                LIMIT 3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-03-17 14:03:49 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND NOT book_id = 1 
                GROUP BY book_id
                ORDER ' at line 2 [ SELECT DISTINCT  book_id 
                FROM rates WHERE user_id IN() AND NOT book_id = 1 
                GROUP BY book_id
                ORDER BY rate DESC
                LIMIT 3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(143): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\catalog.php(37): Model_Book->get_rec_books(4, 1)
#3 [internal function]: Controller_Catalog->action_book()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-03-17 14:04:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\model\book.php [ 127 ]
2012-03-17 14:04:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\model\book.php [ 127 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 14:04:10 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND NOT book_id = 1 
                GROUP BY book_id
                ORDER ' at line 2 [ SELECT DISTINCT  book_id 
                FROM rates WHERE user_id IN() AND NOT book_id = 1 
                GROUP BY book_id
                ORDER BY rate DESC
                LIMIT 3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-03-17 14:04:10 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND NOT book_id = 1 
                GROUP BY book_id
                ORDER ' at line 2 [ SELECT DISTINCT  book_id 
                FROM rates WHERE user_id IN() AND NOT book_id = 1 
                GROUP BY book_id
                ORDER BY rate DESC
                LIMIT 3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(143): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\catalog.php(37): Model_Book->get_rec_books(4, 1)
#3 [internal function]: Controller_Catalog->action_book()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-03-17 14:05:31 --- ERROR: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
2012-03-17 14:05:31 --- STRACE: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
--
#0 D:\sites\booklist\www\application\classes\controller\catalog.php(38): Model_Book->get_short_books(NULL, 170)
#1 [internal function]: Controller_Catalog->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 14:06:07 --- ERROR: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
2012-03-17 14:06:07 --- STRACE: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
--
#0 D:\sites\booklist\www\application\classes\controller\catalog.php(38): Model_Book->get_short_books(NULL, 170)
#1 [internal function]: Controller_Catalog->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 14:06:47 --- ERROR: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
2012-03-17 14:06:47 --- STRACE: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
--
#0 D:\sites\booklist\www\application\classes\controller\catalog.php(49): Model_Book->get_short_books(0, 170)
#1 [internal function]: Controller_Catalog->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 14:06:54 --- ERROR: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
2012-03-17 14:06:54 --- STRACE: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
--
#0 D:\sites\booklist\www\application\classes\controller\catalog.php(49): Model_Book->get_short_books(0, 170)
#1 [internal function]: Controller_Catalog->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 14:07:25 --- ERROR: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
2012-03-17 14:07:25 --- STRACE: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
--
#0 D:\sites\booklist\www\application\classes\controller\catalog.php(49): Model_Book->get_short_books(0, 170)
#1 [internal function]: Controller_Catalog->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 14:07:33 --- ERROR: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
2012-03-17 14:07:33 --- STRACE: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
--
#0 D:\sites\booklist\www\application\classes\controller\catalog.php(49): Model_Book->get_short_books(0, 170)
#1 [internal function]: Controller_Catalog->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 14:07:38 --- ERROR: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
2012-03-17 14:07:38 --- STRACE: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
--
#0 D:\sites\booklist\www\application\classes\controller\catalog.php(40): Model_Book->get_short_books(NULL, 170)
#1 [internal function]: Controller_Catalog->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 14:07:49 --- ERROR: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
2012-03-17 14:07:49 --- STRACE: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
--
#0 D:\sites\booklist\www\application\classes\controller\catalog.php(49): Model_Book->get_short_books(0, 170)
#1 [internal function]: Controller_Catalog->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 14:08:35 --- ERROR: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
2012-03-17 14:08:35 --- STRACE: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
--
#0 D:\sites\booklist\www\application\classes\controller\catalog.php(50): Model_Book->get_short_books(0, 170)
#1 [internal function]: Controller_Catalog->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 14:08:43 --- ERROR: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
2012-03-17 14:08:43 --- STRACE: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
--
#0 D:\sites\booklist\www\application\classes\controller\catalog.php(50): Model_Book->get_short_books(0, 170)
#1 [internal function]: Controller_Catalog->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 14:08:49 --- ERROR: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
2012-03-17 14:08:49 --- STRACE: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
--
#0 D:\sites\booklist\www\application\classes\controller\catalog.php(50): Model_Book->get_short_books(0, 170)
#1 [internal function]: Controller_Catalog->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 14:08:54 --- ERROR: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
2012-03-17 14:08:54 --- STRACE: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
--
#0 D:\sites\booklist\www\application\classes\controller\catalog.php(50): Model_Book->get_short_books(0, 170)
#1 [internal function]: Controller_Catalog->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 14:09:51 --- ERROR: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
2012-03-17 14:09:51 --- STRACE: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
--
#0 D:\sites\booklist\www\application\classes\controller\catalog.php(41): Model_Book->get_short_books(NULL, 170)
#1 [internal function]: Controller_Catalog->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 14:10:00 --- ERROR: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
2012-03-17 14:10:00 --- STRACE: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
--
#0 D:\sites\booklist\www\application\classes\controller\catalog.php(50): Model_Book->get_short_books(0, 170)
#1 [internal function]: Controller_Catalog->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 14:10:13 --- ERROR: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
2012-03-17 14:10:13 --- STRACE: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
--
#0 D:\sites\booklist\www\application\classes\controller\catalog.php(50): Model_Book->get_short_books(0, 170)
#1 [internal function]: Controller_Catalog->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 14:21:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: rec_books ~ APPPATH\classes\controller\catalog.php [ 65 ]
2012-03-17 14:21:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: rec_books ~ APPPATH\classes\controller\catalog.php [ 65 ]
--
#0 D:\sites\booklist\www\application\classes\controller\catalog.php(65): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 65, Array)
#1 [internal function]: Controller_Catalog->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 14:22:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:22:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:22:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:22:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:22:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:22:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:30:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:30:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:31:26 --- ERROR: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
2012-03-17 14:31:26 --- STRACE: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
--
#0 D:\sites\booklist\www\application\classes\controller\catalog.php(52): Model_Book->get_short_books(0, 170)
#1 [internal function]: Controller_Catalog->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 14:31:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:31:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:31:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:31:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:31:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:31:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:33:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH\classes\controller\catalog.php [ 63 ]
2012-03-17 14:33:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH\classes\controller\catalog.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 14:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:33:52 --- ERROR: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
2012-03-17 14:33:52 --- STRACE: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
--
#0 D:\sites\booklist\www\application\classes\controller\catalog.php(52): Model_Book->get_short_books(0, 170)
#1 [internal function]: Controller_Catalog->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 14:33:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:33:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:33:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:33:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:33:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:33:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:34:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:34:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:34:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:34:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:35:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:35:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:35:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:35:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:35:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:35:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:35:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:35:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:35:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:35:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:35:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:35:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:35:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:35:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:35:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:35:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:35:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:36:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:36:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:47:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:47:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:47:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:47:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 14:47:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 14:47:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 15:20:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: lang_id ~ APPPATH\views\book.php [ 88 ]
2012-03-17 15:20:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: lang_id ~ APPPATH\views\book.php [ 88 ]
--
#0 D:\sites\booklist\www\application\views\book.php(88): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 88, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\application\views\template.php(74): Kohana_View->__toString()
#5 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#6 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#7 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\sites\booklist\www\application\classes\controller\common.php(33): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Common->after()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Catalog))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-03-17 15:21:22 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'l.book_id' in 'on clause' [ SELECT b.book_id, b.book_title, b.description, b.year, b.pages,
                            ban.author, bg.genres, ba.avg_rate, l.lang_title
                            FROM books AS b

                            INNER JOIN book_author_name AS ban ON ban.book_id = b.book_id
                            INNER JOIN book_genres AS bg ON bg.book_id = b.book_id
                            INNER JOIN languages AS l ON l.book_id = b.book_id
                            LEFT JOIN book_avg AS ba ON ba.book_id = b.book_id
                            WHERE b.book_id = '5'
                            LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-03-17 15:21:22 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'l.book_id' in 'on clause' [ SELECT b.book_id, b.book_title, b.description, b.year, b.pages,
                            ban.author, bg.genres, ba.avg_rate, l.lang_title
                            FROM books AS b

                            INNER JOIN book_author_name AS ban ON ban.book_id = b.book_id
                            INNER JOIN book_genres AS bg ON bg.book_id = b.book_id
                            INNER JOIN languages AS l ON l.book_id = b.book_id
                            LEFT JOIN book_avg AS ba ON ba.book_id = b.book_id
                            WHERE b.book_id = '5'
                            LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT b.book_i...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(28): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\catalog.php(47): Model_Book->get_book('5')
#3 [internal function]: Controller_Catalog->action_book()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-03-17 15:22:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: lang_id ~ APPPATH\views\book.php [ 88 ]
2012-03-17 15:22:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: lang_id ~ APPPATH\views\book.php [ 88 ]
--
#0 D:\sites\booklist\www\application\views\book.php(88): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 88, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\application\views\template.php(74): Kohana_View->__toString()
#5 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#6 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#7 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\sites\booklist\www\application\classes\controller\common.php(33): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Common->after()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Catalog))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-03-17 15:24:28 --- ERROR: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 69 ]
2012-03-17 15:24:28 --- STRACE: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 69 ]
--
#0 D:\sites\booklist\www\application\classes\controller\catalog.php(52): Model_Book->get_short_books(0, 170)
#1 [internal function]: Controller_Catalog->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 15:24:42 --- ERROR: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 69 ]
2012-03-17 15:24:42 --- STRACE: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 69 ]
--
#0 D:\sites\booklist\www\application\classes\controller\catalog.php(52): Model_Book->get_short_books(0, 170)
#1 [internal function]: Controller_Catalog->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 15:26:01 --- ERROR: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 69 ]
2012-03-17 15:26:01 --- STRACE: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 69 ]
--
#0 D:\sites\booklist\www\application\classes\controller\catalog.php(51): Model_Book->get_short_books(0, 170)
#1 [internal function]: Controller_Catalog->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 15:26:34 --- ERROR: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 69 ]
2012-03-17 15:26:34 --- STRACE: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 69 ]
--
#0 D:\sites\booklist\www\application\classes\controller\catalog.php(52): Model_Book->get_short_books(0, 170)
#1 [internal function]: Controller_Catalog->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 15:27:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: author_books ~ APPPATH\classes\controller\catalog.php [ 67 ]
2012-03-17 15:27:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: author_books ~ APPPATH\classes\controller\catalog.php [ 67 ]
--
#0 D:\sites\booklist\www\application\classes\controller\catalog.php(67): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 67, Array)
#1 [internal function]: Controller_Catalog->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 15:28:07 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\bookrow.php [ 3 ]
2012-03-17 15:28:07 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\bookrow.php [ 3 ]
--
#0 D:\sites\booklist\www\application\views\bookrow.php(3): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\sites\bookli...', 3, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\application\views\book.php(105): Kohana_View->__toString()
#5 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#6 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#7 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#8 D:\sites\booklist\www\application\views\template.php(74): Kohana_View->__toString()
#9 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#10 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#11 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#12 D:\sites\booklist\www\application\classes\controller\common.php(33): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Common->after()
#14 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Catalog))
#15 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#18 {main}
2012-03-17 15:28:30 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\bookrow.php [ 3 ]
2012-03-17 15:28:30 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\bookrow.php [ 3 ]
--
#0 D:\sites\booklist\www\application\views\bookrow.php(3): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\sites\bookli...', 3, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\application\views\book.php(105): Kohana_View->__toString()
#5 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#6 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#7 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#8 D:\sites\booklist\www\application\views\template.php(74): Kohana_View->__toString()
#9 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#10 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#11 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#12 D:\sites\booklist\www\application\classes\controller\common.php(33): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Common->after()
#14 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Catalog))
#15 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#18 {main}
2012-03-17 15:28:37 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\bookrow.php [ 3 ]
2012-03-17 15:28:37 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\bookrow.php [ 3 ]
--
#0 D:\sites\booklist\www\application\views\bookrow.php(3): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\sites\bookli...', 3, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\application\views\book.php(105): Kohana_View->__toString()
#5 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#6 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#7 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#8 D:\sites\booklist\www\application\views\template.php(74): Kohana_View->__toString()
#9 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#10 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#11 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#12 D:\sites\booklist\www\application\classes\controller\common.php(33): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Common->after()
#14 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Catalog))
#15 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#18 {main}
2012-03-17 15:29:40 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\bookrow.php [ 3 ]
2012-03-17 15:29:40 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\bookrow.php [ 3 ]
--
#0 D:\sites\booklist\www\application\views\bookrow.php(3): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\sites\bookli...', 3, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\application\views\book.php(105): Kohana_View->__toString()
#5 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#6 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#7 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#8 D:\sites\booklist\www\application\views\template.php(74): Kohana_View->__toString()
#9 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#10 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#11 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#12 D:\sites\booklist\www\application\classes\controller\common.php(33): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Common->after()
#14 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Catalog))
#15 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#18 {main}
2012-03-17 15:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 15:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 15:53:27 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' AND book_id='5'' at line 2 [ SELECT rate FROM rates 
                WHERE user_id='5', AND book_id='5' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-03-17 15:53:27 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' AND book_id='5'' at line 2 [ SELECT rate FROM rates 
                WHERE user_id='5', AND book_id='5' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT rate FRO...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\myuser.php(31): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\catalog.php(68): Model_Myuser->get_rate('5', '5')
#3 [internal function]: Controller_Catalog->action_book()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-03-17 15:53:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 15:53:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 15:54:55 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' AND book_id='3'' at line 2 [ SELECT rate FROM rates 
                WHERE user_id='5', AND book_id='3' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-03-17 15:54:55 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' AND book_id='3'' at line 2 [ SELECT rate FROM rates 
                WHERE user_id='5', AND book_id='3' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT rate FRO...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\myuser.php(31): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\catalog.php(68): Model_Myuser->get_rate('5', '3')
#3 [internal function]: Controller_Catalog->action_book()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-03-17 15:55:01 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' AND book_id='5'' at line 2 [ SELECT rate FROM rates 
                WHERE user_id='5', AND book_id='5' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-03-17 15:55:01 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' AND book_id='5'' at line 2 [ SELECT rate FROM rates 
                WHERE user_id='5', AND book_id='5' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT rate FRO...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\myuser.php(31): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\catalog.php(68): Model_Myuser->get_rate('5', '5')
#3 [internal function]: Controller_Catalog->action_book()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-03-17 15:55:49 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' AND book_id='5'' at line 2 [ SELECT rate FROM rates 
                WHERE user_id='5' , AND book_id='5'  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-03-17 15:55:49 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' AND book_id='5'' at line 2 [ SELECT rate FROM rates 
                WHERE user_id='5' , AND book_id='5'  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT rate FRO...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\myuser.php(31): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\catalog.php(68): Model_Myuser->get_rate('5', '5')
#3 [internal function]: Controller_Catalog->action_book()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-03-17 15:56:21 --- ERROR: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\model\myuser.php [ 33 ]
2012-03-17 15:56:21 --- STRACE: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\model\myuser.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}