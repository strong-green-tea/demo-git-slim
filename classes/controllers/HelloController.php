<?php
namespace Demo\DemoGitSlim\controllers;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Container\ContainerInterface;

class HelloController
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function sayHello(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $content = "commit to github.com";
        $responseBody = $response->getBody();
        $responseBody->write($content);

        return $response;
    }


    public function sayHelloWithTemplate(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $assign["name"] = "Github";
        $twig = $this->container->get("view");    
        $response = $twig->render($response, "helloWithVals.html", $assign);

        return $response;
    }

    
}