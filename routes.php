<?php
use Demo\DemoGitSlim\controllers\HelloController;

$app->any("/sayHello", HelloController::class.":sayHello");
$app->any("/sayHelloWithTemp", HelloController::class.":sayHelloWithTemplate");