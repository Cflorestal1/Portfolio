<?php 
	include 'loader.php';

	$nav = [
		[
			'pg' => 'Home',
			'href' => '/',
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
			'href' => '/projects',
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
			'sec1' => [
				'id' => 'intro',
				'subtitle' => 'Introduction',
				

			],
			'sec2' => [ 
				'id' => 'about',
				'subtitle' => 'More About Me',
			],
			'sec3' => [
				'id' => 'education',
				'subtitle' => 'Education',
			]
		]
	];
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
	$contact = [
		'form' => [
			[
				'label' => 'First name:',	
				'for' => 'firstname',
				'gclass' => 'form-group col-sm-12 col-lg-6',
				'name' => 'firstname',
				'type' => 'text',
				'class' => 'form-control'		
			],
			[
				'label' => 'Last name:',
				'for' => 'lastname',
				'gclass' => 'form-group col-sm-12 col-lg-6',
				'name' => 'lastname',
				'type' => 'text',
				'class' => 'form-control'
			],
			[
				'label' => 'Preferred reply method:',
				'gclass' => 'form-group col-lg-12',
				'id' => 'reply-op',
				'type' => 'opt',
				'class' => 'form-control sel-block',
				'op'	=> ['----','Phone','Email']

			],
			[
				'label' => 'Email address:',
				'for' => 'email',
				'gclass' => 'form-group col-sm-12 col-lg-6',
				'name' => 'email',
				'type' => 'email',
				'class' => 'form-control'
			], 
			[
				'label' => 'Phone number:',
				'for' => 'phone',
				'gclass' => 'form-group col-sm-12 col-lg-6',
				'name' => 'phone',
				'type' => 'tel',
				'class' => 'form-control'
			],
			[
				'label' => 'Reason for contact:',
				'id' => 'reason-opt',
				'gclass' => 'form-group col-lg-12',
				'type' => 'opt',	
				'class' =>  'form-control sel-block',
				'op' => ['Job offer','Product inquiry','Product support','Other']	

			],
			[
				'label' => 'Details:',
				'for' => 'details',
				'gclass' => 'form-group col-lg-12',
				'name' => 'details',
				'type' => 'textarea',
				'class' => 'form-control',
				'rows' => 4
	
			],
			[
				'name' => 'submit-btn',
				'class' => 'submit-btn',
				'gclass' => 'btn-container col-lg-2 offset-lg-10',
				'type' => 'submit',
				'value' => 'Submit'
			]

		]
	
	];
	
	$styles = ['header','footer','home','projects','contact'];
	$scripts = ['header','home','projects','contact'];

	echo $twig->render('home.html',['nav' => $nav, 
		'styles' => $styles, 
		'scripts' => $scripts,
		'home' => $home,
		'projects' => $projects,
		'contact' => $contact 
	]);


