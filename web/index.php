<?php 
	include 'loader.php';

	$nav = [
		'Home' => ['Introduction','More About Me','Education'],
		'Projects' => ['Electronic','Hardware','Others'],
		'Contact Me'
	];

	
	$css = ['header','footer','home','projects','contact'];


	echo $twig->render('base.html',['nav' => $nav, 'css' => $css]);
