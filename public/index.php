<?php
use Slim\Factory\AppFactory;

/*
silm4を使用したwebアプリケーション個人開発
*/

require_once($_SERVER["DOCUMENT_ROOT"]."/../vendor/autoload.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/../containerSetups.php");
$app = AppFactory::create();
require_once($_SERVER["DOCUMENT_ROOT"]."/../routes.php");
$app->run();
