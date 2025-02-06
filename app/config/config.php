<?php

// App Root
define('APPROOT', dirname(dirname(__FILE__)));

// URL Root
define('URLROOT', 'http://localhost:4400');

// Use environment variables
$env = parse_ini_file(dirname(APPROOT) . '/.env');

// DB Params
define('DB_HOST', $env['DB_HOST']);
define('DB_USER', $env['DB_USER']);
define('DB_PASS', $env['DB_PASS']);
define('DB_NAME', $env['DB_NAME']);

// Site Name
define('SITENAME', $env['SITENAME']);