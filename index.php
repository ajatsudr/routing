<?php 

require_once 'App.php';

$app = new App();

// &$app -> by reference ( can modify state of $app obj )
// $app -> by value ( get value of $app )
$app->add('about', function() use (&$app){
	echo $app->url[0];
});

$app->run();
