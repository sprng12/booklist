<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-02 16:06:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\template.php [ 18 ]
2012-02-02 16:06:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\template.php [ 18 ]
--
#0 D:\sites\booklist\www\application\views\template.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 18, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 D:\sites\booklist\www\application\classes\controller\common.php(19): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Common->after()
#6 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-02-02 16:06:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:06:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:08:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:08:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:09:55 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:09:55 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:09:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:09:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:11:07 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:07 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:11:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:11:09 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:09 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:11:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:11:29 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:29 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:11:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:11:30 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:30 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:11:31 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:31 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:11:31 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:31 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:32 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:32 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:11:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:11:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:11:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:11:32 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:32 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:11:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:11:32 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:32 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:11:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:11:32 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:32 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:11:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:11:33 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:33 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:11:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:11:33 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:33 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:11:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:11:34 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:34 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:34 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:34 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:11:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:11:34 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:34 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:11:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:11:35 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:35 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:36 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:36 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:36 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:36 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:36 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:36 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:36 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:36 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:36 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:36 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:36 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:36 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:37 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:37 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:37 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:37 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:37 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:37 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:37 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:37 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:37 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:37 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:37 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:37 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:37 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:37 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:37 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:37 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:37 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:37 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:37 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:37 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:37 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:37 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:11:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:11:37 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:37 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:11:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:11:37 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:37 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:38 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:38 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:38 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:38 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:38 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:38 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:38 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:38 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:38 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:38 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:38 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:38 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:38 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:38 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:38 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:38 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:38 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:38 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:38 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:38 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:38 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:38 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:38 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:38 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:38 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:38 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:38 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:38 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:38 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:38 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:38 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
2012-02-02 16:11:38 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\form.php [ 19 ]
--
#0 D:\sites\booklist\www\application\classes\controller\form.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\sites\bookli...', 19, Array)
#1 [internal function]: Controller_Form->action_form()
#2 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Form))
#3 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\booklist\www\application\classes\controller\common.php(10): Kohana_Request->execute()
#6 [internal function]: Controller_Common->before()
#7 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-02 16:11:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:11:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:12:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:12:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:12:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:12:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:13:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:13:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:13:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:13:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:13:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:13:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:13:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:13:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:13:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:13:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:14:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:14:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:14:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:14:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:14:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:14:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:14:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:14:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:14:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:14:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:15:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:15:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:15:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:15:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:15:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:15:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:17:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:17:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:17:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:17:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:17:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:17:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:17:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:17:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:17:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:17:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:18:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:18:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:21:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:21:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:21:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:21:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:21:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:21:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:23:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:23:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:23:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:23:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:24:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:24:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:24:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:24:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:24:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ololo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-02 16:24:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ololo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-02 16:24:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:24:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:24:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:24:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:26:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:26:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:26:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:26:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:26:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:26:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:26:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:26:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:26:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:26:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:26:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:26:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:27:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:27:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:27:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:27:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:27:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:27:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:28:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:28:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:28:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:28:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:28:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:28:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:28:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:28:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:28:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:28:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:28:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:28:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:28:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:28:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:28:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:28:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:28:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:28:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:28:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:28:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:28:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:28:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:30:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:30:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:30:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:30:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:32:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:32:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:32:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:32:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:32:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:32:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:33:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:33:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:34:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:34:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:35:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: script ~ APPPATH\views\template.php [ 18 ]
2012-02-02 16:35:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: script ~ APPPATH\views\template.php [ 18 ]
--
#0 D:\sites\booklist\www\application\views\template.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 18, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 D:\sites\booklist\www\application\classes\controller\common.php(25): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Common->after()
#6 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-02-02 16:35:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:35:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:35:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: script ~ APPPATH\views\template.php [ 18 ]
2012-02-02 16:35:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: script ~ APPPATH\views\template.php [ 18 ]
--
#0 D:\sites\booklist\www\application\views\template.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 18, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 D:\sites\booklist\www\application\classes\controller\common.php(25): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Common->after()
#6 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-02-02 16:35:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:35:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:35:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: script ~ APPPATH\views\template.php [ 18 ]
2012-02-02 16:35:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: script ~ APPPATH\views\template.php [ 18 ]
--
#0 D:\sites\booklist\www\application\views\template.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 18, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 D:\sites\booklist\www\application\classes\controller\common.php(25): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Common->after()
#6 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-02-02 16:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:35:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: script ~ APPPATH\views\template.php [ 18 ]
2012-02-02 16:35:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: script ~ APPPATH\views\template.php [ 18 ]
--
#0 D:\sites\booklist\www\application\views\template.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 18, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 D:\sites\booklist\www\application\classes\controller\common.php(25): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Common->after()
#6 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-02-02 16:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:35:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: script ~ APPPATH\views\template.php [ 18 ]
2012-02-02 16:35:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: script ~ APPPATH\views\template.php [ 18 ]
--
#0 D:\sites\booklist\www\application\views\template.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 18, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 D:\sites\booklist\www\application\classes\controller\common.php(25): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Common->after()
#6 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-02-02 16:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:35:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: script ~ APPPATH\views\template.php [ 18 ]
2012-02-02 16:35:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: script ~ APPPATH\views\template.php [ 18 ]
--
#0 D:\sites\booklist\www\application\views\template.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 18, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 D:\sites\booklist\www\application\classes\controller\common.php(25): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Common->after()
#6 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-02-02 16:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:35:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\template.php [ 18 ]
2012-02-02 16:35:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\template.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-02 16:35:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:35:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:36:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:36:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:37:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:37:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:37:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:37:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:38:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting T_VARIABLE or '$' ~ APPPATH\views\template.php [ 18 ]
2012-02-02 16:38:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting T_VARIABLE or '$' ~ APPPATH\views\template.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-02 16:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:38:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:38:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:38:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:38:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:39:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:39:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:39:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:39:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:44:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:44:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:46:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:46:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:46:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:46:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:46:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:46:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:46:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:46:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:46:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:46:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:46:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:46:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:46:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:46:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:46:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:46:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:46:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:46:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:46:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:46:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:46:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:46:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:46:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:46:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:46:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:46:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:46:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:46:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:46:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:46:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:46:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:46:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:46:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:46:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:46:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:46:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:46:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:46:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:46:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:46:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:46:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:46:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:46:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:46:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:47:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:47:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:47:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:47:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:47:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:47:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:47:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:47:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:47:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:47:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:48:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:48:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:48:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:48:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:48:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:48:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\template.php [ 18 ]
2012-02-02 16:48:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\template.php [ 18 ]
--
#0 D:\sites\booklist\www\application\views\template.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\bookli...', 18, Array)
#1 D:\sites\booklist\www\system\classes\kohana\view.php(61): include('D:\sites\bookli...')
#2 D:\sites\booklist\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\bookli...', Array)
#3 D:\sites\booklist\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 D:\sites\booklist\www\application\classes\controller\common.php(24): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Common->after()
#6 D:\sites\booklist\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Catalog))
#7 D:\sites\booklist\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\sites\booklist\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-02-02 16:48:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:48:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:49:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:49:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:49:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:50:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:50:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:50:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:50:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:50:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:50:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:50:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:50:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:50:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:50:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:51:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:51:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:51:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:51:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:51:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:51:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:52:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:52:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:54:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:54:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:54:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:54:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:54:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:54:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:54:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:54:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:54:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:54:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:55:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:55:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:55:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:55:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:55:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:55:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:58:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:58:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 16:59:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 16:59:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:02:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:02:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:03:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:03:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:03:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:03:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:03:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:03:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:03:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:03:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:06:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:06:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:07:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:07:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:07:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:07:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:08:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:08:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:09:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:09:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:11:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:11:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:12:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:12:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:14:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:14:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:14:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:14:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:14:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:14:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:15:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:15:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:16:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:16:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:16:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:16:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:17:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:17:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:17:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:17:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:17:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:17:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:17:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:17:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:17:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:17:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:18:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:18:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:18:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:18:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:20:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:20:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:23:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:23:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:23:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:23:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:23:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:23:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 17:23:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 17:23:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:24:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:24:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:25:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:25:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:25:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:25:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:25:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:25:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:25:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:25:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:25:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:25:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:25:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:25:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:25:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:25:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:26:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:26:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:26:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:26:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:26:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:26:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:27:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:27:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:27:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:27:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:28:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:28:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:28:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:28:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:30:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:30:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:31:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:31:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:31:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:31:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:34:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:34:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:34:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:34:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:34:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:34:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:35:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:35:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:35:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:35:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:36:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:36:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:37:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:37:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 18:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 18:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 19:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 19:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 19:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 19:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 19:34:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 19:34:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 19:34:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 19:34:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 19:35:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 19:35:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 19:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 19:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 19:35:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 19:35:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/book/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 19:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 19:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-02 19:40:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-02 19:40:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\sites\booklist\www\index.php(109): Kohana_Request->execute()
#1 {main}