<?php
define('_DB_SERVER_', getenv('ENV_MYSQL_SERVER') ?: 'mysql');
define('_DB_NAME_', getenv('ENV_MYSQL_SCHEMA') ?: 'qloapps_schema');
define('_DB_USER_', getenv('ENV_MYSQL_USER') ?: 'qloapps_user');
define('_DB_PASSWD_', getenv('ENV_MYSQL_PASS') ?: 'qloapps_pass');
define('_DB_PREFIX_', getenv('ENV_MYSQL_PREFIX') ?: '');
define('_MYSQL_ENGINE_', 'InnoDB');
define('_PS_CACHING_SYSTEM_', 'CacheMemcache');
define('_PS_CACHE_ENABLED_', '0');
define('_COOKIE_KEY_', 'T6GZiTOHe3zA7IQovcQrC0apWSBVxWYJsvRMPqeP13ZuF4Z7biepeQyd');
define('_COOKIE_IV_', 'dciZTSvt');
define('_PS_CREATION_DATE_', '2024-05-17');
if (!defined('_PS_VERSION_'))
	define('_PS_VERSION_', '1.6.1.23');
define('_QLOAPPS_VERSION_', '1.5.1.0');
define('_MYMODULE_API_TOKEN_', getenv('ENV_MYMODULE_API_TOKEN') ?: 'my_static_token');
