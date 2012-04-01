<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-27 12:25:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-27 12:25:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-27 12:25:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-27 12:25:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-27 19:04:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-27 19:04:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-27 19:04:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-27 19:04:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-27 19:04:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-27 19:04:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-27 19:41:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\controller\admin.php [ 20 ]
2012-02-27 19:41:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\controller\admin.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-27 19:47:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/11.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-27 19:47:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/11.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-27 19:52:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_EXIT, expecting ',' or ';' ~ APPPATH\classes\controller\admin.php [ 21 ]
2012-02-27 19:52:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_EXIT, expecting ',' or ';' ~ APPPATH\classes\controller\admin.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-27 19:56:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: FILES ~ APPPATH\classes\controller\admin.php [ 21 ]
2012-02-27 19:56:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: FILES ~ APPPATH\classes\controller\admin.php [ 21 ]
--
#0 D:\sites\booklist\www\application\classes\controller\admin.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 21, Array)
#1 [internal function]: Controller_Admin->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-27 19:57:14 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ APPPATH\classes\controller\admin.php [ 21 ]
2012-02-27 19:57:14 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ APPPATH\classes\controller\admin.php [ 21 ]
--
#0 D:\sites\booklist\www\application\classes\controller\admin.php(21): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\sites\bookli...', 21, Array)
#1 [internal function]: Controller_Admin->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-27 19:57:38 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ APPPATH\classes\controller\admin.php [ 21 ]
2012-02-27 19:57:38 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ APPPATH\classes\controller\admin.php [ 21 ]
--
#0 D:\sites\booklist\www\application\classes\controller\admin.php(21): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\sites\bookli...', 21, Array)
#1 [internal function]: Controller_Admin->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-27 19:59:09 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ APPPATH\classes\controller\admin.php [ 21 ]
2012-02-27 19:59:09 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ APPPATH\classes\controller\admin.php [ 21 ]
--
#0 D:\sites\booklist\www\application\classes\controller\admin.php(21): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\sites\bookli...', 21, Array)
#1 [internal function]: Controller_Admin->action_book()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-27 20:01:12 --- ERROR: ErrorException [ 2 ]: move_uploaded_file(/img/18.jpg): failed to open stream: No such file or directory ~ APPPATH\classes\controller\admin.php [ 21 ]
2012-02-27 20:01:12 --- STRACE: ErrorException [ 2 ]: move_uploaded_file(/img/18.jpg): failed to open stream: No such file or directory ~ APPPATH\classes\controller\admin.php [ 21 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'D:\sites\bookli...', 21, Array)
#1 D:\sites\booklist\www\application\classes\controller\admin.php(21): move_uploaded_file('C:\Windows\Temp...', '/img/18.jpg')
#2 [internal function]: Controller_Admin->action_book()
#3 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-02-27 20:02:43 --- ERROR: ErrorException [ 2 ]: move_uploaded_file(/img/19.jpg): failed to open stream: No such file or directory ~ APPPATH\classes\controller\admin.php [ 21 ]
2012-02-27 20:02:43 --- STRACE: ErrorException [ 2 ]: move_uploaded_file(/img/19.jpg): failed to open stream: No such file or directory ~ APPPATH\classes\controller\admin.php [ 21 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'D:\sites\bookli...', 21, Array)
#1 D:\sites\booklist\www\application\classes\controller\admin.php(21): move_uploaded_file('C:\Windows\Temp...', '/img/19.jpg')
#2 [internal function]: Controller_Admin->action_book()
#3 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-02-27 20:09:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: success ~ APPPATH\views\admin\book.php [ 43 ]
2012-02-27 20:09:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: success ~ APPPATH\views\admin\book.php [ 43 ]
--
#0 D:\sites\booklist\www\application\views\admin\book.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 43, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\application\classes\controller\admin.php(29): Kohana_View->__toString()
#5 [internal function]: Controller_Admin->action_book()
#6 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-02-27 20:16:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Книга не найдена ~ APPPATH\classes\controller\catalog.php [ 46 ]
2012-02-27 20:16:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Книга не найдена ~ APPPATH\classes\controller\catalog.php [ 46 ]
--
#0 [internal function]: Controller_Catalog->action_book()
#1 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Catalog))
#2 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#5 {main}
2012-02-27 23:43:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH\classes\model\author.php [ 8 ]
2012-02-27 23:43:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH\classes\model\author.php [ 8 ]
2012-02-27 23:43:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH\classes\model\author.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-27 23:43:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH\classes\model\author.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-27 23:45:13 --- ERROR: ErrorException [ 8 ]: Undefined index: author_id ~ APPPATH\views\admin\book.php [ 81 ]
2012-02-27 23:45:13 --- STRACE: ErrorException [ 8 ]: Undefined index: author_id ~ APPPATH\views\admin\book.php [ 81 ]
--
#0 D:\sites\booklist\www\application\views\admin\book.php(81): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\sites\bookli...', 81, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\application\classes\controller\admin.php(36): Kohana_View->__toString()
#5 [internal function]: Controller_Admin->action_book()
#6 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#10 {main}