<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-24 00:21:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:21:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:26:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:26:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:26:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:26:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:32:16 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: Array [ (SELECT ROUND(AVG(r.rate)) AS rate, b.book_id, b.book_title, LEFT(b.description, 170) AS description 
                            FROM books AS b
                            INNER JOIN rates AS r ON r.book_id = b.book_id
                            GROUP BY book_id
                            LIMIT Array, 1)   ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-24 00:32:16 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: Array [ (SELECT ROUND(AVG(r.rate)) AS rate, b.book_id, b.book_title, LEFT(b.description, 170) AS description 
                            FROM books AS b
                            INNER JOIN rates AS r ON r.book_id = b.book_id
                            GROUP BY book_id
                            LIMIT Array, 1)   ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, '(SELECT ROUND(A...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(71): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\catalog.php(40): Model_Book->get_short_books(Array, 170)
#3 [internal function]: Controller_Catalog->action_book()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-24 00:32:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:32:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:34:43 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: Array [ (SELECT ROUND(AVG(r.rate)) AS rate, b.book_id, b.book_title, LEFT(b.description, 170) AS description 
                            FROM books AS b
                            INNER JOIN rates AS r ON r.book_id = b.book_id
                            GROUP BY book_id
                            LIMIT Array, 1)   ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-24 00:34:43 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: Array [ (SELECT ROUND(AVG(r.rate)) AS rate, b.book_id, b.book_title, LEFT(b.description, 170) AS description 
                            FROM books AS b
                            INNER JOIN rates AS r ON r.book_id = b.book_id
                            GROUP BY book_id
                            LIMIT Array, 1)   ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, '(SELECT ROUND(A...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(71): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\catalog.php(40): Model_Book->get_short_books(Array, 170)
#3 [internal function]: Controller_Catalog->action_book()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-24 00:34:43 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: Array [ (SELECT ROUND(AVG(r.rate)) AS rate, b.book_id, b.book_title, LEFT(b.description, 170) AS description 
                            FROM books AS b
                            INNER JOIN rates AS r ON r.book_id = b.book_id
                            GROUP BY book_id
                            LIMIT Array, 1)   ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-24 00:34:43 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: Array [ (SELECT ROUND(AVG(r.rate)) AS rate, b.book_id, b.book_title, LEFT(b.description, 170) AS description 
                            FROM books AS b
                            INNER JOIN rates AS r ON r.book_id = b.book_id
                            GROUP BY book_id
                            LIMIT Array, 1)   ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, '(SELECT ROUND(A...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(71): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\catalog.php(40): Model_Book->get_short_books(Array, 170)
#3 [internal function]: Controller_Catalog->action_book()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-24 00:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:34:47 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: Array [ (SELECT ROUND(AVG(r.rate)) AS rate, b.book_id, b.book_title, LEFT(b.description, 170) AS description 
                            FROM books AS b
                            INNER JOIN rates AS r ON r.book_id = b.book_id
                            GROUP BY book_id
                            LIMIT Array, 1)   ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-24 00:34:47 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: Array [ (SELECT ROUND(AVG(r.rate)) AS rate, b.book_id, b.book_title, LEFT(b.description, 170) AS description 
                            FROM books AS b
                            INNER JOIN rates AS r ON r.book_id = b.book_id
                            GROUP BY book_id
                            LIMIT Array, 1)   ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, '(SELECT ROUND(A...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(71): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\catalog.php(40): Model_Book->get_short_books(Array, 170)
#3 [internal function]: Controller_Catalog->action_book()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-24 00:34:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:34:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:37:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:37:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:37:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:37:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:37:33 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: Array [ (SELECT ROUND(AVG(r.rate)) AS rate, b.book_id, b.book_title, LEFT(b.description, 170) AS description 
                            FROM books AS b
                            INNER JOIN rates AS r ON r.book_id = b.book_id
                            GROUP BY book_id
                            LIMIT Array, 1)   ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-24 00:37:33 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: Array [ (SELECT ROUND(AVG(r.rate)) AS rate, b.book_id, b.book_title, LEFT(b.description, 170) AS description 
                            FROM books AS b
                            INNER JOIN rates AS r ON r.book_id = b.book_id
                            GROUP BY book_id
                            LIMIT Array, 1)   ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, '(SELECT ROUND(A...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(71): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\catalog.php(40): Model_Book->get_short_books(Array, 170)
#3 [internal function]: Controller_Catalog->action_book()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-24 00:37:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:37:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:38:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:38:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:41:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: stars ~ APPPATH\views\thumbnail.php [ 7 ]
2012-02-24 00:41:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: stars ~ APPPATH\views\thumbnail.php [ 7 ]
--
#0 D:\sites\booklist\www\application\views\thumbnail.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 7, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\application\views\bookrow.php(8): Kohana_View->__toString()
#5 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#6 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#7 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#8 D:\sites\booklist\www\application\views\book.php(105): Kohana_View->__toString()
#9 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#10 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#11 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#12 D:\sites\booklist\www\application\views\template.php(78): Kohana_View->__toString()
#13 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#14 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#15 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#16 D:\sites\booklist\www\application\classes\controller\common.php(29): Kohana_Controller_Template->after()
#17 [internal function]: Controller_Common->after()
#18 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Catalog))
#19 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#20 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#21 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#22 {main}
2012-02-24 00:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:43:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:43:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:46:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: b ~ APPPATH\classes\model\book.php [ 141 ]
2012-02-24 00:46:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: b ~ APPPATH\classes\model\book.php [ 141 ]
--
#0 D:\sites\booklist\www\application\classes\model\book.php(141): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 141, Array)
#1 D:\sites\booklist\www\application\classes\controller\catalog.php(39): Model_Book->get_author_books('1')
#2 [internal function]: Controller_Catalog->action_book()
#3 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-02-24 00:46:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:46:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:46:57 --- ERROR: Database_Exception [ 1065 ]: Query was empty [  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-24 00:46:57 --- STRACE: Database_Exception [ 1065 ]: Query was empty [  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, '', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(71): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\catalog.php(41): Model_Book->get_short_books(Array, 170)
#3 [internal function]: Controller_Catalog->action_book()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-24 00:46:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:46:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:49:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: books ~ APPPATH\classes\model\book.php [ 73 ]
2012-02-24 00:49:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: books ~ APPPATH\classes\model\book.php [ 73 ]
--
#0 D:\sites\booklist\www\application\classes\model\book.php(73): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 73, Array)
#1 D:\sites\booklist\www\application\classes\controller\catalog.php(41): Model_Book->get_short_books(Array, 170)
#2 [internal function]: Controller_Catalog->action_book()
#3 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-02-24 00:49:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:49:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:49:37 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\bookrow.php [ 3 ]
2012-02-24 00:49:37 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\bookrow.php [ 3 ]
--
#0 D:\sites\booklist\www\application\views\bookrow.php(3): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\sites\bookli...', 3, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\application\views\book.php(115): Kohana_View->__toString()
#5 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#6 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#7 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#8 D:\sites\booklist\www\application\views\template.php(78): Kohana_View->__toString()
#9 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#10 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#11 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#12 D:\sites\booklist\www\application\classes\controller\common.php(29): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Common->after()
#14 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Catalog))
#15 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#18 {main}
2012-02-24 00:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:50:23 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\bookrow.php [ 3 ]
2012-02-24 00:50:23 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\bookrow.php [ 3 ]
--
#0 D:\sites\booklist\www\application\views\bookrow.php(3): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\sites\bookli...', 3, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\application\views\book.php(115): Kohana_View->__toString()
#5 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#6 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#7 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#8 D:\sites\booklist\www\application\views\template.php(78): Kohana_View->__toString()
#9 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#10 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#11 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#12 D:\sites\booklist\www\application\classes\controller\common.php(29): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Common->after()
#14 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Catalog))
#15 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#18 {main}
2012-02-24 00:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:52:33 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\bookrow.php [ 3 ]
2012-02-24 00:52:33 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\bookrow.php [ 3 ]
--
#0 D:\sites\booklist\www\application\views\bookrow.php(3): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\sites\bookli...', 3, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\application\views\book.php(115): Kohana_View->__toString()
#5 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#6 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#7 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#8 D:\sites\booklist\www\application\views\template.php(78): Kohana_View->__toString()
#9 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#10 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#11 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#12 D:\sites\booklist\www\application\classes\controller\common.php(29): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Common->after()
#14 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Catalog))
#15 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#18 {main}
2012-02-24 00:52:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:52:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:53:51 --- ERROR: ErrorException [ 1 ]: Call to undefined function is_arfray() ~ APPPATH\classes\model\book.php [ 141 ]
2012-02-24 00:53:51 --- STRACE: ErrorException [ 1 ]: Call to undefined function is_arfray() ~ APPPATH\classes\model\book.php [ 141 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-24 00:53:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:53:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:53:56 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\bookrow.php [ 3 ]
2012-02-24 00:53:56 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\bookrow.php [ 3 ]
--
#0 D:\sites\booklist\www\application\views\bookrow.php(3): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\sites\bookli...', 3, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\application\views\book.php(115): Kohana_View->__toString()
#5 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#6 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#7 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#8 D:\sites\booklist\www\application\views\template.php(78): Kohana_View->__toString()
#9 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#10 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#11 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#12 D:\sites\booklist\www\application\classes\controller\common.php(29): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Common->after()
#14 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Catalog))
#15 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#18 {main}
2012-02-24 00:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:55:23 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\model\book.php [ 141 ]
2012-02-24 00:55:23 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\model\book.php [ 141 ]
--
#0 D:\sites\booklist\www\application\classes\model\book.php(141): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\sites\bookli...', 141, Array)
#1 D:\sites\booklist\www\application\classes\controller\catalog.php(39): Model_Book->get_author_books('1')
#2 [internal function]: Controller_Catalog->action_book()
#3 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-02-24 00:55:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:55:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:56:13 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\model\book.php [ 58 ]
2012-02-24 00:56:13 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\model\book.php [ 58 ]
--
#0 D:\sites\booklist\www\application\classes\model\book.php(58): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\sites\bookli...', 58, Array)
#1 D:\sites\booklist\www\application\classes\controller\catalog.php(41): Model_Book->get_short_books(0, 170)
#2 [internal function]: Controller_Catalog->action_book()
#3 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-02-24 00:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:57:04 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\bookrow.php [ 3 ]
2012-02-24 00:57:04 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\bookrow.php [ 3 ]
--
#0 D:\sites\booklist\www\application\views\bookrow.php(3): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\sites\bookli...', 3, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\application\views\book.php(115): Kohana_View->__toString()
#5 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#6 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#7 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#8 D:\sites\booklist\www\application\views\template.php(78): Kohana_View->__toString()
#9 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#10 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#11 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#12 D:\sites\booklist\www\application\classes\controller\common.php(29): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Common->after()
#14 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Catalog))
#15 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#18 {main}
2012-02-24 00:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:58:30 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\bookrow.php [ 5 ]
2012-02-24 00:58:30 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\bookrow.php [ 5 ]
--
#0 D:\sites\booklist\www\application\views\bookrow.php(5): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\sites\bookli...', 5, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\application\views\book.php(115): Kohana_View->__toString()
#5 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#6 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#7 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#8 D:\sites\booklist\www\application\views\template.php(78): Kohana_View->__toString()
#9 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#10 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#11 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#12 D:\sites\booklist\www\application\classes\controller\common.php(29): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Common->after()
#14 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Catalog))
#15 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#18 {main}
2012-02-24 00:58:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:58:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:58:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:58:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 00:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 00:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 01:00:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 01:00:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 01:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 01:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 01:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 01:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 01:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 01:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 01:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 01:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 01:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 01:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 01:01:20 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\bookrow.php [ 3 ]
2012-02-24 01:01:20 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\bookrow.php [ 3 ]
--
#0 D:\sites\booklist\www\application\views\bookrow.php(3): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\sites\bookli...', 3, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\application\views\book.php(116): Kohana_View->__toString()
#5 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#6 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#7 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#8 D:\sites\booklist\www\application\views\template.php(78): Kohana_View->__toString()
#9 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#10 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#11 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#12 D:\sites\booklist\www\application\classes\controller\common.php(29): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Common->after()
#14 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Catalog))
#15 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#18 {main}
2012-02-24 01:01:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 01:01:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 01:02:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 01:02:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 01:02:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 01:02:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 01:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 01:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 01:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 01:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 01:03:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: authors_books ~ APPPATH\views\book.php [ 109 ]
2012-02-24 01:03:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: authors_books ~ APPPATH\views\book.php [ 109 ]
--
#0 D:\sites\booklist\www\application\views\book.php(109): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 109, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\application\views\template.php(78): Kohana_View->__toString()
#5 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#6 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#7 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\sites\booklist\www\application\classes\controller\common.php(29): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Common->after()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Catalog))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-02-24 01:03:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 01:03:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 01:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 01:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 01:05:08 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\bookrow.php [ 3 ]
2012-02-24 01:05:08 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\bookrow.php [ 3 ]
--
#0 D:\sites\booklist\www\application\views\bookrow.php(3): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\sites\bookli...', 3, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\application\views\book.php(116): Kohana_View->__toString()
#5 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#6 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#7 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#8 D:\sites\booklist\www\application\views\template.php(78): Kohana_View->__toString()
#9 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#10 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#11 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#12 D:\sites\booklist\www\application\classes\controller\common.php(29): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Common->after()
#14 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Catalog))
#15 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#18 {main}
2012-02-24 01:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 01:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 01:05:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 01:05:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 01:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 01:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 01:06:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 01:06:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 01:06:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 01:06:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 01:06:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 01:06:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-24 01:06:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-24 01:06:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}