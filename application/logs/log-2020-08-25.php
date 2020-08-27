<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-08-25 02:19:23 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent C:\phpstudy\WWW\lucky\system\libraries\Session\Session.php 143
ERROR - 2020-08-25 03:02:33 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-08-25 03:06:02 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 03:06:02 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 03:06:02 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 03:06:10 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 03:06:10 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 03:06:10 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 03:12:55 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\dept\list.php 169
ERROR - 2020-08-25 03:12:55 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\dept\list.php 173
ERROR - 2020-08-25 03:23:12 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\dept\list.php 169
ERROR - 2020-08-25 03:23:12 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\dept\list.php 173
ERROR - 2020-08-25 03:23:15 --> Severity: Notice --> Undefined property: Role::$roleid C:\phpstudy\WWW\lucky\system\core\Model.php 73
ERROR - 2020-08-25 03:23:15 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 169
ERROR - 2020-08-25 03:23:15 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 173
ERROR - 2020-08-25 03:30:07 --> Severity: Notice --> Undefined property: Role::$roleid C:\phpstudy\WWW\lucky\system\core\Model.php 73
ERROR - 2020-08-25 03:30:07 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 169
ERROR - 2020-08-25 03:30:07 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 173
ERROR - 2020-08-25 03:30:26 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 03:30:26 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 03:30:26 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 03:31:54 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 03:31:54 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 03:31:54 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 03:32:52 --> 404 Page Not Found: Main/index
ERROR - 2020-08-25 03:33:58 --> 404 Page Not Found: Left/index
ERROR - 2020-08-25 03:45:41 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\dept\list.php 169
ERROR - 2020-08-25 03:45:41 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\dept\list.php 173
ERROR - 2020-08-25 03:45:43 --> Severity: Notice --> Undefined property: Role::$roleid C:\phpstudy\WWW\lucky\system\core\Model.php 73
ERROR - 2020-08-25 03:45:43 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 169
ERROR - 2020-08-25 03:45:43 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 173
ERROR - 2020-08-25 03:49:10 --> Severity: Notice --> Undefined property: Role::$roleid C:\phpstudy\WWW\lucky\system\core\Model.php 73
ERROR - 2020-08-25 03:49:10 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 169
ERROR - 2020-08-25 03:49:10 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 173
ERROR - 2020-08-25 03:50:43 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\dept\list.php 169
ERROR - 2020-08-25 03:50:43 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\dept\list.php 173
ERROR - 2020-08-25 03:56:20 --> Severity: error --> Exception: C:\phpstudy\WWW\lucky\application\models/Role_model.php exists, but doesn't declare class Role_model C:\phpstudy\WWW\lucky\system\core\Loader.php 340
ERROR - 2020-08-25 03:56:47 --> Query error: Unknown column 'role.mid' in 'on clause' - Invalid query: SELECT `role`.*, `manager`.`username`, `manager`.`nickname`, `dept`.`name` as `deptname`, `manager`.`is_del` as `m_is_del`
FROM `role`
LEFT JOIN `manager` ON `role`.`mid` = `manager`.`id`
LEFT JOIN `dept` ON `manager`.`deptid` = `dept`.`id`
WHERE `role`.`is_del` = '0'
ORDER BY `role`.`id` desc
 LIMIT 10
ERROR - 2020-08-25 03:58:20 --> Severity: Notice --> Undefined index: cphone C:\phpstudy\WWW\lucky\application\views\Role\list.php 96
ERROR - 2020-08-25 03:58:20 --> Severity: Notice --> Undefined index: cid C:\phpstudy\WWW\lucky\application\views\Role\list.php 97
ERROR - 2020-08-25 03:58:20 --> Severity: Notice --> Undefined index: m_is_del C:\phpstudy\WWW\lucky\application\views\Role\list.php 99
ERROR - 2020-08-25 03:58:20 --> Severity: Notice --> Undefined index: m_is_del C:\phpstudy\WWW\lucky\application\views\Role\list.php 106
ERROR - 2020-08-25 03:58:20 --> Severity: Notice --> Undefined index: deptname C:\phpstudy\WWW\lucky\application\views\Role\list.php 112
ERROR - 2020-08-25 03:58:20 --> Severity: Notice --> Undefined index: cphone C:\phpstudy\WWW\lucky\application\views\Role\list.php 96
ERROR - 2020-08-25 03:58:20 --> Severity: Notice --> Undefined index: cid C:\phpstudy\WWW\lucky\application\views\Role\list.php 97
ERROR - 2020-08-25 03:58:20 --> Severity: Notice --> Undefined index: m_is_del C:\phpstudy\WWW\lucky\application\views\Role\list.php 99
ERROR - 2020-08-25 03:58:20 --> Severity: Notice --> Undefined index: m_is_del C:\phpstudy\WWW\lucky\application\views\Role\list.php 106
ERROR - 2020-08-25 03:58:20 --> Severity: Notice --> Undefined index: deptname C:\phpstudy\WWW\lucky\application\views\Role\list.php 112
ERROR - 2020-08-25 03:58:20 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 186
ERROR - 2020-08-25 03:58:20 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 190
ERROR - 2020-08-25 04:03:06 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\dept\list.php 169
ERROR - 2020-08-25 04:03:06 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\dept\list.php 173
ERROR - 2020-08-25 04:03:21 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\dept\list.php 169
ERROR - 2020-08-25 04:03:21 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\dept\list.php 173
ERROR - 2020-08-25 05:02:14 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\dept\list.php 169
ERROR - 2020-08-25 05:02:14 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\dept\list.php 173
ERROR - 2020-08-25 06:08:12 --> Severity: error --> Exception: syntax error, unexpected ')' C:\phpstudy\WWW\lucky\application\views\left.php 2
ERROR - 2020-08-25 06:09:21 --> Severity: Notice --> Undefined index: cphone C:\phpstudy\WWW\lucky\application\views\Role\list.php 96
ERROR - 2020-08-25 06:09:21 --> Severity: Notice --> Undefined index: cid C:\phpstudy\WWW\lucky\application\views\Role\list.php 97
ERROR - 2020-08-25 06:09:21 --> Severity: Notice --> Undefined index: m_is_del C:\phpstudy\WWW\lucky\application\views\Role\list.php 99
ERROR - 2020-08-25 06:09:21 --> Severity: Notice --> Undefined index: m_is_del C:\phpstudy\WWW\lucky\application\views\Role\list.php 106
ERROR - 2020-08-25 06:09:21 --> Severity: Notice --> Undefined index: deptname C:\phpstudy\WWW\lucky\application\views\Role\list.php 112
ERROR - 2020-08-25 06:09:21 --> Severity: Notice --> Undefined index: cphone C:\phpstudy\WWW\lucky\application\views\Role\list.php 96
ERROR - 2020-08-25 06:09:21 --> Severity: Notice --> Undefined index: cid C:\phpstudy\WWW\lucky\application\views\Role\list.php 97
ERROR - 2020-08-25 06:09:21 --> Severity: Notice --> Undefined index: m_is_del C:\phpstudy\WWW\lucky\application\views\Role\list.php 99
ERROR - 2020-08-25 06:09:21 --> Severity: Notice --> Undefined index: m_is_del C:\phpstudy\WWW\lucky\application\views\Role\list.php 106
ERROR - 2020-08-25 06:09:21 --> Severity: Notice --> Undefined index: deptname C:\phpstudy\WWW\lucky\application\views\Role\list.php 112
ERROR - 2020-08-25 06:09:21 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 186
ERROR - 2020-08-25 06:09:21 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 190
ERROR - 2020-08-25 06:09:48 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\dept\list.php 169
ERROR - 2020-08-25 06:09:48 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\dept\list.php 173
ERROR - 2020-08-25 06:09:51 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\dept\list.php 169
ERROR - 2020-08-25 06:09:51 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\dept\list.php 173
ERROR - 2020-08-25 06:09:52 --> Severity: Notice --> Undefined index: cphone C:\phpstudy\WWW\lucky\application\views\Role\list.php 95
ERROR - 2020-08-25 06:09:52 --> Severity: Notice --> Undefined index: cid C:\phpstudy\WWW\lucky\application\views\Role\list.php 96
ERROR - 2020-08-25 06:09:52 --> Severity: Notice --> Undefined index: m_is_del C:\phpstudy\WWW\lucky\application\views\Role\list.php 98
ERROR - 2020-08-25 06:09:52 --> Severity: Notice --> Undefined index: m_is_del C:\phpstudy\WWW\lucky\application\views\Role\list.php 105
ERROR - 2020-08-25 06:09:52 --> Severity: Notice --> Undefined index: deptname C:\phpstudy\WWW\lucky\application\views\Role\list.php 111
ERROR - 2020-08-25 06:09:52 --> Severity: Notice --> Undefined index: cphone C:\phpstudy\WWW\lucky\application\views\Role\list.php 95
ERROR - 2020-08-25 06:09:52 --> Severity: Notice --> Undefined index: cid C:\phpstudy\WWW\lucky\application\views\Role\list.php 96
ERROR - 2020-08-25 06:09:52 --> Severity: Notice --> Undefined index: m_is_del C:\phpstudy\WWW\lucky\application\views\Role\list.php 98
ERROR - 2020-08-25 06:09:52 --> Severity: Notice --> Undefined index: m_is_del C:\phpstudy\WWW\lucky\application\views\Role\list.php 105
ERROR - 2020-08-25 06:09:52 --> Severity: Notice --> Undefined index: deptname C:\phpstudy\WWW\lucky\application\views\Role\list.php 111
ERROR - 2020-08-25 06:09:52 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 185
ERROR - 2020-08-25 06:09:52 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 189
ERROR - 2020-08-25 06:23:06 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 06:23:06 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 06:23:06 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 06:24:56 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 06:24:56 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 06:24:56 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 06:25:07 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\dept\list.php 169
ERROR - 2020-08-25 06:25:07 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\dept\list.php 173
ERROR - 2020-08-25 06:45:38 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\dept\list.php 169
ERROR - 2020-08-25 06:45:38 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\dept\list.php 173
ERROR - 2020-08-25 06:45:44 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\dept\list.php 169
ERROR - 2020-08-25 06:45:44 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\dept\list.php 173
ERROR - 2020-08-25 06:46:35 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\dept\list.php 169
ERROR - 2020-08-25 06:46:35 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\dept\list.php 173
ERROR - 2020-08-25 06:48:02 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\dept\list.php 169
ERROR - 2020-08-25 06:48:02 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\dept\list.php 173
ERROR - 2020-08-25 06:48:15 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\dept\list.php 169
ERROR - 2020-08-25 06:48:15 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\dept\list.php 173
ERROR - 2020-08-25 06:49:41 --> Query error: Unknown column 'mid' in 'where clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `role`
WHERE `is_del` = '0'
AND `mid` IN('14')
ERROR - 2020-08-25 06:49:50 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\dept\list.php 169
ERROR - 2020-08-25 06:49:50 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\dept\list.php 173
ERROR - 2020-08-25 06:50:07 --> Severity: Notice --> Undefined index: cphone C:\phpstudy\WWW\lucky\application\views\Role\list.php 95
ERROR - 2020-08-25 06:50:07 --> Severity: Notice --> Undefined index: cid C:\phpstudy\WWW\lucky\application\views\Role\list.php 96
ERROR - 2020-08-25 06:50:07 --> Severity: Notice --> Undefined index: m_is_del C:\phpstudy\WWW\lucky\application\views\Role\list.php 98
ERROR - 2020-08-25 06:50:07 --> Severity: Notice --> Undefined index: m_is_del C:\phpstudy\WWW\lucky\application\views\Role\list.php 105
ERROR - 2020-08-25 06:50:07 --> Severity: Notice --> Undefined index: deptname C:\phpstudy\WWW\lucky\application\views\Role\list.php 111
ERROR - 2020-08-25 06:50:07 --> Severity: Notice --> Undefined index: cphone C:\phpstudy\WWW\lucky\application\views\Role\list.php 95
ERROR - 2020-08-25 06:50:07 --> Severity: Notice --> Undefined index: cid C:\phpstudy\WWW\lucky\application\views\Role\list.php 96
ERROR - 2020-08-25 06:50:07 --> Severity: Notice --> Undefined index: m_is_del C:\phpstudy\WWW\lucky\application\views\Role\list.php 98
ERROR - 2020-08-25 06:50:07 --> Severity: Notice --> Undefined index: m_is_del C:\phpstudy\WWW\lucky\application\views\Role\list.php 105
ERROR - 2020-08-25 06:50:07 --> Severity: Notice --> Undefined index: deptname C:\phpstudy\WWW\lucky\application\views\Role\list.php 111
ERROR - 2020-08-25 06:50:07 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 185
ERROR - 2020-08-25 06:50:07 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 189
ERROR - 2020-08-25 06:50:57 --> Severity: Notice --> Undefined index: cphone C:\phpstudy\WWW\lucky\application\views\Role\list.php 91
ERROR - 2020-08-25 06:50:57 --> Severity: Notice --> Undefined index: cid C:\phpstudy\WWW\lucky\application\views\Role\list.php 92
ERROR - 2020-08-25 06:50:57 --> Severity: Notice --> Undefined index: m_is_del C:\phpstudy\WWW\lucky\application\views\Role\list.php 94
ERROR - 2020-08-25 06:50:57 --> Severity: Notice --> Undefined index: m_is_del C:\phpstudy\WWW\lucky\application\views\Role\list.php 101
ERROR - 2020-08-25 06:50:57 --> Severity: Notice --> Undefined index: deptname C:\phpstudy\WWW\lucky\application\views\Role\list.php 107
ERROR - 2020-08-25 06:50:57 --> Severity: Notice --> Undefined index: cphone C:\phpstudy\WWW\lucky\application\views\Role\list.php 91
ERROR - 2020-08-25 06:50:57 --> Severity: Notice --> Undefined index: cid C:\phpstudy\WWW\lucky\application\views\Role\list.php 92
ERROR - 2020-08-25 06:50:57 --> Severity: Notice --> Undefined index: m_is_del C:\phpstudy\WWW\lucky\application\views\Role\list.php 94
ERROR - 2020-08-25 06:50:57 --> Severity: Notice --> Undefined index: m_is_del C:\phpstudy\WWW\lucky\application\views\Role\list.php 101
ERROR - 2020-08-25 06:50:57 --> Severity: Notice --> Undefined index: deptname C:\phpstudy\WWW\lucky\application\views\Role\list.php 107
ERROR - 2020-08-25 06:50:57 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 181
ERROR - 2020-08-25 06:50:57 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 185
ERROR - 2020-08-25 06:51:32 --> Severity: Notice --> Undefined index: m_is_del C:\phpstudy\WWW\lucky\application\views\Role\list.php 93
ERROR - 2020-08-25 06:51:32 --> Severity: Notice --> Undefined index: m_is_del C:\phpstudy\WWW\lucky\application\views\Role\list.php 100
ERROR - 2020-08-25 06:51:32 --> Severity: Notice --> Undefined index: deptname C:\phpstudy\WWW\lucky\application\views\Role\list.php 106
ERROR - 2020-08-25 06:51:32 --> Severity: Notice --> Undefined index: m_is_del C:\phpstudy\WWW\lucky\application\views\Role\list.php 93
ERROR - 2020-08-25 06:51:32 --> Severity: Notice --> Undefined index: m_is_del C:\phpstudy\WWW\lucky\application\views\Role\list.php 100
ERROR - 2020-08-25 06:51:32 --> Severity: Notice --> Undefined index: deptname C:\phpstudy\WWW\lucky\application\views\Role\list.php 106
ERROR - 2020-08-25 06:51:32 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 180
ERROR - 2020-08-25 06:51:32 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 184
ERROR - 2020-08-25 06:51:55 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 162
ERROR - 2020-08-25 06:51:55 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 166
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 32
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 42
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:52:02 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 79
ERROR - 2020-08-25 06:52:57 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 158
ERROR - 2020-08-25 06:52:57 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 162
ERROR - 2020-08-25 06:53:17 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 06:53:17 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 06:53:53 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 06:53:53 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 32
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 42
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 06:54:30 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 79
ERROR - 2020-08-25 07:02:05 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 07:02:05 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 32
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 42
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 63
ERROR - 2020-08-25 07:02:07 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\rl\edit.php 79
ERROR - 2020-08-25 07:03:34 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 07:03:34 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$cphone C:\phpstudy\WWW\lucky\application\views\Role\edit.php 32
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$cid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 42
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:03:37 --> Severity: Notice --> Undefined property: stdClass::$mid C:\phpstudy\WWW\lucky\application\views\Role\edit.php 63
ERROR - 2020-08-25 07:04:36 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 07:04:36 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 07:04:38 --> Severity: error --> Exception: syntax error, unexpected '?>' C:\phpstudy\WWW\lucky\application\views\Role\edit.php 32
ERROR - 2020-08-25 07:05:06 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 07:05:06 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 07:06:05 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\Role\edit.php 34
ERROR - 2020-08-25 07:08:19 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 07:08:19 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 07:08:21 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 07:08:21 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 07:09:28 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 07:09:28 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 07:09:28 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 07:09:54 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 07:09:54 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 07:09:54 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 07:09:56 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 07:09:56 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 07:09:56 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 07:09:56 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 07:09:56 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 07:11:20 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 07:11:20 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 07:11:21 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 07:11:21 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 07:11:21 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 07:13:17 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 07:13:17 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 07:13:18 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 07:13:18 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 07:13:18 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 07:13:53 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 07:13:53 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 07:13:53 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 07:13:53 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 07:13:53 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 07:14:08 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 07:14:08 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 07:14:08 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 07:14:09 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 07:14:09 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 07:14:34 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 07:14:34 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 07:14:34 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 07:14:56 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 07:14:56 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 07:14:56 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 07:14:58 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 07:14:58 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 07:15:38 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 07:15:38 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 07:16:44 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 07:16:44 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 07:20:30 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 07:20:30 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 07:20:32 --> Severity: error --> Exception: syntax error, unexpected end of file C:\phpstudy\WWW\lucky\application\views\Role\edit.php 143
ERROR - 2020-08-25 07:22:40 --> Severity: error --> Exception: syntax error, unexpected end of file C:\phpstudy\WWW\lucky\application\views\Role\edit.php 143
ERROR - 2020-08-25 07:24:16 --> Severity: error --> Exception: syntax error, unexpected end of file C:\phpstudy\WWW\lucky\application\views\Role\edit.php 141
ERROR - 2020-08-25 07:25:53 --> Severity: Notice --> Undefined variable: v C:\phpstudy\WWW\lucky\application\views\Role\edit.php 33
ERROR - 2020-08-25 07:27:17 --> Severity: error --> Exception: syntax error, unexpected end of file C:\phpstudy\WWW\lucky\application\views\Role\edit.php 141
ERROR - 2020-08-25 07:27:53 --> Severity: error --> Exception: syntax error, unexpected end of file C:\phpstudy\WWW\lucky\application\views\Role\edit.php 141
ERROR - 2020-08-25 07:28:08 --> Severity: Notice --> Undefined variable: v C:\phpstudy\WWW\lucky\application\views\Role\edit.php 30
ERROR - 2020-08-25 07:28:51 --> Severity: error --> Exception: syntax error, unexpected end of file C:\phpstudy\WWW\lucky\application\views\Role\edit.php 141
ERROR - 2020-08-25 07:29:04 --> Severity: error --> Exception: syntax error, unexpected end of file C:\phpstudy\WWW\lucky\application\views\Role\edit.php 141
ERROR - 2020-08-25 07:30:47 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\Role\edit.php 32
ERROR - 2020-08-25 07:31:59 --> Severity: error --> Exception: syntax error, unexpected end of file C:\phpstudy\WWW\lucky\application\views\Role\edit.php 136
ERROR - 2020-08-25 07:32:37 --> Severity: error --> Exception: syntax error, unexpected end of file C:\phpstudy\WWW\lucky\application\views\Role\edit.php 135
ERROR - 2020-08-25 07:42:54 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 07:42:54 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 07:58:25 --> Severity: error --> Exception: Unable to locate the model you have specified: Mune_model C:\phpstudy\WWW\lucky\system\core\Loader.php 348
ERROR - 2020-08-25 07:58:35 --> Severity: error --> Exception: Unable to locate the model you have specified: Mune_model C:\phpstudy\WWW\lucky\system\core\Loader.php 348
ERROR - 2020-08-25 07:58:36 --> Severity: error --> Exception: Unable to locate the model you have specified: Mune_model C:\phpstudy\WWW\lucky\system\core\Loader.php 348
ERROR - 2020-08-25 07:58:36 --> Severity: error --> Exception: Unable to locate the model you have specified: Mune_model C:\phpstudy\WWW\lucky\system\core\Loader.php 348
ERROR - 2020-08-25 07:58:36 --> Severity: error --> Exception: Unable to locate the model you have specified: Mune_model C:\phpstudy\WWW\lucky\system\core\Loader.php 348
ERROR - 2020-08-25 07:58:36 --> Severity: error --> Exception: Unable to locate the model you have specified: Mune_model C:\phpstudy\WWW\lucky\system\core\Loader.php 348
ERROR - 2020-08-25 07:58:55 --> Severity: error --> Exception: Unable to locate the model you have specified: Mune_model C:\phpstudy\WWW\lucky\system\core\Loader.php 348
ERROR - 2020-08-25 07:58:59 --> Severity: error --> Exception: Unable to locate the model you have specified: Mune_model C:\phpstudy\WWW\lucky\system\core\Loader.php 348
ERROR - 2020-08-25 07:59:57 --> Severity: error --> Exception: Unable to locate the model you have specified: Mune_model C:\phpstudy\WWW\lucky\system\core\Loader.php 348
ERROR - 2020-08-25 08:00:07 --> Severity: error --> Exception: Unable to locate the model you have specified: Mune_model C:\phpstudy\WWW\lucky\system\core\Loader.php 348
ERROR - 2020-08-25 08:00:38 --> Severity: error --> Exception: Unable to locate the model you have specified: Mune_model C:\phpstudy\WWW\lucky\system\core\Loader.php 348
ERROR - 2020-08-25 08:00:39 --> Severity: error --> Exception: Unable to locate the model you have specified: Mune_model C:\phpstudy\WWW\lucky\system\core\Loader.php 348
ERROR - 2020-08-25 08:00:39 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-08-25 08:01:46 --> Severity: error --> Exception: Unable to locate the model you have specified: Menu_model C:\phpstudy\WWW\lucky\system\core\Loader.php 348
ERROR - 2020-08-25 08:01:49 --> Severity: error --> Exception: Unable to locate the model you have specified: Menu_model C:\phpstudy\WWW\lucky\system\core\Loader.php 348
ERROR - 2020-08-25 08:01:57 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\Role\edit.php 31
ERROR - 2020-08-25 08:03:01 --> Severity: error --> Exception: Unable to locate the model you have specified: Menu_model C:\phpstudy\WWW\lucky\system\core\Loader.php 348
ERROR - 2020-08-25 08:03:08 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\Role\edit.php 31
ERROR - 2020-08-25 08:17:40 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 08:17:40 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 08:19:42 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 08:19:42 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 08:32:15 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 08:32:15 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 08:34:52 --> Severity: error --> Exception: syntax error, unexpected ')', expecting variable (T_VARIABLE) or '{' or '$' C:\phpstudy\WWW\lucky\application\controllers\Role.php 67
ERROR - 2020-08-25 08:37:23 --> Severity: error --> Exception: syntax error, unexpected ')', expecting variable (T_VARIABLE) or '{' or '$' C:\phpstudy\WWW\lucky\application\controllers\Role.php 67
ERROR - 2020-08-25 08:37:29 --> Severity: error --> Exception: syntax error, unexpected ')', expecting variable (T_VARIABLE) or '{' or '$' C:\phpstudy\WWW\lucky\application\controllers\Role.php 67
ERROR - 2020-08-25 08:38:39 --> Severity: error --> Exception: syntax error, unexpected ')', expecting variable (T_VARIABLE) or '{' or '$' C:\phpstudy\WWW\lucky\application\controllers\Role.php 67
ERROR - 2020-08-25 08:56:25 --> Severity: error --> Exception: syntax error, unexpected ')', expecting variable (T_VARIABLE) or '{' or '$' C:\phpstudy\WWW\lucky\application\controllers\Role.php 67
ERROR - 2020-08-25 08:56:27 --> Severity: error --> Exception: syntax error, unexpected ')', expecting variable (T_VARIABLE) or '{' or '$' C:\phpstudy\WWW\lucky\application\controllers\Role.php 67
ERROR - 2020-08-25 08:56:28 --> Severity: error --> Exception: syntax error, unexpected ')', expecting variable (T_VARIABLE) or '{' or '$' C:\phpstudy\WWW\lucky\application\controllers\Role.php 67
ERROR - 2020-08-25 08:56:28 --> Severity: error --> Exception: syntax error, unexpected ')', expecting variable (T_VARIABLE) or '{' or '$' C:\phpstudy\WWW\lucky\application\controllers\Role.php 67
ERROR - 2020-08-25 08:56:28 --> Severity: error --> Exception: syntax error, unexpected ')', expecting variable (T_VARIABLE) or '{' or '$' C:\phpstudy\WWW\lucky\application\controllers\Role.php 67
ERROR - 2020-08-25 08:56:32 --> Severity: error --> Exception: syntax error, unexpected ')', expecting variable (T_VARIABLE) or '{' or '$' C:\phpstudy\WWW\lucky\application\controllers\Role.php 67
ERROR - 2020-08-25 08:56:43 --> Severity: error --> Exception: syntax error, unexpected ')', expecting variable (T_VARIABLE) or '{' or '$' C:\phpstudy\WWW\lucky\application\controllers\Role.php 67
ERROR - 2020-08-25 08:57:09 --> Severity: error --> Exception: syntax error, unexpected ')', expecting variable (T_VARIABLE) or '{' or '$' C:\phpstudy\WWW\lucky\application\controllers\Role.php 65
ERROR - 2020-08-25 08:57:15 --> Severity: error --> Exception: syntax error, unexpected ')', expecting variable (T_VARIABLE) or '{' or '$' C:\phpstudy\WWW\lucky\application\controllers\Role.php 65
ERROR - 2020-08-25 08:57:42 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 08:57:42 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 08:57:45 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\phpstudy\WWW\lucky\application\controllers\Role.php 65
ERROR - 2020-08-25 08:58:41 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 08:58:41 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 08:59:53 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 08:59:53 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 08:59:54 --> Severity: Warning --> json_decode() expects parameter 1 to be string, object given C:\phpstudy\WWW\lucky\application\controllers\Role.php 65
ERROR - 2020-08-25 09:00:04 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 09:00:04 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 09:00:06 --> Severity: Warning --> json_decode() expects parameter 1 to be string, object given C:\phpstudy\WWW\lucky\application\controllers\Role.php 65
ERROR - 2020-08-25 09:02:49 --> Severity: error --> Exception: syntax error, unexpected '=', expecting :: (T_PAAMAYIM_NEKUDOTAYIM) C:\phpstudy\WWW\lucky\application\models\Role_model.php 225
ERROR - 2020-08-25 09:03:23 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 09:03:23 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 09:04:40 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 09:04:40 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 09:04:52 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 09:04:52 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 09:10:25 --> Severity: Notice --> Undefined index: menu C:\phpstudy\WWW\lucky\application\controllers\Role.php 66
ERROR - 2020-08-25 09:10:25 --> Severity: Notice --> Undefined index: menu C:\phpstudy\WWW\lucky\application\controllers\Role.php 66
ERROR - 2020-08-25 09:10:29 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 09:10:29 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 09:15:32 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\Role\edit.php 31
ERROR - 2020-08-25 09:15:36 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 09:15:36 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 09:16:37 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 09:16:37 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 09:17:20 --> Severity: Notice --> Undefined property: stdClass::$cphone C:\phpstudy\WWW\lucky\application\views\Role\edit.php 31
ERROR - 2020-08-25 09:17:35 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 09:17:35 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 09:33:52 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 09:33:52 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 09:33:55 --> Severity: Notice --> Array to string conversion C:\phpstudy\WWW\lucky\application\views\Role\edit.php 33
ERROR - 2020-08-25 09:34:20 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 09:34:20 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 09:34:43 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 09:34:43 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 09:34:45 --> Severity: Notice --> Trying to get property of non-object C:\phpstudy\WWW\lucky\application\views\Role\edit.php 33
ERROR - 2020-08-25 09:34:56 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 09:34:56 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 09:34:56 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 09:35:16 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 09:35:16 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 09:36:05 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 09:36:05 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 09:36:25 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 09:36:25 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 09:36:41 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 09:36:41 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 09:44:56 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 09:44:56 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 09:44:56 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 09:48:02 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 09:48:02 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 09:48:02 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 09:48:02 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 09:48:02 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 09:49:21 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 09:49:21 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 09:49:21 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 09:49:21 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 09:49:21 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 09:49:58 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 09:49:58 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 09:49:59 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 09:49:59 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 09:49:59 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 09:50:40 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 09:50:40 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 09:52:45 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 09:52:45 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 09:52:54 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 09:52:54 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 09:54:40 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 09:54:40 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 10:12:26 --> Severity: error --> Exception: syntax error, unexpected ')', expecting variable (T_VARIABLE) or '{' or '$' C:\phpstudy\WWW\lucky\application\views\Role\edit.php 26
ERROR - 2020-08-25 10:12:38 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 10:12:38 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 10:13:00 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 10:13:00 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 10:13:15 --> Severity: Notice --> Undefined index: pages C:\phpstudy\WWW\lucky\application\views\Role\list.php 146
ERROR - 2020-08-25 10:13:15 --> Severity: Notice --> Undefined index: limit C:\phpstudy\WWW\lucky\application\views\Role\list.php 150
ERROR - 2020-08-25 16:44:29 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 16:44:29 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 16:45:54 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 16:45:54 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 16:48:13 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 16:48:13 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 16:48:35 --> Severity: Notice --> Undefined index: menu C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 65
ERROR - 2020-08-25 16:48:57 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 16:48:57 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 16:52:37 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 16:52:37 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 16:52:37 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 16:53:12 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 16:53:12 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 16:53:12 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 16:53:12 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 16:53:12 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 16:57:58 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 16:57:58 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 16:57:58 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 16:57:58 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 16:57:58 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:00:23 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:00:23 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:00:23 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:00:23 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:00:24 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:01:00 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:01:00 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:01:00 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:01:01 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:01:01 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:01:36 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:01:36 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:01:36 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:01:36 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:01:37 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:02:43 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:02:43 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:02:43 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:02:43 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:02:43 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:03:09 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:03:09 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:03:09 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:03:09 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:03:09 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:04:11 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:04:11 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:04:13 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:04:13 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:04:13 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:04:13 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:04:13 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:05:08 --> Severity: error --> Exception: Call to undefined method Role_model::update_role() C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 72
ERROR - 2020-08-25 17:07:07 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:07:07 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:07:07 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:07:07 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:07:07 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:07:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 67
ERROR - 2020-08-25 17:07:44 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:07:44 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:07:45 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:07:45 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:07:45 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:07:47 --> Severity: Warning --> Invalid argument supplied for foreach() C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 68
ERROR - 2020-08-25 17:08:18 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:08:18 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:08:18 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:08:18 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:08:18 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:08:20 --> Severity: Warning --> Invalid argument supplied for foreach() C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 67
ERROR - 2020-08-25 17:08:20 --> Severity: Notice --> Undefined variable: arr C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 71
ERROR - 2020-08-25 17:11:33 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:11:33 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:11:34 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:11:34 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:11:34 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:11:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 67
ERROR - 2020-08-25 17:11:36 --> Severity: Notice --> Undefined variable: dt_record C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 76
ERROR - 2020-08-25 17:14:58 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:14:58 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:14:59 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:14:59 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:14:59 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:15:01 --> Severity: Warning --> Use of undefined constant object - assumed 'object' (this will throw an Error in a future version of PHP) C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 66
ERROR - 2020-08-25 17:15:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 67
ERROR - 2020-08-25 17:15:01 --> Severity: Notice --> Undefined variable: dt_record C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 76
ERROR - 2020-08-25 17:15:37 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:15:37 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:15:37 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:15:37 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:15:37 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:15:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 68
ERROR - 2020-08-25 17:15:40 --> Severity: Notice --> Undefined variable: dt_record C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 77
ERROR - 2020-08-25 17:16:18 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:16:18 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:16:18 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:16:18 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:16:18 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:16:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 69
ERROR - 2020-08-25 17:16:21 --> Severity: Notice --> Undefined variable: dt_record C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 78
ERROR - 2020-08-25 17:16:50 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:16:50 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:16:50 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:16:50 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:16:50 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:16:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 70
ERROR - 2020-08-25 17:16:52 --> Severity: Notice --> Undefined variable: dt_record C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 79
ERROR - 2020-08-25 17:17:36 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:17:36 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:17:36 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:17:36 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:17:36 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:17:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 70
ERROR - 2020-08-25 17:17:39 --> Severity: Notice --> Undefined variable: dt_record C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 79
ERROR - 2020-08-25 17:18:35 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:18:35 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:18:35 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:18:35 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:18:35 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:18:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 70
ERROR - 2020-08-25 17:18:38 --> Severity: Notice --> Undefined variable: dt_record C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 79
ERROR - 2020-08-25 17:22:38 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:22:38 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:22:39 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:22:39 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:22:39 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:22:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 70
ERROR - 2020-08-25 17:22:41 --> Severity: Notice --> Undefined variable: dt_record C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 79
ERROR - 2020-08-25 17:24:25 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:24:25 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:24:25 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:24:25 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:24:25 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:24:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 70
ERROR - 2020-08-25 17:24:29 --> Severity: Notice --> Undefined variable: dt_record C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 79
ERROR - 2020-08-25 17:25:04 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:25:04 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:25:04 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:25:04 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:25:04 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:25:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 70
ERROR - 2020-08-25 17:25:21 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:25:21 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:25:21 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:25:21 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:25:21 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:25:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 69
ERROR - 2020-08-25 17:25:45 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:25:45 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:25:45 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:25:45 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:25:45 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:28:21 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:28:21 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:28:22 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:28:22 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:28:22 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:30:33 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:30:33 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:30:33 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:30:33 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:30:33 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:33:31 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:33:31 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:33:31 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:33:31 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:33:31 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:33:48 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:33:48 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:33:48 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:33:48 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:33:48 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:36:53 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:36:53 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:36:53 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:36:54 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:36:54 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:36:56 --> Severity: Warning --> Illegal string offset 'id' C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 75
ERROR - 2020-08-25 17:36:56 --> Severity: Warning --> Illegal string offset 'role' C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 76
ERROR - 2020-08-25 17:36:56 --> Severity: Warning --> Illegal string offset 'id' C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 75
ERROR - 2020-08-25 17:36:56 --> Severity: Warning --> Illegal string offset 'role' C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 76
ERROR - 2020-08-25 17:38:11 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:38:11 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:38:12 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:38:12 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:38:12 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:38:14 --> Severity: Warning --> json_decode() expects parameter 1 to be string, object given C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 67
ERROR - 2020-08-25 17:38:30 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:38:30 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:38:30 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:38:30 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:38:30 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:38:33 --> Severity: Warning --> json_decode() expects parameter 1 to be string, array given C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 67
ERROR - 2020-08-25 17:39:44 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:39:44 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:39:44 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:39:44 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:39:44 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:39:47 --> Severity: Warning --> json_decode() expects parameter 1 to be string, array given C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 67
ERROR - 2020-08-25 17:44:32 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:44:32 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:44:32 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:44:32 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:44:32 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:44:34 --> Severity: Warning --> json_decode() expects parameter 1 to be string, array given C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 67
ERROR - 2020-08-25 17:45:06 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:45:07 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:45:07 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:45:07 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:45:07 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:46:31 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:46:31 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:46:31 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:46:31 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:46:31 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:47:04 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:47:04 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:47:04 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:47:04 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:47:04 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:47:54 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:47:54 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:47:56 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:47:56 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:47:56 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:49:06 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:49:06 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:49:07 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:49:07 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:49:07 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:49:49 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:49:49 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:49:49 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:49:49 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:49:49 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:50:18 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:50:18 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:50:18 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:50:18 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:50:18 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:50:52 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:50:52 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:50:52 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:50:52 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:50:52 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:51:19 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:51:19 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:51:19 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:51:19 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:51:19 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:52:13 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:52:13 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:52:13 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:52:13 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:52:13 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:55:39 --> Severity: Notice --> Undefined index: menu C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 65
ERROR - 2020-08-25 17:55:39 --> Severity: Notice --> Undefined offset: 1 C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 242
ERROR - 2020-08-25 17:55:42 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:55:42 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:55:42 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:55:42 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:55:42 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:56:05 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:56:05 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:56:05 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:56:05 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:56:05 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:57:07 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:57:07 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:57:07 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:57:07 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:57:07 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:57:25 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:57:25 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:57:25 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:57:25 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:57:25 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:57:49 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:57:49 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:57:50 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:57:50 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:57:50 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:58:24 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:58:24 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:58:24 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:58:24 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:58:24 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:58:55 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 17:58:55 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 17:58:55 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 17:58:55 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 17:58:55 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:02:07 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:02:07 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:02:07 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:02:07 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:02:07 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:02:55 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:02:55 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:02:55 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:02:55 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:02:55 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:03:25 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:03:25 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:03:25 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:03:25 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:03:25 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:03:45 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:03:45 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:03:45 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:03:45 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:03:45 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:03:59 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:03:59 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:03:59 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:03:59 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:03:59 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:04:18 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:04:18 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:04:18 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:04:18 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:04:18 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:04:46 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:04:46 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:04:46 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:04:46 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:04:46 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:08:12 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:08:12 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:08:12 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:08:12 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:08:12 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:10:25 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:10:25 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:10:26 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:10:26 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:10:26 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:11:18 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:11:18 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:11:18 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:11:18 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:11:18 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:11:37 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:11:37 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:11:37 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:11:37 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:11:37 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:13:06 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:13:06 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:13:06 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:13:06 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:13:06 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:13:08 --> Severity: Notice --> Undefined offset: 2 C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:13:08 --> Severity: Notice --> Undefined offset: 2 C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:13:08 --> Severity: Notice --> Undefined offset: 3 C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:13:08 --> Severity: Notice --> Undefined offset: 3 C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:13:08 --> Severity: Notice --> Undefined offset: 4 C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:13:08 --> Severity: Notice --> Undefined offset: 2 C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:13:08 --> Severity: Notice --> Undefined offset: 2 C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:13:08 --> Severity: Notice --> Undefined offset: 3 C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:13:08 --> Severity: Notice --> Undefined offset: 3 C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:13:08 --> Severity: Notice --> Undefined offset: 4 C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:13:27 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:13:27 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:13:27 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:13:27 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:13:27 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:13:29 --> Severity: Notice --> Undefined offset: 2 C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 244
ERROR - 2020-08-25 18:13:29 --> Severity: Notice --> Undefined offset: 2 C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 244
ERROR - 2020-08-25 18:13:29 --> Severity: Notice --> Undefined offset: 3 C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 244
ERROR - 2020-08-25 18:13:29 --> Severity: Notice --> Undefined offset: 3 C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 244
ERROR - 2020-08-25 18:13:29 --> Severity: Notice --> Undefined offset: 4 C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 244
ERROR - 2020-08-25 18:14:17 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:14:17 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:14:17 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:14:17 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:14:17 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:15:51 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:15:51 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:15:51 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:15:52 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:15:52 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:16:31 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:16:31 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:16:32 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:16:32 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:16:32 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:24:02 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:24:02 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:24:03 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:24:03 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:24:03 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:24:17 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:24:17 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:24:17 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:24:17 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:24:17 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:26:31 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:26:31 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:26:31 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:26:31 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:26:31 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:26:33 --> Severity: Notice --> Undefined offset: 1 C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:26:33 --> Severity: Warning --> Illegal offset type C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:26:33 --> Severity: Warning --> Illegal offset type C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:26:33 --> Severity: Warning --> Illegal offset type C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:26:33 --> Severity: Warning --> Illegal offset type C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:26:33 --> Severity: Warning --> Illegal offset type C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:26:33 --> Severity: Warning --> Illegal offset type C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:26:41 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:26:41 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:26:41 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:26:41 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:26:41 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:27:39 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:27:39 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:27:41 --> Severity: Notice --> Undefined offset: 1 C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:27:41 --> Severity: Warning --> Illegal offset type C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:27:41 --> Severity: Warning --> Illegal offset type C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:27:41 --> Severity: Warning --> Illegal offset type C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:27:41 --> Severity: Warning --> Illegal offset type C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:27:41 --> Severity: Warning --> Illegal offset type C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:27:41 --> Severity: Warning --> Illegal offset type C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:27:41 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:27:41 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:27:41 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:27:43 --> Severity: Notice --> Undefined offset: 1 C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:27:43 --> Severity: Warning --> Illegal offset type C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:27:43 --> Severity: Warning --> Illegal offset type C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:27:43 --> Severity: Warning --> Illegal offset type C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:27:43 --> Severity: Warning --> Illegal offset type C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:27:43 --> Severity: Warning --> Illegal offset type C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:27:43 --> Severity: Warning --> Illegal offset type C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Role_model.php 245
ERROR - 2020-08-25 18:30:34 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:30:34 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:30:34 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:30:34 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:30:34 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:31:00 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:31:00 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:31:00 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:31:00 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:31:00 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:32:22 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:32:22 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:32:22 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:32:23 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:32:23 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:35:41 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:35:41 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:35:41 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:35:41 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:35:41 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:37:09 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:37:09 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:37:09 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:37:09 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:37:09 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:37:31 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:37:31 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:37:32 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:37:32 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:37:32 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:39:25 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:39:25 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:39:25 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:39:25 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:39:25 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:40:50 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:40:50 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:40:50 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:40:50 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:40:50 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:41:16 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:41:16 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:41:16 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:41:16 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:41:17 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:43:25 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:43:25 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:43:25 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:43:25 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:43:25 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:43:48 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:43:48 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:43:48 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:43:48 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:43:48 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:44:15 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:44:15 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:44:15 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:44:15 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:44:15 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:45:00 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:45:00 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:45:00 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:45:00 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:45:00 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:51:55 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:51:55 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:51:55 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:51:55 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:51:55 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:51:58 --> Severity: Notice --> Undefined property: Role::$mune_model C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 66
ERROR - 2020-08-25 18:51:58 --> Severity: error --> Exception: Call to a member function get_name() on null C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 66
ERROR - 2020-08-25 18:52:46 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:52:46 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:52:47 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:52:47 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:52:47 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:53:33 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:53:33 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:53:33 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:53:33 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:53:33 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:54:07 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:54:07 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:54:08 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:54:08 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:54:08 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:54:10 --> Severity: Warning --> Use of undefined constant name - assumed 'name' (this will throw an Error in a future version of PHP) C:\phpStudy\PHPTutorial\WWW\lucky\application\models\Menu_model.php 48
ERROR - 2020-08-25 18:54:20 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:54:20 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:54:20 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:54:20 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:54:20 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:56:07 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:56:07 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:56:07 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:56:07 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:56:07 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:56:39 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:56:39 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:56:39 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:56:39 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:56:39 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:57:02 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:57:02 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:57:02 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:57:02 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:57:02 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:59:50 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 18:59:50 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 18:59:50 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:59:50 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 18:59:50 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 18:59:53 --> Severity: error --> Exception: syntax error, unexpected end of file C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\edit.php 138
ERROR - 2020-08-25 19:00:02 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 19:00:02 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 19:00:03 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 19:00:03 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 19:00:03 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 19:00:05 --> Severity: error --> Exception: syntax error, unexpected end of file C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\edit.php 138
ERROR - 2020-08-25 19:02:07 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 19:02:07 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 19:02:07 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 19:02:07 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 19:02:07 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 19:02:19 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 19:02:19 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 19:02:19 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 19:02:19 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 19:02:19 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 19:02:34 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 19:02:34 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 19:02:34 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 19:02:34 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 19:02:34 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 19:02:49 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 19:02:49 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 19:02:49 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 19:02:49 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 19:02:49 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 19:03:52 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 19:03:52 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 19:03:52 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 19:03:52 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 19:03:52 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 19:04:54 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 19:04:54 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 19:04:54 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 19:04:54 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 19:04:54 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 19:05:11 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 19:05:11 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 19:05:11 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 19:05:11 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 19:05:11 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 19:06:01 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 19:06:01 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 19:06:01 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 19:06:01 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 19:06:01 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 19:57:06 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 19:57:06 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 19:57:06 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 19:57:06 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 19:57:06 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 19:59:36 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 19:59:36 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 19:59:36 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 19:59:36 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 19:59:36 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 20:00:39 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 20:00:39 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 20:00:39 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 20:00:39 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 20:00:39 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 20:01:05 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 20:01:05 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 20:01:05 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 20:01:05 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 20:01:05 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 20:01:42 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 20:01:42 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 20:01:42 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 20:01:42 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 20:01:42 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 20:02:00 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 20:02:00 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 20:02:01 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 20:02:01 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 20:02:01 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 20:02:54 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 20:02:54 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 20:02:55 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 20:02:55 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 20:02:55 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 20:03:45 --> Severity: error --> Exception: Call to undefined method Role_model::update_role() C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 74
ERROR - 2020-08-25 20:05:44 --> Severity: error --> Exception: Call to undefined method Role_model::update_role() C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 74
ERROR - 2020-08-25 20:09:38 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 20:09:38 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 20:09:38 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 20:09:38 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 20:09:38 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 20:15:14 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 20:15:14 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 20:15:14 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 20:15:14 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 20:15:14 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 20:20:01 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 20:20:01 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 20:20:01 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 20:20:01 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 20:20:01 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 20:23:26 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 20:23:26 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 20:23:52 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\dept\list.php 169
ERROR - 2020-08-25 20:23:52 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\dept\list.php 173
ERROR - 2020-08-25 20:24:51 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 20:24:51 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 20:24:52 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 20:24:52 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 20:24:52 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 20:36:47 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 20:36:47 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 20:36:47 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 20:36:47 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 20:36:47 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 20:37:26 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 20:37:26 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 20:37:26 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 20:37:26 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 20:37:26 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 20:37:33 --> Severity: Notice --> Undefined index: menu C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 65
ERROR - 2020-08-25 20:38:47 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 20:38:47 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 20:38:47 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 20:38:47 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 20:38:47 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 20:38:56 --> Severity: Notice --> Undefined index: menu C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 65
ERROR - 2020-08-25 20:39:01 --> Severity: Notice --> Undefined index: menu C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 65
ERROR - 2020-08-25 20:39:51 --> Severity: Notice --> Undefined index: menu C:\phpStudy\PHPTutorial\WWW\lucky\application\controllers\Role.php 65
ERROR - 2020-08-25 20:41:31 --> Severity: Notice --> Undefined index: pages C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 146
ERROR - 2020-08-25 20:41:31 --> Severity: Notice --> Undefined index: limit C:\phpStudy\PHPTutorial\WWW\lucky\application\views\role\list.php 150
ERROR - 2020-08-25 20:41:32 --> 404 Page Not Found: Static/vendors
ERROR - 2020-08-25 20:41:32 --> 404 Page Not Found: Static/css
ERROR - 2020-08-25 20:41:32 --> 404 Page Not Found: Static/vendors
