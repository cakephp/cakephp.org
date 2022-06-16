<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html lang="en">
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
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-743287-4"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-743287-4', { 'anonymize_ip': true });
	</script>
	<!-- End Global site tag (gtag.js) - Google Analytics -->
	<?= $this->Html->charset() ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>
		<?= $this->fetch('title') ?>
	</title>
	<?= $this->Html->meta('icon', ['type' => 'icon']) ?>
	<meta charset="utf-8" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Montserrat:wght@400;700&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,400&display=swap" rel="stylesheet">
	<?= $this->AssetCompress->css('public') ?>
	<?= $this->AssetCompress->css('fonts', ['raw' => true, 'pathPrefix' => null]) ?>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<?= $this->fetch('socialMeta') ?>

    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="/favicons/favicon.ico"/>
    <link rel="manifest" href="/favicons/manifest.json">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#D33C44">
    <meta name="msapplication-config" content="/favicons/browserconfig.xml" />
	<meta name="apple-mobile-web-app-title" content="CakePHP">
	<meta name="application-name" content="CakePHP">
    <meta name="msapplication-TileColor" content="#D33C44">
	<meta name="theme-color" content="#D33C44">

	<?= $this->fetch('meta') ?>
	<?= $this->fetch('css') ?>
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
