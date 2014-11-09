<?php $eweb = "http://localhost:8888/"; ?>
<!--http://ddpcad.com-->
<!doctype html>
<html lang="en">
	<head>
		<title><?php echo $title ?></title>
		<meta name="description" content="<?php echo $desc ?>">
		<meta name="keywords" content="<?php echo $keywords ?>">
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<?php echo ($section == "home" || $section == "about"  || $section == "portfolio") ? '<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">' : "" ?>
		<link rel="stylesheet" href="<?php echo $eweb ?>/css/foundation.min.css" />

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
        <script type="text/javascript" src="<?php  echo $eweb ?>/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
        <link rel="stylesheet" href="<?php  echo $eweb ?>/js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
        <script type="text/javascript">
        $(document).ready(function() {
            $(".fancybox").fancybox();
          });
        $(document).ready(function() {

            /* Apply fancybox to multiple items */

            $("a.fancyImage").fancybox({
                'transitionIn'	:	'none',
                'transitionOut'	:	'none',
                'speedIn'		:	400, 
                'speedOut'		:	200, 
                'overlayShow'	:	true
            });

        });
        </script>
		<style>
			<?php include($_SERVER['DOCUMENT_ROOT']."/css/global.css"); ?>
		</style>
	</head>
	<body>
	<header>
		<div class="row">
			<div class="columns small-4">
				<a <?php  ?> href="<?php echo $eweb ?>" class="<logo></logo>"><img src="<?php echo $eweb ?>/images/logo-ddp.png" alt="DDP Logo" /></a>
			</div>
			<div class="columns small-8 sloganName">
				<div><span class="name">Drafting &amp; Design Plus</span><br />
				<span class="slogan">Drafting for the commercial <span class="nobreak">glazing industry</span></span></div>
			</div>
		</div>
		<nav>
			<div id="gnav">
			<a href="<?php echo $eweb ?>/" class="<?php echo ($section == "home" ? "on" : "")?>">Home</a> 
			<a href="<?php echo $eweb ?>/about/" class="<?php echo ($section == "about" ? "on" : "")?>">About DDP</a> 
			<a href="<?php echo $eweb ?>/portfolio/" class="<?php echo ($section == "portfolio" ? "on" : "")?>">Portfolio</a> 
			<a href="<?php echo $eweb ?>/contact/" class="<?php echo ($section == "contact" ? "on" : "")?>">Contact</a>
			</div>
		</nav>
	</header>
	<div id="content">