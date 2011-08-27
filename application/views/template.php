<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<!-- This template was created by Mantis-a [http://www.mantisa.cz/]. For more templates visit Free website templates [http://www.mantisatemplates.com/]. -->

<meta name="Description" content="Web FrontEnd for Gammu" />
<meta name="Keywords" content="websms" />
<meta name="robots" content="all,follow" />
<meta name="author" content="KecambahLinux" />
<meta name="copyright" content="KecambahLinux [http://www.kecambahlinux.com/]" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- DOJO Load -->
<script src="<?=base_url("assets/dojo/dojo/dojo.js")?>" djConfig="parseOnLoad: true"></script>
<? if (isset($js)) include($js); ?>

<!-- CSS -->
<link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>" type="text/css" media="screen, projection, tv" />
<link rel="stylesheet" href="<?=base_url("assets/css/style-print.css")?>" type="text/css" media="print" />
<link rel="stylesheet" href="<?=base_url("assets/css/spech-bubble.css")?>" type="text/css" />

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

<title>WEBSMS | <?=$title?></title>
</head>

<body <? if (isset($themes)) echo "class='".$themes."'"?>>
<div id="bodywrap">

	<!-- Title -->
	<div class="title">
		<div class="title-top">
		<div class="title-left">
		<div class="title-right">
		<div class="title-bottom">
		<div class="title-top-left">
		<div class="title-bottom-left">
		<div class="title-top-right">
		<div class="title-bottom-right">
			<h1><a href="<?=site_url()?>" title="Go to homepage"><span>WEBSMS</span> KECAMBAHLINUX</a></h1>
			<p>web based gammu frontend&hellip;</p>
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
	</div>
	<!-- Title end -->

<hr class="noscreen" />

	<div class="content">

	<div class="column-left">
		<h3>MENU</h3>
		<a href="#skip-menu" class="hidden">Skip menu</a>
		<ul class="menu">
			<li><a href="<?=site_url()?>" <?if(isset($status))echo "class=\"active\""?>>STATUS</a></li>
			<li><a href="<?=site_url("inbox")?>" <?if(isset($inbox))echo "class=\"active\""?>>Inbox</a></li>
			<li><a href="<?=site_url("outbox")?>" <?if(isset($outbox))echo "class=\"active\""?>>Outbox</a></li>
			<li><a href="<?=site_url("sentitems")?>" <?if(isset($sentitems))echo "class=\"active\""?>>Sent items</a></li>
			<li class="last"><a href="#">Phone Books</a></li>
		</ul>
		</div>

		<div id="skip-menu"></div>
		<div class="column-right">
			<div class="box">
			<div class="box-top"></div>
			<div class="box-in">
<!-- CONTENT START -->
<? include ($content); ?>
<!-- CONTENT END -->
			</div>
			</div>
<!-- FOOTER START -->
			<div class="box-bottom">
			<hr class="noscreen" />
			<div class="footer-info-left"><a href="<?=index_page()?>">WebSMS</a>, 2011. All rights reserved.</div>
			<div class="footer-info-right"><a href="http://www.kecambahlinux.com/">KecambahLinux</a></div>
			</div>
		</div>

	<div class="cleaner">&nbsp;</div>
	</div>
</div>
</body>
</html>