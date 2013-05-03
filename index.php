<!doctype html>
<html lang="en">
<head>
	<title>Lars Feyerabend</title>
	<meta name="description" content="web developer, hobby photographer, geek.">
	<meta name="GOOGLEBOT" content="NOSNIPPET" />
	<meta name="author" content="Lars Feyerabend">
	<meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" />
	<!--[if !IE]> -->
	<link rel="stylesheet" href="screen.min.css?v=4" media="screen" />
	<!-- <![endif]-->
	<script>var _gaq=[['_setAccount','UA-9868987-2'],['_trackPageview']];(function(d, t) {var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;g.src='//www.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s);})(document,'script');</script>
</head>
<body>
	<?php require_once 'MobileDetect.php'; $detect = new MobileDetect(); $m = $detect->isMobile(); ?>
	<h1>Lars Feyerabend</h1>
	<ul>
		<?php if (!$m): ?>
		<li><a href="feyerabend_lars.vcf" data-icon="V" download><span>Download vCard</span></a></li>
		<?php endif; ?>
		<li><a href="https://facebook.com/lars.feyerabend" rel="me" data-icon="F"><span>Facebook</span></a></li>
		<li><a href="https://twitter.com/pulsar84" rel="me" data-icon="T"><span>Twitter</span></a></li>
		<li><a href="https://alpha.app.net/pulsar" rel="me" data-icon="A"><span>App.net</span></a></li>
	</ul>
	<?php if ($m): ?>
	<dl>
	  <dt>phone</dt>
	  <dd><a href="tel:+4915122631969">+49 151 2263 1969</a></dd>

	  <dt>email</dt>
	  <dd><a href="mailto:post@lars-feyerabend.de">post@lars-feyerabend.de</a></dd>

	  <dt>skype</dt>
	  <dd><a href="skype:lars.feyerabend?call">lars.feyerabend</a></dd>
	</dl>
	<?php endif; ?>
</body>
</html>
