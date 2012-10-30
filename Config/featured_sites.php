<?php

/**
 * Conventions:
 *
 * - Add new sites to the bottom of each group
 * - Expire old sites from the top of each group
 * - The 'Using' group uses vertical space on the site - try not to make the list any longer.
 *
 */

$config = array(
	'Sites' => array(
		'JustBaked' => array(
			array(
				'image' => 'hotscripts.jpg',
				'name' => 'Hot Scripts',
				'url' => 'http://www.hotscripts.com'),
			array(
				'image' => 'piano-marvel.jpg',
				'name' => 'Piano Marvel',
				'url' => 'http://pianomarvel.com'),
			array(
				'image' => 'feedbackforms.jpg',
				'name' => 'Website Feedback Forms',
				'url' => 'https://websitefeedbackforms.com/'),
			array(
				'image' => 'copify.jpg',
				'name' => 'Copify',
				'url' => 'http://www.copify.com'),
			array(
				'image' => 'social-poke.jpg',
				'name' => 'socialpoke.me',
				'url' => 'http://socialpoke.me'),
			array(
				'image' => 'flipcomp.jpg',
				'name' => 'Flipcomp',
				'url' => 'http://www.flipcomp.com'),
			array(
				'image' => 'booking-boy.jpg',
				'name' => 'Booking Boy',
				'url' => 'http://www.bookingboy.com/'),
			array(
				'image' => 'affilorama.jpg',
				'name' => 'Affilorama',
				'url' => 'http://www.affilorama.com'),
			array(
				'image' => 'traffic-travis.png',
				'name' => 'Traffic Travis',
				'url' => 'http://www.traffictravis.com'),
			array(
				'image' => 'fmtv.jpg',
				'name' => 'followmy.tv',
				'url' => 'http://followmy.tv'),
			array(
				'image' => 'teamspeak.jpg',
				'name' => 'teamspeak.net',
				'url' => 'http://teamspeak.net'),
			array(
				'image' => '7shifts.jpg',
				'name' => '7shifts',
				'url' => 'http://7shifts.com'),
		),
		'Using' => array(
			// *** Expired: 2012-04-30
			// array(
			// 	'name' => 'KZO',
			// 	'url' => 'http://kzoinnovations.com'),

			// *** Expired: 2012-04-30
			// array(
			// 	'name' => 'My Gas Feed',
			// 	'url' => 'http://www.mygasfeed.com'),

			// *** Expired: 2012-05-10
			// array(
			// 	'name' => 'The Daily Save',
			// 	'url' => 'http://www.thedailysave.com'),
			array(
				'name' => 'Ambling Books',
				'url' => 'http://amblingbooks.com'),
			array(
				'name' => 'Croogo',
				'url' => 'http://croogo.org'),
			array(
				'name' => 'Scratch by MIT',
				'url' => 'http://scratch.mit.edu'),
			array(
				'name' => 'MapMe',
				'url' => 'http://www.mapme.com'),
			array(
				'name' => 'Netmums',
				'url' => 'http://www.netmums.com/'),
			array(
				'name' => 'Auctigo',
				'url' => 'http://www.auctigo.com'),
			array(
				'name' => 'KüchenAtlas',
				'url' => 'http://www.kuechen-atlas.de'),
			array(
				'name' => 'Clinic Finder',
				'url' => 'http://theclinicfinder.com'),
		),
	),
);
return $config;
