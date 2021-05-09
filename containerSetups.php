<?php
use DI\Container;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;

$container = new Container();
$container->set("view",
            function() {
                $twig = Twig::create($_SERVER["DOCUMENT_ROOT"]."/demo-git-slim/templates");
                return $twig;
            }
);

AppFactory::setContainer($container);