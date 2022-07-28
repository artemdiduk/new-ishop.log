<?php

if (PHP_MAJOR_VERSION < 8) {
    die("pls use version >= 8");
}
require_once dirname(__DIR__) . '/config/init.php';

new dev\App();

