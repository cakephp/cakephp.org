<?php

return [
    'Site' => [
        'contact' => [
            'email' => 'contact@cakedc.com',
            'marketing_email' => 'marketing@cakedc.com',
        ],
        'quotes' => [
            [
                'image' => 'quote/megan.png',
                'text' => __('“We got a high ROI from converting our custom PHP app to CakePHP. We love the continually expanding suite of utilities, plugins, and development patterns at our disposal!”'),
                'client' => 'Megan Danz',
                'company' => 'Harbor Compliance',
                'url' => 'https://www.harborcompliance.com/'
            ],
            [
                'image' => 'quote/brad.png',
                'text' => __('“CakePHP was the most efficient way we could find to rapidly develop our intricate system.  We needed a platform that could handle our high volume of users without issues and CakePHP has certainly delivered.”'),
                'client' => 'Brad Lambden',
                'company' => 'iWorkZone',
                'url' => 'https://iworkzone.com/'
            ],
            [
                'image' => 'quote/julian.png',
                'text' => __('“From the simplest micro kiosk app to my highly complex gallery management app, CakePHP is the framework of choice. It allows modular development that makes sense, and it\'s architecturally solid and performant. Whatever you are building, CakePHP can help you get it done.”'),
                'client' => 'Julian Sander',
                'company' => 'Gallery Assistant'
            ],
            [
                'image' => 'quote/dwayne.png',
                'text' => __('“Having inherited this CakePHP project, I didn’t chose CakePHP so much as choose to continue using it.  After seeing the power and functionality of the framework in use, it wasn’t a difficult choice to make.”'),
                'client' => 'Dwayne Sander',
                'company' => 'Alerrt',
                'url' => 'http://alerrt.org/'
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
                    'issues' => [
                        'url' => 'https://github.com/cakephp/cakephp/issues',
                        'options' => ['target' => '_blank'],
                        'title' => __('Issues (Github)')
                    ],
                    'blog' => [
                        'url' => 'http://bakery.cakephp.org/',
                        'title' => __('Bakery')
                    ],
                    'awesomeList' => [
                        'url' => 'https://github.com/FriendsOfCake/awesome-cakephp',
                        'title' => __('Featured Resources')
                    ],
                    'training' => [
                        'url' => 'http://training.cakephp.org/',
                        'title' => __('Training')
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
                    'linkedin' => [
                        'url' => 'https://www.linkedin.com/groups/4623165',
                        'options' => ['target' => '_blank'],
                        'title' => __('Linkedin')
                    ],
                    'youtube' => [
                        'url' => 'https://www.youtube.com/user/CakePHP',
                        'options' => ['target' => '_blank'],
                        'title' => __('Youtube')
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
                'help' => [
                    'discourse' => [
                        'url' => 'http://discourse.cakephp.org',
                        'title' => __('Forum'),
                        'options' => ['target' => '_blank'],
                    ],
                    'stackOverflow' => [
                        'url' => 'http://stackoverflow.com/tags/cakephp',
                        'options' => ['target' => '_blank'],
                        'title' => __('Stack Overflow')
                    ],
                    'irc' => [
                        'url' => 'https://kiwiirc.com/client/irc.freenode.net#cakephp',
                        'options' => ['target' => '_blank'],
                        'title' => 'IRC'
                    ],
                    'slack' => [
                        'url' => 'http://cakesf.herokuapp.com/',
                        'options' => ['target' => '_blank'],
                        'title' => 'Slack'
                    ],
                    'commercial' => [
                        'url' => 'http://www.cakedc.com/',
                        'title' => __('Paid Support')
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
                        'title' => 'LinkedIn'
                    ],
                    'freelancer' => [
                        'url' => 'https://www.freelancer.com/find/CakePHP',
                        'options' => ['target' => '_blank'],
                        'title' => 'Freelancer'
                    ],
                    'odesk' => [
                        'url' => 'https://www.upwork.com/o/jobs/browse/skill/cakephp/',
                        'options' => ['target' => '_blank'],
                        'title' => 'oDesk'
                    ],
                ],
                'documentation' => [
                    'book' => [
                        'url' => 'http://book.cakephp.org/4',
                        'title' => __('Book'),
                    ],
                    'api' => [
                        'url' => 'http://api.cakephp.org/',
                        'title' => __('API')
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
                    'security' => [
                        'url' => 'https://book.cakephp.org/4.0/en/contributing/tickets.html#reporting-security-issues',
                        'title' => __('Reporting Security Issues'),
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
            'start_date' => '2018-06-14',
            'end_date' => '2018-06-17',
            'location' => __('Nashville, TN'),
            'title' => 'CakeFest 2018',
            'sponsors' => [
                [
                    'name' => 'CakeDC',
                    'logo' => ['img' => '/images/companies/logos/sponsors/cakedc.jpg', 'style' => 'height: 250px;'],
                    'copy' => ['text' => '<a href="https://cakedc.com">CakeDC</a> is the commercial entity behind the framework and was established by Larry Masters, founder of CakePHP. From startups and social networks, to e-commerce and enterprise level applications, CakeDC provides the highest quality CakePHP development available. CakeDC is committed to supporting the CakePHP framework and community.', 'style' => ''],
                    'link' => 'https://cakedc.com'
                ],
                [
                    'name' => 'Rackspace',
                    'logo' => ['img' => '/images/companies/logos/sponsors/rackspace.jpg', 'style' => 'height: 250px;padding-top: 70px;'],
                    'copy' => ['text' => 'Rackspace combines public cloud, private cloud, and dedicated bare metal computing to provide the perfect infrastructure for each customers specific needs. Rackspace is CakePHP\'s hosting partner.', 'style' => 'padding-bottom: 104px;'],
                    'link' => 'https://rackspace.com'
                ],
                [
                    'name' => 'StickerYou',
                    'logo' => ['img' => '/images/companies/logos/sponsors/stickeryou.png', 'style' => 'height: 250px;'],
                    'copy' => ['text' => 'As a valued partner and proud supporter of CakePHP, StickerYou is happy to offer a 10% discount on all <a href="https://www.stickeryou.com/products/custom-stickers/335/">Custom Stickers</a>, <a href="https://www.stickeryou.com/products/business-labels/655">Business Labels</a>, Roll Labels, Vinyl Lettering or Custom Decals. <b>StickerYou.com</b> is your one-stop shop to make your business stick. Use code <b>CAKE10</b> at checkout to apply your discount.', 'style' => 'padding-bottom: 26px;'],
                    'link' => 'https://stickeryou.com',
                ]
            ]
        ],
        'team' => [
            'larry' => [
                'name' => 'Larry Masters',
                'description' => __('Larry Masters the Co-Founder of the CakePHP project, first released in May 2005, and has contributed as a lead developer and advisor ever since. He has been involved in Open Source development for many years, dating back to his first contributions made to The Exchange Project, now called osCommerce. Prior to developing the CakePHP framework and starting Cake Software Foundation, Inc. he was a core developer of PostNuke, now continued as Zikula. He has 30 plus years experience in software development, system administration, and database design. His passion for excellence is shown in the code he writes and time dedicated to the CakePHP framework development over the past 11 years.'),
                'language' => __('English, US English, Broken English, Klingon'),
                'twitter' => 'phpnut',
                'github' => 'phpnut',
                'mycake' => 'phpnut',
                'role' => __('Co-Founder'),
                'image-url' => 'team/larry_masters.jpg',
                'country' => 'United States'
            ],
            'mark' => [
                'name' => 'Mark Story',
                'description' => __('Mark is a core member of the CakePHP team, serving as a lead developer since late 2009. During the day he works at Sentry. He fills the rest of his time hacking on CakePHP, playing MtG and being a dad.'),
                'language' => __('English'),
                'twitter' => 'mark_story',
                'github' => 'markstory',
                'mycake' => 'markstory',
                'role' => __('Lead Developer'),
                'image-url' => 'team/mark_story.jpg',
                'country' => 'Canada'
            ],
            'jose_lorenzo' => [
                'name' => 'José Lorenzo Rodríguez (Lorenzo/Jose_Zap)',
                'description' => __('José is a full-stack software developer that loves to solve difficult problems. He has been contributing to the CakePHP framework since 2009, and he often does talks about its amazing ORM. In his spare time, he teaches and practices mindfulness, ride his bike, or learns new programming languages.'),
                'language' => __('English, Spanish, French and Danish'),
                'twitter' => 'jose_zap',
                'github' => 'lorenzo',
                'mycake' => 'lorenzo',
                'role' => __('ORM Developer'),
                'image-url' => 'team/jose_lorenzo.jpg',
                'country' => 'Denmark'
            ],
            'savant' => [
                'name' => 'Jose Diaz-Gonzalez (Savant)',
                'description' => __('A developer based in New York, New York with an extremely active github account and an interest in Docker and Server Monitoring. He\'s been doing this since around 2008 and sometimes he blogs.'),
                'language' => __('English'),
                'twitter' => 'savant',
                'github' => 'josegonzalez',
                'mycake' => '',
                'role' => __('Core Member'),
                'image-url' => 'team/savant.jpg',
                'country' => 'United States'
            ],
            'admad' => [
                'name' => 'ADmad (ADmad)',
                'description' => __('A programmer by day and night, you will generally find him lurking in the deepest darkest corners of the internet. He\'s also involved in maintaining lot of popular CakePHP community plugins.'),
                'language' => __('English'),
                'twitter' => '',
                'github' => 'ADmad',
                'mycake' => 'ADmad',
                'role' => __('Core Member'),
                'image-url' => 'team/admad.jpg',
                'country' => 'India'
            ],
            'beakman' => [
                'name' => 'Bryan Crowe (Beakman)',
                'description' => __('Bryan Crowe is an open source developer living in New York, NY. He is involved in the CakePHP framework.'),
                'language' => __('English'),
                'twitter' => '_beakman',
                'github' => 'bcrowe',
                'mycake' => 'beakman',
                'role' => __('Core Member'),
                'image-url' => 'team/bryan_crowe.jpg',
                'country' => 'United States'
            ],
            'burzum' => [
                'name' => 'Florian Kramer (Burzum)',
                'description' => __('A software developer by profession and not just because it’s a job. Florian is a core CakePHP team
							developer as well as having worked with CakeDC itself, doing CakePHP development since 2007. Florian sees
							programming as a true profession and not just a job for him, he likes to work on open source projects after
							work hours and has an interest in Unity3D and c# as well. He’s working as lead developer for PSA Publishers
							Ltd'),
                'language' => __('English, German'),
                'twitter' => 'burzum793',
                'github' => 'burzum',
                'mycake' => 'burzum',
                'role' => __('Core Member'),
                'image-url' => 'team/florian_kramer.jpg',
                'country' => 'Germany'
            ],
            'mark_s' => [
                'name' => 'Mark Scherer (Dereuromark)',
                'description' => __('Mark has been a web-software enthusiast and Open Source Contributor for many years.
					He is a German Software Developer living in Berlin who started to use CakePHP in the 1.2 days.
					As one of the core developers of CakePHP he is a huge fan of rapid development - and has been using
					CakePHP a lot for this in his applications so far.
					On his blog dereuromark.de he sometimes blogs about web and CakePHP related topics.'),
                'language' => __('English, German'),
                'twitter' => 'dereuromark',
                'github' => 'dereuromark',
                'mycake' => 'dereuromark',
                'role' => __('Core Member'),
                'image-url' => 'team/mark_scherer.png',
                'country' => 'Germany'
            ],
            'jippi' => [
                'name' => 'Christian Winther (Jippi)',
                'description' => __('CTO at @bownty, @CakePHP core developer, tech advisor at @getlinkfire - lover of technology
			 					and servers - author of FriendsOfCake/crud'),
                'language' => __('English'),
                'twitter' => 'Jippi',
                'github' => 'jippi',
                'mycake' => 'jippi',
                'role' => __('Core Member'),
                'image-url' => 'team/christian_winther.jpg',
                'country' => 'Denmark'
            ],
            'dakota' => [
                'name' => 'Walther Lalk (Dakota)',
                'description' => __('Walther is a software engineer/developer primarily working in PHP (Using CakePHP as his framework of choice).
								Also a core member of the team, as well as the Croogo and Friends of Cake development team.
								When he is not developing or behind his PC screen, you can find him either spending time with his family,
								or at Scouts, where he is an adult leader/Scouter.'),
                'language' => __('English'),
                'twitter' => 'dakotairene',
                'github' => 'dakota',
                'mycake' => 'dakota',
                'role' => __('Core Member'),
                'image-url' => 'team/walther_lalk.jpg',
                'country' => 'South Africa'
            ],
            'jrbasso' => [
                'name' => 'Juan Basso (jrbasso)',
                'description' => __('An architect and engineer that loves software performance. Finds the balance between maintainable code and
							performance. Director at Zumba incentivize the whole team to contribute in open source projects and participate
							from meetups and conferences.'),
                'language' => __('English, Portuguese'),
                'twitter' => 'jrbasso',
                'github' => 'jrbasso',
                'mycake' => 'jrbasso',
                'role' => __('Core Member'),
                'image-url' => 'team/juan_basso.jpg',
                'country' => 'United States',
            ],
            'chinpei215' => [
                'name' => 'Kurita Takashi',
                'description' => __('Kurita is a PHP programmer living in Tokyo. Currently he works in web application security. Joined CakePHP
								core team in February 2016 and has been working closely with the team on security fixes.'),
                'language' => __('Japanese'),
                'twitter' => 'chinpei215',
                'github' => 'chinpei215',
                'mycake' => 'chinpei215',
                'role' => __('Core Member'),
                'image-url' => 'team/chinpei215.png',
                'country' => 'Japan'
            ],
            'megan' => [
                'name' => 'Megan Lalk',
                'description' => __('Besides marketing, social media and community management, Megan is around to assist in
					general queries, community assistance and CakeFest planning.'),
                'language' => __('English'),
                'mycake' => 'Megslalk',
                'role' => __('CakePHP Community Manager'),
                'image-url' => 'team/megan.jpg',
                'country' => 'South Africa'
            ],
            'rchavik' => [
                'name' => 'Rachman Chavik (rchavik)',
                'description' => __('Cakephp and Croogo core team member, surfer wannabe. Oh, I am Super Awesome too.'),
                'language' => __('English'),
                'twitter' => 'rchavik',
                'mycake' => 'rchavik',
                'role' => __('Core Member'),
                'image-url' => 'team/rchavik.jpg',
                'country' => 'Indonesia'
            ],
            'cgtag' => [
                'name' => 'Nik Foscarini (cgtag)',
                'description' => __('Nik is a programmer and 3D artist that enjoys contributing to open source projects. Joined CakePHP
				core team in October 2016 and has been working on database improvements.'),
                'language' => __('English'),
                'role' => __('Core Member'),
                'image-url' => 'team/nik_foscarini.jpg',
                'country' => 'Canada'
            ],
            'cleptric' => [
                'name' => 'Michael Hoffmann (Cleptric)',
                'description' => __('Michael started using CakePHP in early 2014 and is currently working as a web developer for magicplan in Munich, Germany. He joined the Core Team in February 2017.'),
                'language' => __('German, English'),
                'twitter' => 'cleptric',
                'github' => 'cleptric',
                'mycake' => 'cleptric',
                'role' => __('Core Member'),
                'image-url' => 'team/cleptric.jpg',
                'country' => 'Germany'
            ],
            'antograssiot' => [
                'name' => 'Anthony Grassiot (antograssiot)',
                'description' => __('Anthony is a former electrical/automation engineer who started using CakePHP back in 2014. He joined the core team in September 2015. Anthony now works as a full time Web developer at TLD. Besides web development, he is also a music enthusiast, playing drums and trumpet.'),
                'language' => __('French, English, Spanish'),
                'twitter' => 'antograssiot',
                'github' => 'antograssiot',
                'mycake' => 'antograssiot',
                'role' => __('Core Member'),
                'image-url' => 'team/antograssiot.jpg',
                'country' => 'France'
            ],
            'ravage' => [
                'name' => 'Marc Würth (ravage)',
                'description' => __('Marc is an Open Source enthusiast from Basel, Switzerland. ' .
                    'He started contributing to CakePHP at the end of 2012 (CakePHP 2.2.4), becoming a documentation team member soon after. ' .
                    'He also co-maintains PHPMD and a few other projects. ' .
                    'At ORCA Services AG he works as Head of Development. ' .
                    'He cares about code style, test coverage & clean code. ' .
                    'In his spare time he is passionate about electronic dance music, likes to play PC games (mostly point & click adventures & single player role playing games), ' .
                    'likes to swim or relax in the sauna, enjoys a good movie or generally spending time with his family, friends, his two Maine Coon cats & his Cimarrón Uruguayo dog.'),
                'language' => __('Swiss-German, German, English'),
                'github' => 'ravage84',
                'mycake' => 'ravage84',
                'role' => __('Core Member'),
                'image-url' => 'team/ravage.jpg',
                'country' => 'Switzerland'
            ],
            'steinkel' => [
                'name' => 'Jorge González (steinkel)',
                'description' => __('Jorge is a passionate developer since he started playing with an MSX at 12. ' .
                    'He used different technologies until he discovered the CakePHP Framework (love at first sight). ' .
                    'He joined Cake Development Corporation (CakeDC) in 2012, working now as Senior CakePHP Developer and Project Manager. '),
                'language' => __('Spanish, English'),
                'github' => 'steinkel',
                'mycake' => 'steinkel',
                'role' => __('CakePHP Trainer'),
                'image-url' => 'team/jorge_gonzalez.jpg',
                'country' => 'Spain'
            ],
        ],
        'writers_form_enabled' => true,
    ],
];
