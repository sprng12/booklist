<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-29 00:08:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\common.php [ 12 ]
2012-02-29 00:08:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\common.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-29 00:10:18 --- ERROR: Database_Exception [ 1052 ]: Column 'book_id' in IN/ALL/ANY subquery is ambiguous [ CALL get_user_rec_books(1, 7) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-29 00:10:18 --- STRACE: Database_Exception [ 1052 ]: Column 'book_id' in IN/ALL/ANY subquery is ambiguous [ CALL get_user_rec_books(1, 7) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'CALL get_user_r...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\rate.php(54): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\common.php(11): Model_Rate->get_user_rec_books(1, 7)
#3 [internal function]: Controller_Common->before()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-29 00:10:54 --- ERROR: Database_Exception [ 1052 ]: Column 'rate' in order clause is ambiguous [ CALL get_user_rec_books(1, 7) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-29 00:10:54 --- STRACE: Database_Exception [ 1052 ]: Column 'rate' in order clause is ambiguous [ CALL get_user_rec_books(1, 7) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'CALL get_user_r...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\rate.php(54): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\common.php(11): Model_Rate->get_user_rec_books(1, 7)
#3 [internal function]: Controller_Common->before()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-29 00:11:21 --- ERROR: Database_Exception [ 1052 ]: Column 'rate' in order clause is ambiguous [ CALL get_user_rec_books(1, 7) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-29 00:11:21 --- STRACE: Database_Exception [ 1052 ]: Column 'rate' in order clause is ambiguous [ CALL get_user_rec_books(1, 7) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'CALL get_user_r...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\rate.php(54): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\common.php(11): Model_Rate->get_user_rec_books(1, 7)
#3 [internal function]: Controller_Common->before()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-29 00:16:47 --- ERROR: ErrorException [ 8 ]: Undefined index: avg_rate ~ APPPATH\views\template.php [ 62 ]
2012-02-29 00:16:47 --- STRACE: ErrorException [ 8 ]: Undefined index: avg_rate ~ APPPATH\views\template.php [ 62 ]
--
#0 D:\sites\booklist\www\application\views\template.php(62): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\sites\bookli...', 62, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 D:\sites\booklist\www\application\classes\controller\common.php(31): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Common->after()
#6 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Catalog))
#7 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-02-29 00:25:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-02-29 00:25:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-29 17:23:30 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\common.php [ 11 ]
2012-02-29 17:23:30 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\common.php [ 11 ]
--
#0 D:\sites\booklist\www\application\classes\controller\common.php(11): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\sites\bookli...', 11, Array)
#1 [internal function]: Controller_Common->before()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-29 17:23:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 17:23:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-29 17:32:31 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\common.php [ 11 ]
2012-02-29 17:32:31 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\common.php [ 11 ]
--
#0 D:\sites\booklist\www\application\classes\controller\common.php(11): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\sites\bookli...', 11, Array)
#1 [internal function]: Controller_Common->before()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Catalog))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-29 17:32:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 17:32:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-29 17:34:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 17:34:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-29 17:34:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 17:34:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-29 17:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 17:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-29 17:46:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 17:46:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-29 17:49:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 17:49:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-29 17:49:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 17:49:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-29 17:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 17:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-29 17:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 17:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-29 17:53:54 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''6', 2' at line 8 [ SELECT ROUND(AVG(r.rate)) AS rate, books.book_id, book_title,
                                                        LEFT(description, 170) AS description FROM books
                                                        INNER JOIN books_genres ON books_genres.book_id=books.book_id
                                                        INNER JOIN rates AS r ON r.book_id = books.book_id
                                                        
                                                        WHERE genre_id='1' 
                                                        GROUP BY books.book_id
                                                        LIMIT '6', 2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-29 17:53:54 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''6', 2' at line 8 [ SELECT ROUND(AVG(r.rate)) AS rate, books.book_id, book_title,
                                                        LEFT(description, 170) AS description FROM books
                                                        INNER JOIN books_genres ON books_genres.book_id=books.book_id
                                                        INNER JOIN rates AS r ON r.book_id = books.book_id
                                                        
                                                        WHERE genre_id='1' 
                                                        GROUP BY books.book_id
                                                        LIMIT '6', 2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ROUND(AV...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(99): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\ajax.php(34): Model_Book->get_short_books_limit('1', '6', 2, 170)
#3 [internal function]: Controller_Ajax->action_more_books()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-29 17:55:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: more ~ APPPATH\classes\controller\ajax.php [ 35 ]
2012-02-29 17:55:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: more ~ APPPATH\classes\controller\ajax.php [ 35 ]
--
#0 D:\sites\booklist\www\application\classes\controller\ajax.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 35, Array)
#1 [internal function]: Controller_Ajax->action_more_books()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-29 17:55:32 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''6', 2' at line 8 [ SELECT ROUND(AVG(r.rate)) AS rate, books.book_id, book_title,
                                                        LEFT(description, 170) AS description FROM books
                                                        INNER JOIN books_genres ON books_genres.book_id=books.book_id
                                                        INNER JOIN rates AS r ON r.book_id = books.book_id
                                                        
                                                        WHERE genre_id='1' 
                                                        GROUP BY books.book_id
                                                        LIMIT '6', 2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-29 17:55:32 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''6', 2' at line 8 [ SELECT ROUND(AVG(r.rate)) AS rate, books.book_id, book_title,
                                                        LEFT(description, 170) AS description FROM books
                                                        INNER JOIN books_genres ON books_genres.book_id=books.book_id
                                                        INNER JOIN rates AS r ON r.book_id = books.book_id
                                                        
                                                        WHERE genre_id='1' 
                                                        GROUP BY books.book_id
                                                        LIMIT '6', 2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ROUND(AV...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(99): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\ajax.php(34): Model_Book->get_short_books_limit('1', '6', 2, 170)
#3 [internal function]: Controller_Ajax->action_more_books()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-29 17:55:59 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''6', 2' at line 8 [ SELECT ROUND(AVG(r.rate)) AS rate, books.book_id, book_title,
                                                        LEFT(description, 170) AS description FROM books
                                                        INNER JOIN books_genres ON books_genres.book_id=books.book_id
                                                        INNER JOIN rates AS r ON r.book_id = books.book_id
                                                        
                                                        WHERE genre_id='1' 
                                                        GROUP BY books.book_id
                                                        LIMIT '6', 2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-29 17:55:59 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''6', 2' at line 8 [ SELECT ROUND(AVG(r.rate)) AS rate, books.book_id, book_title,
                                                        LEFT(description, 170) AS description FROM books
                                                        INNER JOIN books_genres ON books_genres.book_id=books.book_id
                                                        INNER JOIN rates AS r ON r.book_id = books.book_id
                                                        
                                                        WHERE genre_id='1' 
                                                        GROUP BY books.book_id
                                                        LIMIT '6', 2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ROUND(AV...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(99): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\ajax.php(34): Model_Book->get_short_books_limit('1', '6', 2, 170)
#3 [internal function]: Controller_Ajax->action_more_books()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-29 18:06:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 18:06:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-29 18:12:35 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''6', 2' at line 8 [ SELECT ROUND(AVG(r.rate)) AS rate, books.book_id, book_title,
                                                        LEFT(description, 170) AS description FROM books
                                                        INNER JOIN books_genres ON books_genres.book_id=books.book_id
                                                        INNER JOIN rates AS r ON r.book_id = books.book_id
                                                        
                                                        WHERE genre_id=1 
                                                        GROUP BY books.book_id
                                                        LIMIT '6', 2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-29 18:12:35 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''6', 2' at line 8 [ SELECT ROUND(AVG(r.rate)) AS rate, books.book_id, book_title,
                                                        LEFT(description, 170) AS description FROM books
                                                        INNER JOIN books_genres ON books_genres.book_id=books.book_id
                                                        INNER JOIN rates AS r ON r.book_id = books.book_id
                                                        
                                                        WHERE genre_id=1 
                                                        GROUP BY books.book_id
                                                        LIMIT '6', 2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ROUND(AV...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(99): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\ajax.php(34): Model_Book->get_short_books_limit(1, '6', 2, 170)
#3 [internal function]: Controller_Ajax->action_more_books()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-29 18:18:29 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''5', 2' at line 8 [ SELECT ROUND(AVG(r.rate)) AS rate, books.book_id, book_title,
                                                        LEFT(description, 170) AS description FROM books
                                                        INNER JOIN books_genres ON books_genres.book_id=books.book_id
                                                        INNER JOIN rates AS r ON r.book_id = books.book_id
                                                        
                                                        WHERE genre_id='1' 
                                                        GROUP BY books.book_id
                                                        LIMIT '5', 2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-29 18:18:29 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''5', 2' at line 8 [ SELECT ROUND(AVG(r.rate)) AS rate, books.book_id, book_title,
                                                        LEFT(description, 170) AS description FROM books
                                                        INNER JOIN books_genres ON books_genres.book_id=books.book_id
                                                        INNER JOIN rates AS r ON r.book_id = books.book_id
                                                        
                                                        WHERE genre_id='1' 
                                                        GROUP BY books.book_id
                                                        LIMIT '5', 2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ROUND(AV...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(99): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\ajax.php(34): Model_Book->get_short_books_limit('1', '5', 2, 170)
#3 [internal function]: Controller_Ajax->action_more_books()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-29 18:19:47 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''5', 2' at line 8 [ SELECT ROUND(AVG(r.rate)) AS rate, books.book_id, book_title,
                                                        LEFT(description, 170) AS description FROM books
                                                        INNER JOIN books_genres ON books_genres.book_id=books.book_id
                                                        INNER JOIN rates AS r ON r.book_id = books.book_id
                                                        
                                                        WHERE genre_id=1 
                                                        GROUP BY books.book_id
                                                        LIMIT '5', 2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-29 18:19:47 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''5', 2' at line 8 [ SELECT ROUND(AVG(r.rate)) AS rate, books.book_id, book_title,
                                                        LEFT(description, 170) AS description FROM books
                                                        INNER JOIN books_genres ON books_genres.book_id=books.book_id
                                                        INNER JOIN rates AS r ON r.book_id = books.book_id
                                                        
                                                        WHERE genre_id=1 
                                                        GROUP BY books.book_id
                                                        LIMIT '5', 2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ROUND(AV...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(99): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\ajax.php(34): Model_Book->get_short_books_limit(1, '5', 2, 170)
#3 [internal function]: Controller_Ajax->action_more_books()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-29 18:19:56 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''5', 2' at line 8 [ SELECT ROUND(AVG(r.rate)) AS rate, books.book_id, book_title,
                                                        LEFT(description, 170) AS description FROM books
                                                        INNER JOIN books_genres ON books_genres.book_id=books.book_id
                                                        INNER JOIN rates AS r ON r.book_id = books.book_id
                                                        
                                                        WHERE genre_id=1 
                                                        GROUP BY books.book_id
                                                        LIMIT '5', 2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-29 18:19:56 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''5', 2' at line 8 [ SELECT ROUND(AVG(r.rate)) AS rate, books.book_id, book_title,
                                                        LEFT(description, 170) AS description FROM books
                                                        INNER JOIN books_genres ON books_genres.book_id=books.book_id
                                                        INNER JOIN rates AS r ON r.book_id = books.book_id
                                                        
                                                        WHERE genre_id=1 
                                                        GROUP BY books.book_id
                                                        LIMIT '5', 2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ROUND(AV...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(99): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\ajax.php(34): Model_Book->get_short_books_limit(1, '5', 2, 170)
#3 [internal function]: Controller_Ajax->action_more_books()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-29 18:21:47 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''5', 2' at line 8 [ SELECT ROUND(AVG(r.rate)) AS rate, books.book_id, book_title,
                                                        LEFT(description, 170) AS description FROM books
                                                        INNER JOIN books_genres ON books_genres.book_id=books.book_id
                                                        INNER JOIN rates AS r ON r.book_id = books.book_id
                                                        
                                                        WHERE genre_id=1 
                                                        GROUP BY books.book_id
                                                        LIMIT '5', 2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-29 18:21:47 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''5', 2' at line 8 [ SELECT ROUND(AVG(r.rate)) AS rate, books.book_id, book_title,
                                                        LEFT(description, 170) AS description FROM books
                                                        INNER JOIN books_genres ON books_genres.book_id=books.book_id
                                                        INNER JOIN rates AS r ON r.book_id = books.book_id
                                                        
                                                        WHERE genre_id=1 
                                                        GROUP BY books.book_id
                                                        LIMIT '5', 2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ROUND(AV...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(99): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\ajax.php(34): Model_Book->get_short_books_limit(1, '5', 2, 170)
#3 [internal function]: Controller_Ajax->action_more_books()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-29 18:22:49 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''5', 2' at line 8 [ SELECT ROUND(AVG(r.rate)) AS rate, books.book_id, book_title,
                                                        LEFT(description, 170) AS description FROM books
                                                        INNER JOIN books_genres ON books_genres.book_id=books.book_id
                                                        INNER JOIN rates AS r ON r.book_id = books.book_id
                                                        
                                                        WHERE genre_id=1 
                                                        GROUP BY books.book_id
                                                        LIMIT '5', 2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-29 18:22:49 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''5', 2' at line 8 [ SELECT ROUND(AVG(r.rate)) AS rate, books.book_id, book_title,
                                                        LEFT(description, 170) AS description FROM books
                                                        INNER JOIN books_genres ON books_genres.book_id=books.book_id
                                                        INNER JOIN rates AS r ON r.book_id = books.book_id
                                                        
                                                        WHERE genre_id=1 
                                                        GROUP BY books.book_id
                                                        LIMIT '5', 2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ROUND(AV...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(99): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\ajax.php(35): Model_Book->get_short_books_limit(1, '5', 2, 170)
#3 [internal function]: Controller_Ajax->action_more_books()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-29 18:23:40 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''5', 2' at line 8 [ SELECT ROUND(AVG(r.rate)) AS rate, books.book_id, book_title,
                                                        LEFT(description, 170) AS description FROM books
                                                        INNER JOIN books_genres ON books_genres.book_id=books.book_id
                                                        INNER JOIN rates AS r ON r.book_id = books.book_id
                                                        
                                                        WHERE genre_id=1 
                                                        GROUP BY books.book_id
                                                        LIMIT '5', 2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-29 18:23:40 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''5', 2' at line 8 [ SELECT ROUND(AVG(r.rate)) AS rate, books.book_id, book_title,
                                                        LEFT(description, 170) AS description FROM books
                                                        INNER JOIN books_genres ON books_genres.book_id=books.book_id
                                                        INNER JOIN rates AS r ON r.book_id = books.book_id
                                                        
                                                        WHERE genre_id=1 
                                                        GROUP BY books.book_id
                                                        LIMIT '5', 2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ROUND(AV...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(99): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\ajax.php(34): Model_Book->get_short_books_limit(1, '5', 2, 170)
#3 [internal function]: Controller_Ajax->action_more_books()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-29 18:23:49 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''5', 2' at line 8 [ SELECT ROUND(AVG(r.rate)) AS rate, books.book_id, book_title,
                                                        LEFT(description, 170) AS description FROM books
                                                        INNER JOIN books_genres ON books_genres.book_id=books.book_id
                                                        INNER JOIN rates AS r ON r.book_id = books.book_id
                                                        
                                                        WHERE genre_id=1 
                                                        GROUP BY books.book_id
                                                        LIMIT '5', 2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-29 18:23:49 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''5', 2' at line 8 [ SELECT ROUND(AVG(r.rate)) AS rate, books.book_id, book_title,
                                                        LEFT(description, 170) AS description FROM books
                                                        INNER JOIN books_genres ON books_genres.book_id=books.book_id
                                                        INNER JOIN rates AS r ON r.book_id = books.book_id
                                                        
                                                        WHERE genre_id=1 
                                                        GROUP BY books.book_id
                                                        LIMIT '5', 2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ROUND(AV...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(99): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\ajax.php(34): Model_Book->get_short_books_limit(1, '5', 2, 170)
#3 [internal function]: Controller_Ajax->action_more_books()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-29 18:25:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\ajax.php [ 34 ]
2012-02-29 18:25:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\ajax.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-29 18:25:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\ajax.php [ 34 ]
2012-02-29 18:25:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\ajax.php [ 34 ]
2012-02-29 18:25:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\ajax.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-29 18:25:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\ajax.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-29 18:25:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\ajax.php [ 34 ]
2012-02-29 18:25:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\ajax.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-29 18:26:12 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\ajax.php [ 34 ]
2012-02-29 18:26:12 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\ajax.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-29 18:27:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\ajax.php [ 33 ]
2012-02-29 18:27:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\ajax.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-29 18:37:27 --- ERROR: ErrorException [ 8 ]: Undefined index: book_count ~ APPPATH\views\catalog.php [ 3 ]
2012-02-29 18:37:27 --- STRACE: ErrorException [ 8 ]: Undefined index: book_count ~ APPPATH\views\catalog.php [ 3 ]
--
#0 D:\sites\booklist\www\application\views\catalog.php(3): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\sites\bookli...', 3, Array)
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
2012-02-29 18:37:38 --- ERROR: HTTP_Exception_403 [ 403 ]: Forbidden ~ APPPATH\classes\controller\ajax.php [ 11 ]
2012-02-29 18:37:38 --- STRACE: HTTP_Exception_403 [ 403 ]: Forbidden ~ APPPATH\classes\controller\ajax.php [ 11 ]
--
#0 [internal function]: Controller_Ajax->before()
#1 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Ajax))
#2 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#5 {main}