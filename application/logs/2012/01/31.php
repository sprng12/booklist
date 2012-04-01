<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-31 00:04:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:04:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:04:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:04:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:04:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:04:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:04:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:04:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:11:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:11:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:11:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:11:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:11:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:11:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:11:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:11:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:11:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:11:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:11:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:11:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:11:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:11:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:11:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:11:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:11:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\views\template.php [ 44 ]
2012-01-31 00:11:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\views\template.php [ 44 ]
--
#0 D:\sites\booklist\www\application\views\template.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 44, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-31 00:11:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:11:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:11:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: response ~ APPPATH\classes\controller\main.php [ 19 ]
2012-01-31 00:11:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: response ~ APPPATH\classes\controller\main.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\main.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Main->action_index()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-31 00:11:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:11:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:12:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:12:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:12:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:12:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:14:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:14:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:14:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:14:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:14:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:14:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:14:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:14:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:14:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:14:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:14:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:14:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:14:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:14:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:14:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:14:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:14:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:14:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:14:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:14:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:14:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:14:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:14:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:14:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:14:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:14:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:14:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:14:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:15:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:15:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:15:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:15:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:15:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:15:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:15:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:15:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:15:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:15:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:15:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:15:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:15:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:15:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:15:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:15:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:15:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:15:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:15:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:15:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:15:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:15:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:15:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:15:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:15:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:15:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:15:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:15:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:15:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:15:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:15:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:15:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:15:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:15:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:15:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:15:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:15:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:15:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:15:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:15:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:15:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:15:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:18:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:18:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:18:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:18:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:18:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:18:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:18:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:18:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:18:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:18:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:18:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:18:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:18:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:18:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:19:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:19:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:19:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:19:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:19:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:19:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(17): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:19:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:19:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:19:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:19:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(17): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:19:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:19:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:19:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:19:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(17): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:19:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:19:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:21:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:21:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:21:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:21:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:21:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
2012-01-31 00:21:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\template.php [ 36 ]
--
#0 D:\sites\booklist\www\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 36, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\application\classes\controller\main.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Main->action_index()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 00:21:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:21:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:21:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:21:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:23:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:23:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:23:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:23:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:25:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:25:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:25:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:25:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:26:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:26:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:27:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\views\template.php [ 44 ]
2012-01-31 00:27:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\views\template.php [ 44 ]
--
#0 D:\sites\booklist\www\application\views\template.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 44, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-31 00:27:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:27:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:27:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\views\template.php [ 44 ]
2012-01-31 00:27:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\views\template.php [ 44 ]
--
#0 D:\sites\booklist\www\application\views\template.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 44, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-31 00:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:28:23 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\main.php [ 10 ]
2012-01-31 00:28:23 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\main.php [ 10 ]
--
#0 D:\sites\booklist\www\application\classes\controller\main.php(10): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\sites\bookli...', 10, Array)
#1 [internal function]: Controller_Main->before()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-31 00:28:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:28:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:29:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:29:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:30:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:30:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:30:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\views\template.php [ 44 ]
2012-01-31 00:30:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\views\template.php [ 44 ]
--
#0 D:\sites\booklist\www\application\views\template.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 44, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-31 00:30:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:30:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:31:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:31:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:32:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:32:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:37:31 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Common' not found ~ APPPATH\classes\controller\main.php [ 3 ]
2012-01-31 00:37:31 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Common' not found ~ APPPATH\classes\controller\main.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-31 00:37:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:37:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:38:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:38:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:39:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:39:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:39:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\views\template.php [ 44 ]
2012-01-31 00:39:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\views\template.php [ 44 ]
--
#0 D:\sites\booklist\www\application\views\template.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 44, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-31 00:39:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:39:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL form/form was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-31 00:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL form/form was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#3 [internal function]: Controller_Common->before()
#4 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#5 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-31 00:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:45:12 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\common.php [ 12 ]
2012-01-31 00:45:12 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\common.php [ 12 ]
--
#0 D:\sites\booklist\www\application\classes\controller\common.php(12): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\sites\bookli...', 12, Array)
#1 [internal function]: Controller_Common->before()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-31 00:45:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:45:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:45:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:45:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:45:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:45:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:45:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:45:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 00:45:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 00:45:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 01:20:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 01:20:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 01:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 01:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 01:20:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 01:20:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 01:20:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 01:20:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 10:51:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 10:51:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 10:51:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 10:51:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 10:51:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 10:51:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 19:09:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 19:09:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 19:10:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 19:10:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 19:33:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 19:33:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 19:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 19:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 19:49:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 19:49:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 19:49:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 19:49:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 19:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 19:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 19:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 19:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 19:50:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-01-31 19:50:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-31 19:50:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 19:50:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 19:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 19:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 19:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 19:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 19:50:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 19:50:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 19:51:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 19:51:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 19:53:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 19:53:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 19:53:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 19:53:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 19:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 19:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 19:55:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 19:55:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 19:55:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 19:55:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 19:56:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 19:56:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 19:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 19:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 19:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 19:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 19:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 19:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 19:58:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 19:58:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:00:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:00:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:04:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:04:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:04:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:04:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:04:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:05:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:05:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:06:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:06:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:06:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:06:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:06:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:06:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:06:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:06:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:06:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:06:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:06:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:06:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:06:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:06:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:06:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:06:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:06:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:06:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:07:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:07:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:07:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:07:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:07:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:07:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:07:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:07:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:07:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:07:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:08:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:08:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:16:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:16:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:16:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:16:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:18:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:18:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:18:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:18:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:18:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:18:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:18:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:18:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:18:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:18:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:18:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:18:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:18:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:18:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:19:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:19:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:19:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:19:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:19:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:19:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:19:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:19:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:20:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:20:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:21:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:21:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:21:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:21:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:22:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:22:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:22:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:22:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:22:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:22:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:22:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:22:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:22:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:22:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:23:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:23:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:23:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:23:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:23:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:23:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:23:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:23:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:23:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:23:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:24:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:24:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:24:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:24:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:25:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:25:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:25:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:25:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:26:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:26:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:26:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:26:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:26:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:26:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:27:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:27:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:32:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:32:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 20:32:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 20:32:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 21:22:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ].php [ 1126 ]
2012-01-31 21:22:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 21:22:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 21:29:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 21:29:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 21:39:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 21:39:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 21:39:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 21:39:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 21:41:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 21:41:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 21:44:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 21:44:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 21:45:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 21:45:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 21:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 21:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 21:45:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 21:45:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 21:46:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 21:46:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 21:46:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 21:46:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 21:51:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 21:51:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 21:51:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 21:51:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 21:55:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 21:55:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 21:55:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 21:55:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 21:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 21:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 21:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 21:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 21:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 21:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 21:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 21:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 21:58:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 21:58:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 21:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 21:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:00:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:00:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:00:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:00:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:01:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:01:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:19:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:19:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:19:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:19:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:20:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:20:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:22:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:22:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:23:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:23:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:23:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:23:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:24:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:24:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:25:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:25:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:26:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:26:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:26:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:26:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:27:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:27:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:28:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:28:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:29:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:29:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:30:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:30:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:35:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:35:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:49:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\main.php [ 5 ]
2012-01-31 22:49:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\main.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-31 22:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:49:45 --- ERROR: ErrorException [ 2 ]: array_slice() expects parameter 1 to be array, object given ~ APPPATH\views\main.php [ 5 ]
2012-01-31 22:49:45 --- STRACE: ErrorException [ 2 ]: array_slice() expects parameter 1 to be array, object given ~ APPPATH\views\main.php [ 5 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_slice() e...', 'D:\sites\bookli...', 5, Array)
#1 D:\sites\booklist\www\application\views\main.php(5): array_slice(Object(Database_MySQL_Result), 0, 3)
#2 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#3 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#4 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\sites\booklist\www\application\views\template.php(72): Kohana_View->__toString()
#6 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#7 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#8 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 22:49:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:49:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:50:44 --- ERROR: ErrorException [ 2 ]: array_slice() expects parameter 1 to be array, object given ~ APPPATH\views\main.php [ 5 ]
2012-01-31 22:50:44 --- STRACE: ErrorException [ 2 ]: array_slice() expects parameter 1 to be array, object given ~ APPPATH\views\main.php [ 5 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_slice() e...', 'D:\sites\bookli...', 5, Array)
#1 D:\sites\booklist\www\application\views\main.php(5): array_slice(Object(Database_MySQL_Result), 0, 3, true)
#2 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#3 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#4 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\sites\booklist\www\application\views\template.php(72): Kohana_View->__toString()
#6 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#7 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#8 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-31 22:50:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:50:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:51:50 --- ERROR: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
2012-01-31 22:51:50 --- STRACE: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'D:\sites\bookli...', 33, Array)
#1 D:\sites\booklist\www\modules\database\classes\kohana\database\mysql\result.php(33): mysql_data_seek(Resource id #89, 'description')
#2 D:\sites\booklist\www\modules\database\classes\kohana\database\result.php(236): Kohana_Database_MySQL_Result->seek('description')
#3 D:\sites\booklist\www\application\views\main.php(5): Kohana_Database_Result->offsetGet('description')
#4 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#5 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#6 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#7 D:\sites\booklist\www\application\views\template.php(72): Kohana_View->__toString()
#8 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#9 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#10 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#11 [internal function]: Kohana_Controller_Template->after()
#12 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#13 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#16 {main}
2012-01-31 22:51:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:51:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:53:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:53:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:54:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:54:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:55:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:55:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:55:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\form\account.php [ 1 ]
2012-01-31 22:55:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\form\account.php [ 1 ]
--
#0 D:\sites\booklist\www\application\views\form\account.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 1, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\sites\booklist\www\application\classes\controller\form.php(16): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Form->action_form()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\application\classes\controller\common.php(9): Kohana_Request->execute()
#11 [internal function]: Controller_Common->before()
#12 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#13 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#16 {main}
2012-01-31 22:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:55:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:55:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:59:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:59:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 22:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 22:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:02:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:02:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:04:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:04:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:04:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:04:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:05:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:05:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:08:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:08:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:09:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:09:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:11:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:11:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:11:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:11:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:12:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:12:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:12:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:12:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:12:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:12:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:17:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:17:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:17:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:17:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:17:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:17:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:17:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:17:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:18:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:18:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:24:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:24:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:26:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:26:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:32:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:32:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:32:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:32:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:33:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:33:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:33:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:33:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:33:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:33:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:34:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:34:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:34:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:34:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:35:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:35:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:35:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: current_url ~ APPPATH\classes\controller\auth.php [ 26 ]
2012-01-31 23:35:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: current_url ~ APPPATH\classes\controller\auth.php [ 26 ]
--
#0 D:\sites\booklist\www\application\classes\controller\auth.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 26, Array)
#1 [internal function]: Controller_Auth->action_index()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-31 23:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:36:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:36:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:36:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:36:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:36:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: current_url ~ APPPATH\classes\controller\auth.php [ 26 ]
2012-01-31 23:36:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: current_url ~ APPPATH\classes\controller\auth.php [ 26 ]
--
#0 D:\sites\booklist\www\application\classes\controller\auth.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 26, Array)
#1 [internal function]: Controller_Auth->action_index()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-31 23:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:39:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\auth.php [ 26 ]
2012-01-31 23:39:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\auth.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-31 23:39:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:39:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:41:50 --- ERROR: Kohana_Exception [ 0 ]: The FirePHP firephp/packages/core/lib/FirePHPCore/FirePHP.class could not be found ~ MODPATH\debug_toolbar\init.php [ 7 ]
2012-01-31 23:41:50 --- STRACE: Kohana_Exception [ 0 ]: The FirePHP firephp/packages/core/lib/FirePHPCore/FirePHP.class could not be found ~ MODPATH\debug_toolbar\init.php [ 7 ]
--
#0 D:\sites\booklist\www\system\classes\kohana\core.php(565): require_once()
#1 D:\sites\booklist\www\application\bootstrap.php(109): Kohana_Core::modules(Array)
#2 D:\sites\booklist\www\index.php(102): require('D:\sites\bookli...')
#3 {main}
2012-01-31 23:41:50 --- ERROR: Kohana_Exception [ 0 ]: The FirePHP firephp/packages/core/lib/FirePHPCore/FirePHP.class could not be found ~ MODPATH\debug_toolbar\init.php [ 7 ]
2012-01-31 23:41:50 --- STRACE: Kohana_Exception [ 0 ]: The FirePHP firephp/packages/core/lib/FirePHPCore/FirePHP.class could not be found ~ MODPATH\debug_toolbar\init.php [ 7 ]
--
#0 D:\sites\booklist\www\system\classes\kohana\core.php(565): require_once()
#1 D:\sites\booklist\www\application\bootstrap.php(109): Kohana_Core::modules(Array)
#2 D:\sites\booklist\www\index.php(102): require('D:\sites\bookli...')
#3 {main}
2012-01-31 23:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:44:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:44:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:45:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:45:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:45:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:45:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:46:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:46:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:46:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:46:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:48:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:48:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:49:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:49:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:49:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:49:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:49:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:49:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:49:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:49:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:49:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:49:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:51:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:51:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:51:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:51:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:51:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:51:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:58:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:58:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:59:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:59:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-31 23:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-31 23:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}