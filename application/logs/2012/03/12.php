<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-12 16:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 16:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 16:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 16:40:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:40:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 16:47:32 --- ERROR: ErrorException [ 2 ]: mt_rand(): max(0) is smaller than min(1) ~ APPPATH\classes\model\book.php [ 43 ]
2012-03-12 16:47:32 --- STRACE: ErrorException [ 2 ]: mt_rand(): max(0) is smaller than min(1) ~ APPPATH\classes\model\book.php [ 43 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mt_rand(): max(...', 'D:\sites\bookli...', 43, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(43): mt_rand(1, '0')
#2 D:\sites\booklist\www\application\classes\controller\main.php(9): Model_Book->get_random_book_id(6)
#3 [internal function]: Controller_Main->action_index()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-03-12 16:47:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:47:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 16:48:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:48:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 16:49:24 --- ERROR: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\controller\main.php [ 13 ]
2012-03-12 16:49:24 --- STRACE: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\controller\main.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-12 16:49:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:49:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 16:50:34 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\main.php [ 13 ]
2012-03-12 16:50:34 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\main.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-12 16:50:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:50:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 16:50:40 --- ERROR: ErrorException [ 2 ]: array_slice() expects parameter 1 to be array, integer given ~ APPPATH\views\main.php [ 5 ]
2012-03-12 16:50:40 --- STRACE: ErrorException [ 2 ]: array_slice() expects parameter 1 to be array, integer given ~ APPPATH\views\main.php [ 5 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_slice() e...', 'D:\sites\bookli...', 5, Array)
#1 D:\sites\booklist\www\application\views\main.php(5): array_slice(0, 0, 3)
#2 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#3 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#4 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\sites\booklist\www\application\views\template.php(74): Kohana_View->__toString()
#6 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#7 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#8 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 D:\sites\booklist\www\application\classes\controller\common.php(33): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Common->after()
#11 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#12 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#15 {main}
2012-03-12 16:50:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:50:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 16:53:05 --- ERROR: HTTP_Exception_500 [ 500 ]:  ~ APPPATH\classes\model\book.php [ 67 ]
2012-03-12 16:53:05 --- STRACE: HTTP_Exception_500 [ 500 ]:  ~ APPPATH\classes\model\book.php [ 67 ]
--
#0 D:\sites\booklist\www\application\classes\controller\main.php(10): Model_Book->get_short_books(0, 170)
#1 [internal function]: Controller_Main->action_index()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-12 16:53:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:53:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 16:53:35 --- ERROR: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
2012-03-12 16:53:35 --- STRACE: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
--
#0 D:\sites\booklist\www\application\classes\controller\main.php(10): Model_Book->get_short_books(0, 170)
#1 [internal function]: Controller_Main->action_index()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-12 16:53:42 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND NOT book_id = 1 
                GROUP BY book_id
                ORDER ' at line 2 [ SELECT DISTINCT  book_id 
                FROM rates WHERE user_id IN() AND NOT book_id = 1 
                GROUP BY book_id
                ORDER BY rate DESC
                LIMIT 3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-03-12 16:53:42 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND NOT book_id = 1 
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
2012-03-12 16:53:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:53:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 16:54:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:54:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 16:54:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:54:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 16:55:48 --- ERROR: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
2012-03-12 16:55:48 --- STRACE: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
--
#0 D:\sites\booklist\www\application\classes\controller\main.php(10): Model_Book->get_short_books(0, 170)
#1 [internal function]: Controller_Main->action_index()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-12 16:55:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:55:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 16:58:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:58:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 16:58:43 --- ERROR: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
2012-03-12 16:58:43 --- STRACE: HTTP_Exception_500 [ 500 ]: Internal Server Error ~ APPPATH\classes\model\book.php [ 67 ]
--
#0 D:\sites\booklist\www\application\classes\controller\main.php(10): Model_Book->get_short_books(0, 170)
#1 [internal function]: Controller_Main->action_index()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-12 16:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 16:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-03-12 16:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-12 16:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 16:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 16:59:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:59:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 16:59:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:59:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 16:59:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:59:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 16:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 16:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 16:59:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:59:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 16:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 16:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 16:59:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:59:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 16:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 16:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 17:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 17:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 17:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 17:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 17:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 17:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 17:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 17:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 17:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 17:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 17:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 17:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 17:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 17:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 17:59:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 17:59:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 18:00:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 18:00:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 18:00:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 18:00:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 18:01:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 18:01:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 18:12:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 18:12:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 18:12:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 18:12:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 18:12:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 18:12:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 18:13:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 18:13:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 18:13:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 18:13:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 18:14:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 18:14:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 18:14:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 18:14:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 18:15:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 18:15:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 18:15:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 18:15:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 18:17:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 18:17:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 18:18:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 18:18:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 18:18:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 18:18:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 18:18:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 18:18:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-12 18:18:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-12 18:18:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}