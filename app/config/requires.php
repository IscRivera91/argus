<?php
$rutaBase = __DIR__.'/../../';

require_once "{$rutaBase}/vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable($rutaBase);
$dotenv->load();

if ($_ENV['APP_DEBUG']) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

session_start();
date_default_timezone_set($_ENV['APP_TIMEZONE']);


require_once "configDB.php"; 

\Ayuda\Debug::print($_ENV);exit;