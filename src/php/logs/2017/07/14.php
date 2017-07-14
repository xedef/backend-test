<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-07-14 12:21:45 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ APPPATH/vendor/kohana/core/classes/Kohana/Cookie.php [ 158 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Cookie.php:67
2017-07-14 12:21:45 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('ajs_anonymous_i...', NULL)
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(151): Kohana_Cookie::get('ajs_anonymous_i...')
#2 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(301): Kohana_Request::factory('', Array, false)
#3 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Cookie.php:67
2017-07-14 12:25:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: salt ~ APPPATH/bootstrap.php [ 31 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/bootstrap.php:31
2017-07-14 12:25:13 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/bootstrap.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rafaelde...', 31, Array)
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(2): require_once('/Users/rafaelde...')
#2 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/bootstrap.php:31
2017-07-14 12:25:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: salt ~ APPPATH/bootstrap.php [ 31 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/bootstrap.php:31
2017-07-14 12:25:44 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/bootstrap.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rafaelde...', 31, Array)
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(2): require_once('/Users/rafaelde...')
#2 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/bootstrap.php:31
2017-07-14 12:25:55 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ APPPATH/vendor/kohana/core/classes/Kohana/Cookie.php [ 158 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Cookie.php:67
2017-07-14 12:25:55 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('ajs_anonymous_i...', NULL)
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(151): Kohana_Cookie::get('ajs_anonymous_i...')
#2 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(301): Kohana_Request::factory('', Array, false)
#3 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Cookie.php:67
2017-07-14 13:05:18 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_Result_Cached could not be converted to string ~ APPPATH/index.php [ 65 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php:65
2017-07-14 13:05:18 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(65): Kohana_Core::error_handler(4096, 'Object of class...', '/Users/rafaelde...', 65, Array)
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Controller.php(84): Controller_API->action_venue()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#4 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(297): Kohana_Request->execute()
#7 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php:65
2017-07-14 13:05:48 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_Result_Cached could not be converted to string ~ APPPATH/index.php [ 65 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php:65
2017-07-14 13:05:48 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(65): Kohana_Core::error_handler(4096, 'Object of class...', '/Users/rafaelde...', 65, Array)
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Controller.php(84): Controller_API->action_venue()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#4 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(298): Kohana_Request->execute()
#7 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php:65
2017-07-14 13:10:53 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1 near ")": syntax error [ SELECT venue.id AS id, venue.name AS name FROM venues AS venue JOIN Item ON () WHERE id = 10009 ] ~ APPPATH/modules/database/classes/Kohana/Database/PDO.php [ 157 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php:251
2017-07-14 13:10:53 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT venue.id...', 'Model_Venue', Array)
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(66): Kohana_ORM->find_all()
#4 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Controller.php(84): Controller_API->action_venue()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#7 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(300): Kohana_Request->execute()
#10 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php:251
2017-07-14 13:11:16 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1 near "VENUE": syntax error [ SELECT venue.id AS id, venue.name AS name FROM venues AS venue VENUE.ID JOIN Item ON () WHERE id = 10009 ] ~ APPPATH/modules/database/classes/Kohana/Database/PDO.php [ 157 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php:251
2017-07-14 13:11:16 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT venue.id...', 'Model_Venue', Array)
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(66): Kohana_ORM->find_all()
#4 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Controller.php(84): Controller_API->action_venue()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#7 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(300): Kohana_Request->execute()
#10 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php:251
2017-07-14 13:11:18 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1 near "VENUE": syntax error [ SELECT venue.id AS id, venue.name AS name FROM venues AS venue VENUE.ID JOIN Item ON () WHERE id = 10009 ] ~ APPPATH/modules/database/classes/Kohana/Database/PDO.php [ 157 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php:251
2017-07-14 13:11:18 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT venue.id...', 'Model_Venue', Array)
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(66): Kohana_ORM->find_all()
#4 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Controller.php(84): Controller_API->action_venue()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#7 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(300): Kohana_Request->execute()
#10 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php:251
2017-07-14 13:11:20 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1 near "VENUE": syntax error [ SELECT venue.id AS id, venue.name AS name FROM venues AS venue VENUE.ID JOIN Item ON () WHERE id = 10009 ] ~ APPPATH/modules/database/classes/Kohana/Database/PDO.php [ 157 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php:251
2017-07-14 13:11:20 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT venue.id...', 'Model_Venue', Array)
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(66): Kohana_ORM->find_all()
#4 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Controller.php(84): Controller_API->action_venue()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#7 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(300): Kohana_Request->execute()
#10 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php:251
2017-07-14 13:11:53 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1 no such table: Item [ SELECT venue.id AS id, venue.name AS name FROM venues AS venue JOIN Item ON (Venue.id = Item.id) WHERE id = 10009 ] ~ APPPATH/modules/database/classes/Kohana/Database/PDO.php [ 157 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php:251
2017-07-14 13:11:53 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT venue.id...', 'Model_Venue', Array)
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(67): Kohana_ORM->find_all()
#4 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Controller.php(84): Controller_API->action_venue()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#7 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(301): Kohana_Request->execute()
#10 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php:251
2017-07-14 13:12:17 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1 ambiguous column name: id [ SELECT venue.id AS id, venue.name AS name FROM venues AS venue JOIN items ON (Venue.id = Item.id) WHERE id = 10009 ] ~ APPPATH/modules/database/classes/Kohana/Database/PDO.php [ 157 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php:251
2017-07-14 13:12:17 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT venue.id...', 'Model_Venue', Array)
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(67): Kohana_ORM->find_all()
#4 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Controller.php(84): Controller_API->action_venue()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#7 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(301): Kohana_Request->execute()
#10 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php:251
2017-07-14 13:12:20 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1 ambiguous column name: id [ SELECT venue.id AS id, venue.name AS name FROM venues AS venue JOIN items ON (Venue.id = Item.id) WHERE id = 10009 ] ~ APPPATH/modules/database/classes/Kohana/Database/PDO.php [ 157 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php:251
2017-07-14 13:12:20 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT venue.id...', 'Model_Venue', Array)
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(67): Kohana_ORM->find_all()
#4 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Controller.php(84): Controller_API->action_venue()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#7 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(301): Kohana_Request->execute()
#10 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php:251
2017-07-14 13:13:27 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1 ambiguous column name: id [ SELECT venue.id AS id, venue.name AS name FROM venues AS venue JOIN items ON (Venue.id = Item.id) WHERE id = 10009 ] ~ APPPATH/modules/database/classes/Kohana/Database/PDO.php [ 157 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php:251
2017-07-14 13:13:27 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT venue.id...', 'Model_Venue', Array)
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(67): Kohana_ORM->find_all()
#4 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Controller.php(84): Controller_API->action_venue()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#7 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(301): Kohana_Request->execute()
#10 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php:251
2017-07-14 13:13:41 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1 near "ITEM": syntax error [ SELECT venue.id AS id, venue.name AS name FROM venues AS venue ITEM JOIN items ON (Venue.id = Item.id) WHERE id = 10009 ] ~ APPPATH/modules/database/classes/Kohana/Database/PDO.php [ 157 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php:251
2017-07-14 13:13:41 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT venue.id...', 'Model_Venue', Array)
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(67): Kohana_ORM->find_all()
#4 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Controller.php(84): Controller_API->action_venue()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#7 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(301): Kohana_Request->execute()
#10 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php:251
2017-07-14 13:13:51 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1 ambiguous column name: id [ SELECT venue.id AS id, venue.name AS name FROM venues AS venue INNER JOIN items ON (Venue.id = Item.id) WHERE id = 10009 ] ~ APPPATH/modules/database/classes/Kohana/Database/PDO.php [ 157 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php:251
2017-07-14 13:13:51 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT venue.id...', 'Model_Venue', Array)
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(67): Kohana_ORM->find_all()
#4 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Controller.php(84): Controller_API->action_venue()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#7 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(301): Kohana_Request->execute()
#10 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php:251
2017-07-14 13:13:58 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1 ambiguous column name: id [ SELECT venue.id AS id, venue.name AS name FROM venues AS venue INNER JOIN items as Item ON (Venue.id = Item.id) WHERE id = 10009 ] ~ APPPATH/modules/database/classes/Kohana/Database/PDO.php [ 157 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php:251
2017-07-14 13:13:58 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT venue.id...', 'Model_Venue', Array)
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(67): Kohana_ORM->find_all()
#4 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Controller.php(84): Controller_API->action_venue()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#7 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(301): Kohana_Request->execute()
#10 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/database/classes/Kohana/Database/Query.php:251
2017-07-14 13:22:26 --- EMERGENCY: Kohana_Exception [ 0 ]: The find_all property does not exist in the Model_Venue class ~ APPPATH/modules/orm/classes/Kohana/ORM.php [ 687 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php:603
2017-07-14 13:22:26 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('find_all')
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(67): Kohana_ORM->__get('find_all')
#2 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Controller.php(84): Controller_API->action_venue()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#5 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(301): Kohana_Request->execute()
#8 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php:603
2017-07-14 13:32:42 --- EMERGENCY: Kohana_Exception [ 0 ]: The item property does not exist in the Model_Venue class ~ APPPATH/modules/orm/classes/Kohana/ORM.php [ 687 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php:603
2017-07-14 13:32:42 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('item')
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(66): Kohana_ORM->__get('item')
#2 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Controller.php(84): Controller_API->action_venue()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#5 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(299): Kohana_Request->execute()
#8 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php:603
2017-07-14 13:32:50 --- EMERGENCY: Kohana_Exception [ 0 ]: The Item property does not exist in the Model_Venue class ~ APPPATH/modules/orm/classes/Kohana/ORM.php [ 687 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php:603
2017-07-14 13:32:50 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('Item')
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(66): Kohana_ORM->__get('Item')
#2 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Controller.php(84): Controller_API->action_venue()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#5 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(299): Kohana_Request->execute()
#8 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php:603
2017-07-14 13:32:51 --- EMERGENCY: Kohana_Exception [ 0 ]: The Item property does not exist in the Model_Venue class ~ APPPATH/modules/orm/classes/Kohana/ORM.php [ 687 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php:603
2017-07-14 13:32:51 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('Item')
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(66): Kohana_ORM->__get('Item')
#2 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Controller.php(84): Controller_API->action_venue()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#5 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(299): Kohana_Request->execute()
#8 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php:603
2017-07-14 13:32:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/index.php [ 68 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php:68
2017-07-14 13:32:56 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(68): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rafaelde...', 68, Array)
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Controller.php(84): Controller_API->action_venue()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#4 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(299): Kohana_Request->execute()
#7 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php:68
2017-07-14 13:32:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/index.php [ 68 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php:68
2017-07-14 13:32:58 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(68): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rafaelde...', 68, Array)
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Controller.php(84): Controller_API->action_venue()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#4 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(299): Kohana_Request->execute()
#7 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php:68
2017-07-14 13:39:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$space ~ APPPATH/index.php [ 70 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php:70
2017-07-14 13:39:25 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(70): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/rafaelde...', 70, Array)
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Controller.php(84): Controller_API->action_venue()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#4 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(305): Kohana_Request->execute()
#7 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php:70
2017-07-14 13:51:08 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant a - assumed 'a' ~ APPPATH/index.php [ 51 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php:51
2017-07-14 13:51:08 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(51): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/rafaelde...', 51, Array)
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Controller.php(84): Controller_API->action_venue()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#4 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php:51
2017-07-14 13:51:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/index.php [ 51 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php:51
2017-07-14 13:51:15 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rafaelde...', 51, Array)
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Controller.php(84): Controller_API->action_venue()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#4 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php:51
2017-07-14 13:51:44 --- EMERGENCY: Kohana_Exception [ 0 ]: The item property does not exist in the Model_Venue class ~ APPPATH/modules/orm/classes/Kohana/ORM.php [ 687 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php:603
2017-07-14 13:51:44 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('item')
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(41): Kohana_ORM->__get('item')
#2 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Controller.php(84): Controller_API->action_venue()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#5 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php:603
2017-07-14 13:52:14 --- EMERGENCY: Kohana_Exception [ 0 ]: The item property does not exist in the Model_Venue class ~ APPPATH/modules/orm/classes/Kohana/ORM.php [ 687 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php:603
2017-07-14 13:52:14 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('item')
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(41): Kohana_ORM->__get('item')
#2 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Controller.php(84): Controller_API->action_venue()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#5 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php:603
2017-07-14 13:54:01 --- EMERGENCY: Kohana_Exception [ 0 ]: The item property does not exist in the Model_Venue class ~ APPPATH/modules/orm/classes/Kohana/ORM.php [ 687 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php:603
2017-07-14 13:54:01 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('item')
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(41): Kohana_ORM->__get('item')
#2 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Controller.php(84): Controller_API->action_venue()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#5 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php:603
2017-07-14 13:54:04 --- EMERGENCY: Kohana_Exception [ 0 ]: The item property does not exist in the Model_Venue class ~ APPPATH/modules/orm/classes/Kohana/ORM.php [ 687 ] in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php:603
2017-07-14 13:54:04 --- DEBUG: #0 /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('item')
#1 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(41): Kohana_ORM->__get('item')
#2 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Controller.php(84): Controller_API->action_venue()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#5 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rafaeldelboni/Workspace/backend-test/src/php/vendor/kohana/core/classes/Kohana/Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rafaeldelboni/Workspace/backend-test/src/php/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/rafaeldelboni/Workspace/backend-test/src/php/modules/orm/classes/Kohana/ORM.php:603