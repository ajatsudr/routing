<?php 

require_once 'App.php';

$app = new App();

$app->add('about', function() use (&$app){
	echo $app->url[0];
});

$app->run();
