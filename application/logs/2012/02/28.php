<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-28 00:29:44 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'book_id' in 'field list' [ INSERT INTO genres (genre_id, book_id) 
                VALUES ( 3, 38 ) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-28 00:29:44 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'book_id' in 'field list' [ INSERT INTO genres (genre_id, book_id) 
                VALUES ( 3, 38 ) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\booklist\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO gen...', false, Array)
#1 D:\sites\booklist\www\application\classes\model\book.php(175): Kohana_Database_Query->execute()
#2 D:\sites\booklist\www\application\classes\controller\admin.php(22): Model_Book->add_genres(Array, 38)
#3 [internal function]: Controller_Admin->action_book()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-28 19:17:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: languages ~ APPPATH\views\admin\book.php [ 71 ]
2012-02-28 19:17:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: languages ~ APPPATH\views\admin\book.php [ 71 ]
--
#0 D:\sites\booklist\www\application\views\admin\book.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 71, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\application\classes\controller\admin.php(47): Kohana_View->__toString()
#5 [internal function]: Controller_Admin->action_author()
#6 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-02-28 19:43:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: form ~ APPPATH\views\admin\basic.php [ 48 ]
2012-02-28 19:43:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: form ~ APPPATH\views\admin\basic.php [ 48 ]
--
#0 D:\sites\booklist\www\application\views\admin\basic.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 48, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\application\classes\controller\admin.php(9): Kohana_View->__toString()
#5 [internal function]: Controller_Admin->action_index()
#6 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-02-28 19:49:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\template.php [ 19 ]
2012-02-28 19:49:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\template.php [ 19 ]
--
#0 D:\sites\booklist\www\application\views\template.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 19, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-02-28 19:53:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\admin\basic.php [ 32 ]
2012-02-28 19:53:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\admin\basic.php [ 32 ]
--
#0 D:\sites\booklist\www\application\views\admin\basic.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 32, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-02-28 20:10:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ищщл was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-02-28 20:10:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ищщл was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-28 20:10:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\admin\basic.php [ 33 ]
2012-02-28 20:10:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\admin\basic.php [ 33 ]
--
#0 D:\sites\booklist\www\application\views\admin\basic.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 33, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-02-28 20:18:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/lang was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-02-28 20:18:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/lang was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-28 20:18:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\admin\basic.php [ 33 ]
2012-02-28 20:18:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\admin\basic.php [ 33 ]
--
#0 D:\sites\booklist\www\application\views\admin\basic.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 33, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-02-28 20:21:46 --- ERROR: View_Exception [ 0 ]: The requested view admin/lang could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-02-28 20:21:46 --- STRACE: View_Exception [ 0 ]: The requested view admin/lang could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\sites\booklist\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/lang')
#1 D:\sites\booklist\www\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/lang', NULL)
#2 D:\sites\booklist\www\application\classes\controller\admin.php(93): Kohana_View::factory('admin/lang')
#3 [internal function]: Controller_Admin->action_lang()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-28 20:26:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: genre_title ~ APPPATH\classes\model\lang.php [ 16 ]
2012-02-28 20:26:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: genre_title ~ APPPATH\classes\model\lang.php [ 16 ]
--
#0 D:\sites\booklist\www\application\classes\model\lang.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 16, Array)
#1 D:\sites\booklist\www\application\classes\controller\admin.php(90): Model_Lang->add_lang('asdf', 'sadf', 'qwwqwqqq')
#2 [internal function]: Controller_Admin->action_lang()
#3 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-02-28 20:27:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: genre_title ~ APPPATH\classes\model\lang.php [ 16 ]
2012-02-28 20:27:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: genre_title ~ APPPATH\classes\model\lang.php [ 16 ]
--
#0 D:\sites\booklist\www\application\classes\model\lang.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 16, Array)
#1 D:\sites\booklist\www\application\classes\controller\admin.php(90): Model_Lang->add_lang('asdf', 'sadf', 'qwwqwqqq')
#2 [internal function]: Controller_Admin->action_lang()
#3 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-02-28 21:20:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL netprav was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-28 21:20:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL netprav was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-28 21:21:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL netprav was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-28 21:21:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL netprav was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-28 21:22:01 --- ERROR: HTTP_Exception_403 [ 403 ]: Forbidden ~ APPPATH\classes\controller\admin.php [ 21 ]
2012-02-28 21:22:01 --- STRACE: HTTP_Exception_403 [ 403 ]: Forbidden ~ APPPATH\classes\controller\admin.php [ 21 ]
--
#0 [internal function]: Controller_Admin->before()
#1 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin))
#2 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#5 {main}
2012-02-28 21:22:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\admin\basic.php [ 33 ]
2012-02-28 21:22:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\admin\basic.php [ 33 ]
--
#0 D:\sites\booklist\www\application\views\admin\basic.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 33, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#9 {main}