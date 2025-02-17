<?php

require 'settings.php';

require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();



 require('database.php') ;

 include_once('functions/ui.php') ;
 include_once('functions/user.php') ;
 include_once('functions/cart.php') ;
 include_once('functions/product.php') ;

 