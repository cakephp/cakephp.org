<?php

return [
    // use major.minor to indicate current version in home page
    'App.cakeVersion' => '4.3',
    'Site' => [
        'contact' => [
            'email' => 'contact@cakedc.com',
            'marketing_email' => 'marketing@cakedc.com',
        ],
        'quotes' => [
            [
                'image' => 'quote/megan.png',
                'text' => __('We got a high ROI from converting our custom PHP app to CakePHP. We love the continually expanding suite of utilities, plugins, and development patterns at our disposal!'),
                'client' => 'Megan Danz',
                'company' => 'Harbor Compliance',
                'url' => 'https://www.harborcompliance.com/',
            ],
            [
                'image' => 'quote/brad.png',
                'text' => __('CakePHP was the most efficient way we could find to rapidly develop our intricate system.  We needed a platform that could handle our high volume of users without issues and CakePHP has certainly delivered.'),
                'client' => 'Brad Lambden',
                'company' => 'iWorkZone',
                'url' => 'https://iworkzone.com/',
            ],
            [
                'image' => 'quote/julian.png',
                'text' => __('From the simplest micro kiosk app to my highly complex gallery management app, CakePHP is the framework of choice. It allows modular development that makes sense, and it\'s architecturally solid and performant. Whatever you are building, CakePHP can help you get it done.'),
                'client' => 'Julian Sander',
                'company' => 'Gallery Assistant',
            ],
            [
                'image' => 'quote/dwayne.png',
                'text' => __('Having inherited this CakePHP project, I didn’t choose CakePHP so much as chose to continue using it.  After seeing the power and functionality of the framework in use, it wasn’t a difficult choice to make.'),
                'client' => 'Dwayne Sander',
                'company' => 'Alerrt',
                'url' => 'https://alerrt.org/',
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
                            'prefix' => false,
                        ],
                        'title' => __('Get Involved'),
                    ],
                    'issues' => [
                        'url' => 'https://github.com/cakephp/cakephp/issues',
                        'options' => ['target' => '_blank'],
                        'title' => __('Issues (Github)'),
                    ],
                    'blog' => [
                        'url' => 'https://bakery.cakephp.org/',
                        'title' => __('Bakery'),
                    ],
                    'awesomeList' => [
                        'url' => 'https://github.com/FriendsOfCake/awesome-cakephp',
                        'title' => __('Featured Resources'),
                    ],
                    'training' => [
                        'url' => 'https://training.cakephp.org/',
                        'title' => __('Training'),
                    ],
                    'meetups' => [
                        'url' => [
                            'plugin' => false,
                            'controller' => 'Pages',
                            'action' => 'display',
                            'meetups',
                            'prefix' => false,
                        ],
                        'title' => __('Meetups'),
                    ],
                    'myCakephp' => [
                        'url' => 'https://my.cakephp.org/login',
                        'title' => __('My CakePHP'),
                    ],
                    'cakefest' => [
                        'url' => 'https://cakefest.org',
                        'options' => ['target' => '_blank'],
                        'title' => __('CakeFest'),
                    ],
                    'newsletter' => [
                        'url' => [
                            'plugin' => false,
                            'controller' => 'Pages',
                            'action' => 'display',
                            'newsletter',
                            'prefix' => false,
                        ],
                        'title' => __('Newsletter'),
                    ],
                    'linkedin' => [
                        'url' => 'https://www.linkedin.com/groups/4623165',
                        'options' => ['target' => '_blank'],
                        'title' => __('Linkedin'),
                    ],
                    'youtube' => [
                        'url' => 'https://www.youtube.com/user/CakePHP',
                        'options' => ['target' => '_blank'],
                        'title' => __('Youtube'),
                    ],
                    'facebook' => [
                        'url' => 'https://www.facebook.com/CakePHP/',
                        'options' => ['target' => '_blank'],
                        'title' => 'Facebook',
                    ],
                    'twitter' => [
                        'url' => 'https://twitter.com/cakephp',
                        'options' => ['target' => '_blank'],
                        'title' => 'Twitter',
                    ],
                ],
                'help' => [
                    'discourse' => [
                        'url' => 'https://discourse.cakephp.org',
                        'title' => __('Forum'),
                        'options' => ['target' => '_blank'],
                    ],
                    'stackOverflow' => [
                        'url' => 'https://stackoverflow.com/tags/cakephp',
                        'options' => ['target' => '_blank'],
                        'title' => __('Stack Overflow'),
                    ],
                    'irc' => [
                        'url' => 'https://kiwiirc.com/client/irc.freenode.net#cakephp',
                        'options' => ['target' => '_blank'],
                        'title' => 'IRC',
                    ],
                    'slack' => [
                        'url' => 'https://cakesf.herokuapp.com/',
                        'options' => ['target' => '_blank'],
                        'title' => 'Slack',
                    ],
                    'discord' => [
                        'url' => 'https://discord.gg/k4trEMPebj',
                        'options' => ['target' => '_blank'],
                        'title' => 'Discord',
                    ],
                    'commercial' => [
                        'url' => 'https://www.cakedc.com/',
                        'title' => __('Paid Support'),
                    ],
                ],
                'jobs' => [
                    'cakeJobs' => [
                        'url' => 'https://cakephpjobs.com/',
                        'options' => ['target' => '_blank'],
                        'title' => __('Cake Jobs'),
                    ],
                    'linkedin' => [
                        'url' => 'https://www.linkedin.com/groups/4623165',
                        'options' => ['target' => '_blank'],
                        'title' => 'LinkedIn',
                    ],
                    'freelancer' => [
                        'url' => 'https://www.freelancer.com/find/CakePHP',
                        'options' => ['target' => '_blank'],
                        'title' => 'Freelancer',
                    ],
                    'odesk' => [
                        'url' => 'https://www.upwork.com/o/jobs/browse/skill/cakephp/',
                        'options' => ['target' => '_blank'],
                        'title' => 'oDesk',
                    ],
                ],
                'documentation' => [
                    'book' => [
                        'url' => 'https://book.cakephp.org/4',
                        'title' => __('Book'),
                    ],
                    'api' => [
                        'url' => 'https://api.cakephp.org/',
                        'title' => __('API'),
                    ],
                    'videos' => [
                        'url' => [
                            'plugin' => false,
                            'controller' => 'documentation',
                            'action' => 'videos',
                            'prefix' => false,
                        ],
                        'title' => __('Videos'),
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
                            'prefix' => false,
                        ],
                        'title' => __('Privacy Policy'),
                    ],
                    'logos' => [
                        'url' => [
                            'plugin' => false,
                            'controller' => 'Pages',
                            'action' => 'display',
                            'trademark',
                            'prefix' => false,
                        ],
                        'title' => __('Logos & Trademarks'),
                    ],
                ],
                'serviceProvider' => [
                    'cakedc' => [
                        'url' => 'https://www.cakedc.com/',
                        'title' => 'CakeDC',
                        'options' => ['class' => 'hide'],
                    ],
                    'phpstorm' => [
                        'url' => 'https://www.jetbrains.com/phpstorm/',
                        'options' => ['target' => '_blank', 'class' => 'hide'],
                        'title' => 'PhpStorm',
                    ],
                ],
                'calendar' => [
                    'meetups' => [
                        'url' => '#',
                        'title' => __('Meetups'),
                    ],
                    'events' => [
                        'url' => '#',
                        'title' => __('Events'),
                    ],
                ],
            ],
        ],
        'cakefest' => [
            'start_date' => '2019-11-07',
            'end_date' => '2019-11-10',
            'location' => __('Tokyo, Japan'),
            'title' => 'CakeFest 2019',
            'sponsors' => [
                [
                    'name' => 'CakeDC',
                    'logo' => ['img' => '/images/companies/logos/sponsors/cakedc.jpg'],
                    'copy' => ['text' => '<a href="https://cakedc.com" target="_blank">CakeDC</a> is the commercial entity behind the framework and was established by Larry Masters, founder of CakePHP. From startups and social networks, to e-commerce and enterprise level applications, CakeDC provides the highest quality CakePHP development available. CakeDC is committed to supporting the CakePHP framework and community.', 'style' => ''],
                    'link' => 'https://cakedc.com',
                ],
                [
                    'name' => 'Linode',
                    'logo' => ['img' => '/images/companies/logos/sponsors/linode.jpg'],
                    'copy' => ['text' => '<a href="https://www.linode.com/" target="_blank">Linode</a> is the largest independent open cloud provider in the world with 10 global data centers serving over 800,000 customers and businesses around the globe. Linode products, services, and people enable developers and businesses to build, deploy, and scale applications more easily and cost-effectively in the cloud.', 'style' => ''],
                    'link' => 'https://www.linode.com/',
                ],
            ],
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
                'country' => 'United States',
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
                'country' => 'Canada',
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
                'country' => 'Denmark',
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
                'country' => 'United States',
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
                'country' => 'India',
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
                'country' => 'Germany',
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
                'country' => 'Germany',
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
                'country' => 'South Africa',
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
                'country' => 'Japan',
            ],
            'megan' => [
                'name' => 'Megan Lalk',
                'description' => __('Besides marketing, social media and community management, Megan is around to assist in
					general queries, community assistance and CakeFest planning.'),
                'language' => __('English'),
                'mycake' => 'Megslalk',
                'role' => __('CakePHP Community Manager'),
                'image-url' => 'team/megan.jpg',
                'country' => 'South Africa',
            ],
            'rchavik' => [
                'name' => 'Rachman Chavik (rchavik)',
                'description' => __('Cakephp and Croogo core team member, surfer wannabe. Oh, I am Super Awesome too.'),
                'language' => __('English'),
                'twitter' => 'rchavik',
                'mycake' => 'rchavik',
                'role' => __('Core Member'),
                'image-url' => 'team/rchavik.jpg',
                'country' => 'Indonesia',
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
                'country' => 'Germany',
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
                'country' => 'Switzerland',
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
                'country' => 'Spain',
            ],
            'garas' => [
                'name' => 'Edgaras Janušauskas (garas)',
                'description' => __('Edgaras is a PHP software developer from Lithuania. ' .
                    'He started using CakePHP in 2011 and joined CakePHP team in October 2018.'),
                'language' => __('Lithuanian, English'),
                'github' => 'garas',
                'mycake' => 'garas',
                'role' => __('Core Member'),
                'image-url' => 'team/Garas.jpg',
                'country' => 'Lithuania',
            ],
            'pfeifer_kevin' => [
                'name' => 'Kevin Pfeifer (LordSimal)',
                'description' => __('Kevin is a web developer from Austria. ' .
                    'He started using CakePHP in 2017 and joined CakePHP team in December 2021.'),
                'language' => __('German, English'),
                'github' => 'LordSimal',
                'twitter' => 'lordsimal',
                'role' => __('Core Member'),
                'image-url' => 'team/pfeifer_kevin.jpg',
                'country' => 'Austria',
            ],
        ],
        'writers_form_enabled' => true,
        'meetups' => [
            [
                'title' => __('CakePHP 4 online meetup'),
                'hosted-by' => [
                    'name' => 'Mark Scherer',
                    'url' => 'https://github.com/dereuromark',
                ],
                'when' => '6/18/20, 11:00 AM UTC',
                'where' => [
                    'name' => 'Join CakePHP 4 Meetup June 18 - 11 AM UTC',
                    'url' => 'https://webinar.ringcentral.com/j/1483697678?pwd=WEVsSFB2Q3A3S3BkWktvaENnVGhqQT09',
                ],
                'description' => "
The 3rd virtual CakePHP Community meetup is coming up!

We're using topics from the previous meetup, and we'll be spicing them with some typical use cases in real applications:

## Topics

- Xdebug configuration
- Dev environment setup using vagrant, docker
- Queue plugin
- Reactphp configuration and usage
- STI Alternative mysql plugin

The topics and contents will be open to changes, and also open to contributions from attendees. We'll have some time for lightning talks to present about an idea/project/technology that you think it'll be useful for the community.

Please note the meeting will be hosted through RingCentral webinars, you'll be prompted to download the RingCentral client, so it might be wise to join 10 minutes before the event starts to test your audio etc.
We will share the link here prior to the event.

---

Note: This time Japan and other countries more eastern should also have a chance, so we need to do it a bit earlier for us.
11 AM UTC = 13:00 Berlin Time (MESZ)",
            ],
            [
                'title' => __('CakePHP 4 online meetup'),
                'hosted-by' => [
                    'name' => 'Jorge M. González Martín',
                    'url' => 'https://github.com/steinkel',
                ],
                'when' => '5/20/20, 5:00 PM UTC',
                'where' => [
                    'name' => 'Join CakePHP 4 Meetup May 20 - 5 PM UTC',
                    'url' => 'https://webinar.ringcentral.com/j/1497230191?pwd=cTJ6Q0Y5cmc3amVGZXE4WkxiajVBdz09',
                ],
                'description' => "The 2nd virtual CakePHP Community meetup is coming up!

 We're using topics from the first meetup, and we'll be spicing them with some typical use cases in real applications:

 ## Topics

 - 'Baking a new plugin and TDD for it' by Mark Scherer ~1h
 - 'Authorization plugin' by Jorge González ~1h
 - 'Pro-Debug with Xdebug + stepping through in IDE' by Jorge González ~20m
 - Mark Story will be around too and might be talking about common-table-expressions...

 The topics and contents will be open to changes, and also open to contributions from attendees. We'll have some time for lightning talks to present about an idea/project/technology that you think it'll be useful for the community.

 Please note the meeting will be hosted through RingCentral webinars, you'll be prompted to download the RingCentral client, so it might be wise to join 10 minutes before the event starts to test your audio etc.
                ",
            ],
            [
                'title' => __('Our first online Meetup (international edition)'),
                'hosted-by' => [
                    'name' => 'Mark Scherer',
                    'url' => 'https://github.com/dereuromark',
                ],
                'when' => '5/01/20 5:00 PM UTC',
                'where' => [
                    'name' => 'CakePHP Meetup',
                    'url' => 'https://www.meetup.com/CakePHP-DE/events/270064069',
                ],
                'description' => "Hey Folks!
        We didn't have a meetup for a while here in Berlin, and I think now with more and more
        events
        moving
        to online-only, it is time to set up a gathering again for our community.
        And since this is now fully online, why not inviting everyone of the (Cake)PHP coding community
        out
        there?

        ### Save the data

        We will give you the details shortly.
        If you want to co-host or add yourself as a speaker, please reach out with your topic.

        Main topics so far:
        - CakePHP 4.1 preview
        - IdeHelper / IDE usability and development speedup tips.
        - Auth with Authentication plugin
        - Fixture Factories

        ### Time-Schedule
        We want to do it 7PM Berlin time (GMT+2), so folks e.g. in the USA can join in still in the
        late
        morning.
        And the ones more east, should still also be able to join in, as well.

        Note: Event in English.",
            ],
        ],
    ],
];
