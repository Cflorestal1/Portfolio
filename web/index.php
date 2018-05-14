<?php 
	include 'loader.php';

	$nav = [
		[
			'pg' => 'Home',
			'href' => '/Portfolio/templates/home.html',
			'dd' => [[
					'sec' => 'Introduction',
					'href' => '#intro'
				],
				[	'sec' => 'More About Me',
					'href' => '#about'
				],
				[	'sec' => 'Education',
					'href' => '#education'
				]
			]
				
		],
		[
			'pg' => 'Projects',
			'href' => '/Portfolio/templates/projects.html',
			'dd' => [[
					'sec' => 'Electronic',
					'href' => '#electronic'
				],
				[	
					'sec' => 'Hardware',
					'href' => '#hardware'	
				],
				[
					'sec' => 'Others',
					'href' => '#others'
				]
			]
		],
		[
			'pg' => 'Contact Me',
			'href' => '/Portfolio/templates/contact.html'
		]
	];

	$home = [
		'section' => [
			'sec1' => 'intro',
			'sec2' => 'about',
			'sec3' => 'education'
		]
	];
	$projects = [
		'section' => [
			'sec1' => 'electronic',
			'sec2' => 'hardware',
			'sec3' => 'others'
		]
	];
	$contact = [];
	
	$styles = ['header','footer','home','projects','contact'];
	$scripts = ['header','home','projects','contact'];

	echo $twig->render('home.html',['nav' => $nav, 
		'styles' => $styles, 
		'scripts' => $scripts,
		'home' => $home,
		'projects' => $projects,
		'contact' => $contact 
	]);


