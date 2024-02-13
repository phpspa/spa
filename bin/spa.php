<?php
global $SPA;
require __DIR__.'/../cfg.php';
use SPA\Route;
$SPA->run();
$Route=new Route();
$rotasEView=$Route->getRotasEViews(ROOT.'/routes.php');
$filename=ROOT.'/js/inc/rotas.js';
if(file_exists($filename)){
    unlink($filename);
}
$Route->salvarRotasEViews($filename,$rotasEView);
