<?php
global $SPA;
require __DIR__.'/../cfg.php';
use SPA\DB;
$SPA->run();
$DB=new DB();
$DB->mig($_ENV['DB_ID']);