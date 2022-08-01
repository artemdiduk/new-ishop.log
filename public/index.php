<?php

if (PHP_MAJOR_VERSION < 8) {
    die("pls use version >= 8");
}
require_once dirname(__DIR__) . '/config/init.php';
require_once HELPERS .'/functions.php';
require_once CONFIG .'/routes.php';
new dev\App();

debag(\dev\Router::getRoutes());