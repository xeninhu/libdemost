<?php

    require_once "vendor/autoload.php";

    $app = new \Slim\Slim();
    use PRODEB\DemComposer\Helper\GenerateSlug;
    //Cliente
    
    
    $app->get('/', function () use ($app) {
        $app->response()->header('Content-Type', 'text/html;charset=utf-8');
        $helper = new GenerateSlug();
        echo $helper->generate("testando novo slug");
    });
    
    $app->run();
?>