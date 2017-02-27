<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 27/02/17
 * Time: 18:26
 */
require_once "vendor/autoload.php";

$app = new Silex\Application;
$app['debug'] = true;

$app->get("/", function(){
    return "Hello word!";
});

$app->run();