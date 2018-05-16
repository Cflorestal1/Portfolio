<?php 
	require_once '../vendor/autoload.php';

	$loader = new Twig_Loader_Filesystem(__DIR__.'/../templates');
	
	$twig = new Twig_Environment($loader);

	$key = new Twig_Function('key', function($arr){
		if(gettype($arr) == 'array'){
			return key($arr);
		} else {
			return $arr;
		}
	});

	$local  = new Twig_Function('local', function(){
		echo __DIR__;
	});

	$twig->addFunction($key);
	$twig->addFunction($local);
