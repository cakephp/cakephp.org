<?php

return [
	'Site' => [
		'contact' => [
			'email' => 'contact@cakedc.com'
		],
		'quotes' => [
			[
				'image' => 'quote/janey.png',
				'text' => '“I see our relationship as a long term one and have no intentions of ever moving away from CakeDC. We love you guys!”',
				'client' => 'Janey de Nordwal',
				'company' => 'Six Dinners Later Ltd.'
			],
			[
				'image' => 'quote/beth.png',
				'text' => '“CakeDC really put in the hours to save our troubled project, putting in the talent and experience to meet some very tight deadlines.”',
				'client' => 'Beth Jokhio',
				'company' => 'Avesta Systems Inc.'
			],
			[
				'image' => 'quote/david.png',
				'text' => '“Some of the smartest, fastest, and most talented developers I have ever worked with.”',
				'client' => 'David Kullmann',
				'company' => 'No Limits Labs LLC'
			],
			[
				'image' => 'quote/michael.png',
				'text' => '“Our experience so far has been excellent working with you guys.”',
				'client' => 'Michael Lebieniec',
				'company' => 'Code Creator LLC'
			],
		],
		'menu' => [
			'items' => [
				'community' => [
					'getInvolved' => [
						'url' => [
							'plugin' => false,
							'controller' => 'Pages',
							'action' => 'display',
							'get-involved',
							'prefix' => false
						],
						'title' => __('Get Involved')
					],
					'blog' => [
						'url' => 'http://bakery.cakephp.org/',
						'title' => __('Blog')
					],
					'newsletter' => [
						'url' => [
							'plugin' => false,
							'controller' => 'Pages',
							'action' => 'display',
							'newsletter',
							'prefix' => false
						],
						'title' => __('Newsletter')
					],
					'certification' => [
						'url' => 'http://certification.cakephp.org/',
						'title' => __('Certification')
					],
					'myCakephp' => [
						'url' => 'http://my.cakephp.org/login',
						'title' => __('My CakePHP')
					],
					'cakefest' => [
						'url' => 'http://cakefest.org',
						'options' => ['target' => '_blank'],
						'title' => __('CakeFest')
					],
				],
				'help' => [
					'issues' => [
						'url' => 'https://github.com/cakephp/cakephp/issues',
						'options' => ['target' => '_blank'],
						'title' => __('Issues (Github)')
					],
					'youtube' => [
						'url' => 'https://www.youtube.com/user/CakePHP',
						'options' => ['target' => '_blank'],
						'title' => __('Youtube Channel')
					],
					'google' => [
						'url' => 'https://plus.google.com/communities/108328920558088369819',
						'options' => ['target' => '_blank'],
						'title' => __('Google Groups')
					],
					'stackOverflow' => [
						'url' => 'http://stackoverflow.com/tags/cakephp',
						'options' => ['target' => '_blank'],
						'title' => __('Stack Overflow')
					],
					'commercial' => [
						'url' => 'http://www.cakedc.com/',
						'title' => __('Commercial')
					],
					'irc' => [
						'url' => 'https://kiwiirc.com/client/irc.freenode.net#cakephp',
						'options' => ['target' => '_blank'],
						'title' => __('Irc')
					],
					'slack' => [
						'url' => 'http://cakesf.herokuapp.com/',
						'options' => ['target' => '_blank'],
						'title' => 'Slack'
					],
					'facebook' => [
						'url' => 'https://www.facebook.com/CakePHP/',
						'options' => ['target' => '_blank'],
						'title' => 'Facebook'
					],
					'twitter' => [
						'url' => 'https://twitter.com/cakephp',
						'options' => ['target' => '_blank'],
						'title' => 'Twitter'
					],
				],
				'jobs' => [
					'cakeJobs' => [
						'url' => 'http://cakephpjobs.com/',
						'options' => ['target' => '_blank'],
						'title' => __('Cake Jobs')
					],
					'linkedin' => [
						'url' => 'https://www.linkedin.com/groups/4623165',
						'options' => ['target' => '_blank'],
						'title' => 'Linkedin'
					],
				],
				'documentation' => [
					'book' => [
						'url' => 'http://book.cakephp.org/',
						'title' => __('Book'),
					],
					'api' => [
						'url' => 'http://api.cakephp.org/',
						'title' => __('Api')
					],
					'videos' => [
						'url' => [
							'plugin' => false,
							'controller' => 'documentation',
							'action' => 'videos',
							'prefix' => false
						],
						'title' => __('Videos')
					],
					'privacy' => [
						'url' => [
							'plugin' => false,
							'controller' => 'Pages',
							'action' => 'display',
							'privacy',
							'prefix' => false
						],
						'title' => __('Privacy Policy')
					],
					'logos' => [
						'url' => [
							'plugin' => false,
							'controller' => 'Pages',
							'action' => 'display',
							'trademark',
							'prefix' => false
						],
						'title' => __('Logos & Trademarks')
					],
				],
				'serviceProvider' => [
					'cakedc' => [
						'url' => 'http://www.cakedc.com/',
						'title' => 'CakeDC',
						'options' => ['class' => 'hide']
					],
					'phpstorm' => [
						'url' => 'https://www.jetbrains.com/phpstorm/',
						'options' => ['target' => '_blank', 'class' => 'hide'],
						'title' => 'PhpStorm'
					],
					'rackspace' => [
						'url' => 'https://www.rackspace.com/',
						'options' => ['target' => '_blank', 'class' => 'hide'],
						'title' => 'Rackspace'
					]
				],
				'calendar' => [
					'meetups' => [
						'url' => '#',
						'title' => __('Meetups')
					],
					'events' => [
						'url' => '#',
						'title' => __('Events')
					],
				]
			]
		],
		'cakefest' => [
			'start_date' => '2016-05-26',
			'end_date' => '2016-05-29',
			'location' => __('Amsterdam'),
			'title' => 'Cakefest 2016'
		]
	],
];
