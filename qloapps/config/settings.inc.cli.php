<?php
define('_DB_SERVER_', getenv('ENV_MYSQL_SERVER') ?: 'mysql');
define('_DB_NAME_', getenv('ENV_MYSQL_SCHEMA') ?: 'qloapps_schema');
define('_DB_USER_', getenv('ENV_MYSQL_USER') ?: 'qloapps_user');
define('_DB_PASSWD_', getenv('ENV_MYSQL_PASS') ?: 'qloapps_pass');
define('_DB_PREFIX_', getenv('ENV_MYSQL_PREFIX') ?: '');
define('_MYSQL_ENGINE_', 'InnoDB');
define('_PS_CACHING_SYSTEM_', 'CacheMemcache');
define('_PS_CACHE_ENABLED_', '0');
define('_COOKIE_KEY_', '2I3WeoGNGkbiK7WaTKi3cntuaNCM2Ji6BJ712IDG9qXtDDUgFILkrNv8');
define('_COOKIE_IV_', 'TbW063cm');
define('_NEW_COOKIE_KEY_', 'def000003d9609868e550929f79bfa0f4d0e2712f1c57795bc6dccf2cb1f7ace66cbb1f724519fad03391cf4add915fa71658df19a5a7cdcf7ecc4aa6c25c6e28c5850e4');
define('_PS_CREATION_DATE_', '2024-05-16');
if (!defined('_PS_VERSION_'))
	define('_PS_VERSION_', '1.6.1.23');
define('_QLOAPPS_VERSION_', '1.6.0.0');


echo _DB_SERVER_ . PHP_EOL;
echo _DB_NAME_ . PHP_EOL;
echo _DB_USER_ . PHP_EOL;
echo _DB_PASSWD_ . PHP_EOL;
echo _DB_PREFIX_ . PHP_EOL;
