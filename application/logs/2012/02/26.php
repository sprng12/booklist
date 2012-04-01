<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-26 15:07:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: stars ~ APPPATH\views\bookrow.php [ 8 ]
2012-02-26 15:07:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: stars ~ APPPATH\views\bookrow.php [ 8 ]
--
#0 D:\sites\booklist\www\application\views\bookrow.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 8, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\application\views\main.php(5): Kohana_View->__toString()
#5 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#6 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#7 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#8 D:\sites\booklist\www\application\views\template.php(78): Kohana_View->__toString()
#9 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#10 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#11 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#12 D:\sites\booklist\www\application\classes\controller\common.php(29): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Common->after()
#14 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#15 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#18 {main}
2012-02-26 15:07:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-26 15:07:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-26 15:07:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-26 15:07:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-26 17:50:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH\classes\controller\auth.php [ 52 ]
2012-02-26 17:50:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH\classes\controller\auth.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-26 17:51:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH\classes\controller\auth.php [ 53 ]
2012-02-26 17:51:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH\classes\controller\auth.php [ 53 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-26 17:51:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-26 17:51:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-26 17:51:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-26 17:51:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-26 17:51:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-26 17:51:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-26 17:51:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH\views\reg.php [ 79 ]
2012-02-26 17:51:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH\views\reg.php [ 79 ]
--
#0 D:\sites\booklist\www\application\views\reg.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 79, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\application\views\template.php(78): Kohana_View->__toString()
#5 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#6 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#7 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\sites\booklist\www\application\classes\controller\common.php(29): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Common->after()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-02-26 17:54:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH\views\reg.php [ 79 ]
2012-02-26 17:54:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH\views\reg.php [ 79 ]
--
#0 D:\sites\booklist\www\application\views\reg.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 79, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\application\views\template.php(78): Kohana_View->__toString()
#5 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#6 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#7 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\sites\booklist\www\application\classes\controller\common.php(29): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Common->after()
#10 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#11 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-02-26 18:52:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL auth/reg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-02-26 18:52:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL auth/reg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-26 18:57:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\controller\auth.php [ 87 ]
2012-02-26 18:57:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\controller\auth.php [ 87 ]
--
#0 D:\sites\booklist\www\application\classes\controller\auth.php(87): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 87, Array)
#1 [internal function]: Controller_Auth->action_register()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-26 19:09:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-26 19:09:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-26 19:10:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\admin.php [ 19 ]
2012-02-26 19:10:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\admin.php [ 19 ]
--
#0 D:\sites\booklist\www\application\views\admin.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 19, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\application\classes\controller\admin.php(10): Kohana_View->__toString()
#5 [internal function]: Controller_Admin->action_index()
#6 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-02-26 19:10:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\admin.php [ 42 ]
2012-02-26 19:10:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: nav ~ APPPATH\views\admin.php [ 42 ]
--
#0 D:\sites\booklist\www\application\views\admin.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 42, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\application\classes\controller\admin.php(10): Kohana_View->__toString()
#5 [internal function]: Controller_Admin->action_index()
#6 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-02-26 19:11:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: best ~ APPPATH\views\admin.php [ 52 ]
2012-02-26 19:11:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: best ~ APPPATH\views\admin.php [ 52 ]
--
#0 D:\sites\booklist\www\application\views\admin.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 52, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\application\classes\controller\admin.php(10): Kohana_View->__toString()
#5 [internal function]: Controller_Admin->action_index()
#6 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-02-26 19:11:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin.php [ 43 ]
2012-02-26 19:11:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin.php [ 43 ]
--
#0 D:\sites\booklist\www\application\views\admin.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 43, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\booklist\www\application\classes\controller\admin.php(10): Kohana_View->__toString()
#5 [internal function]: Controller_Admin->action_index()
#6 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-02-26 19:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-26 19:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}