<?php
const ROOT = __DIR__;
require ROOT . '/vendor/autoload.php';
use SPA\Controller;
use SPA\SPA;
$Controller=new Controller();
$SPA=new SPA();
if (!$Controller->isCli() and file_exists(ROOT . '/off')){
    http_response_code(503);
    die("maintenance mode");
}