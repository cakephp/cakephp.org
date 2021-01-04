<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Google Tag Manager -->
	<script>
		(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
				new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-T74JQQQ');
	</script>
	<!-- End Google Tag Manager -->
	<?= $this->Html->charset() ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>
		<?= $this->fetch('title') ?>
	</title>
	<?= $this->Html->meta('icon', ['type' => 'icon']) ?>
	<meta charset="utf-8" >
	<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:100,300,400,600,700,900,400italic%7CMontserrat:400,700' rel='stylesheet'>
	<?= $this->AssetCompress->css('public') ?>
	<?= $this->AssetCompress->css('fonts', ['raw' => true, 'pathPrefix' => null]) ?>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<?= $this->fetch('socialMeta') ?>

    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/manifest.json">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" type="image/png" href="/favicons/favicon.ico"/>
	<meta name="apple-mobile-web-app-title" content="CakePHP">
	<meta name="application-name" content="CakePHP">
    <meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<?= $this->fetch('meta') ?>
	<?= $this->fetch('css') ?>
	<link rel="icon" type="image/png" href="/favicons/favicon.png">
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
	<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T74JQQQ"
				  height="0" width="0" style="display:none;visibility:hidden">
	</iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<?= $this->element('Layout/default/navbar')?>
<?= $this->Flash->render() ?>
<?= $this->Flash->render('auth') ?>
<section class="clearfix">
	<?= $this->fetch('content') ?>
</section>
<?= $this->element('Layout/default/footer')?>
<?= $this->AssetCompress->script('public'); ?>
<?= $this->AssetCompress->script('not_compiled', ['raw' => true, 'pathPrefix' => null]); ?>
<?= $this->fetch('script') ?>
<script type="text/javascript">
	window.addEventListener("load", function() {
		cookieConsent("<?=$server?>");
	});
</script>

</body>
</html>
