<?php
use Demo\DemoGitSlim\controllers\HelloController;

$app->setBasePath("/demo-git-slim/public");
$app->any("/sayHello", HelloController::class.":sayHello");