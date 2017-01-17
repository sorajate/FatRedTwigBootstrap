<?php

/***********************
   Configure Libraries
 ***********************/
require __DIR__ . '/vendor/autoload.php';

use RedBean_Facade as R;
//R::setup('mysql:host=localhost;dbname=database', 'login', 'password');
//R::setStrictTyping(false);
//R::debug(true);
//R::freeze(true);

$twig = new Twig_Environment(new Twig_Loader_Filesystem('app/views/'), [
    'debug'       => false,
    'cache'       => 'tmp/cache/',
    'auto_reload' => true
]);
$twig->addFilter(new Twig_SimpleFilter('f3', ['f3', 'get']));

/****************
   Configure F3
 ****************/
$f3 = \Base::instance();

$f3->mset([
    'DEBUG'    => 2,
    'UI'       => 'public/',
    'UPLOADS'  => 'tmp/uploads/'
]);

/**********
   Routes
 **********/
$f3->route('GET /', 'HomeController->get');

/*******
   Run
 *******/
$f3->run();