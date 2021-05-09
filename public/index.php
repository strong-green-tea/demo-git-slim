<?php
use Slim\Factory\AppFactory;

/*
silm4を使用したwebアプリケーション個人開発
*/

require_once($_SERVER["DOCUMENT_ROOT"]."/demo-git-slim/vendor/autoload.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/demo-git-slim/containerSetups.php");
$app = AppFactory::create();
require_once($_SERVER["DOCUMENT_ROOT"]."/demo-git-slim/routes.php");
$app->run();
