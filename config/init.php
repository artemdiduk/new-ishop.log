<?php
define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/dev');
define("HELPERS", ROOT . '/vendor/dev/helpers');
define("CACHE", ROOT . '/tmp/cache');
define("LOGS", ROOT . '/tmp/logs');
define("CONFIG", ROOT . '/config');
define("LAYOUT", ROOT . 'ishop');
define("PATH", ROOT . 'http://new-ishop.loc');
define("ADMIN", ROOT . 'http://new-ishop.loc/admin');
define("NO_IMAGE", ROOT . '/uploads');
define("WEBROOT", 'new-ishop.log');

require_once ROOT . "/vendor/autoload.php";