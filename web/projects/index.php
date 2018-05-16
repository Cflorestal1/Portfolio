<?php 
	require_once '../loader.php';

	$projects = [
		'section' => [
			'sec1' => [
				'id' => 'electronic',
				'subtitle' => 'Electronic'
			],
			'sec2' => [
				'id' => 'hardware',
				'subtitle' => 'Hardware'
			],
			'sec3' => [
				'id' => 'others',
				'subtitle' => 'Others'
			]
		]
	];
	echo $twig->render('projects.html', [
		'projects' => $projects,
	])

?>
