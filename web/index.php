<?php 
	include 'loader.php';

	$nav = [
		'Home' => ['Introduction','More About Me','Education'],
		'Projects' => ['Electronic','Hardware','Others'],
		'Contact Me'
	];

	
	$styles = ['header','footer','home','projects','contact'];
	$scripts = ['header','home','projects','contact'];

	echo $twig->render('base.html',['nav' => $nav, 'styles' => $styles, 'scripts' => $scripts ]);
