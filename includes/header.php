<?php
/**
 * @package Core
 */

// Handle any universal redirects, etc

// Setup generic data:
if(!$pageTitle) 		$pageTitle = 'Home'; // TODO: localize
if(!$pageKeywords) 		$pageKeywords = siteKeywords; // TODO: localize
if(!$js)				$js = array();
if(!$jsExternal)		$jsExteral = array();
if(!$css)				$css = array();

// Generic site includes
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<!--
████████╗██╗  ██╗██╗███████╗    ██╗███████╗                                 
╚══██╔══╝██║  ██║██║██╔════╝    ██║██╔════╝                                 
   ██║   ███████║██║███████╗    ██║███████╗                                 
   ██║   ██╔══██║██║╚════██║    ██║╚════██║                                 
   ██║   ██║  ██║██║███████║    ██║███████║                                 
   ╚═╝   ╚═╝  ╚═╝╚═╝╚══════╝    ╚═╝╚══════╝                                 
                                                                            
███████╗████████╗ ██████╗ ██████╗ ██╗   ██╗██████╗ ██████╗  ██████╗ ██████╗ 
██╔════╝╚══██╔══╝██╔═══██╗██╔══██╗╚██╗ ██╔╝██╔══██╗██╔══██╗██╔═══██╗██╔══██╗
███████╗   ██║   ██║   ██║██████╔╝ ╚████╔╝ ██║  ██║██████╔╝██║   ██║██████╔╝
╚════██║   ██║   ██║   ██║██╔══██╗  ╚██╔╝  ██║  ██║██╔══██╗██║   ██║██╔═══╝ 
███████║   ██║   ╚██████╔╝██║  ██║   ██║   ██████╔╝██║  ██║╚██████╔╝██║     
╚══════╝   ╚═╝    ╚═════╝ ╚═╝  ╚═╝   ╚═╝   ╚═════╝ ╚═╝  ╚═╝ ╚═════╝ ╚═╝     
									A CS50x project
												by Suriyaa R. Sundararuban
-->
<head>
	<meta charset="utf-8" />
    <meta name="keywords" content="<?=$pageKeywords?>" />
    <?=isset($pageDescription)?'<meta name="description" content="'.$pageDescription.'" />':''?>
	<title><?=$pageTitle?>: <?=$siteTitle?></title>
	<!-- DNS Prefetching -->
	<link rel="dns-prefetch" href="//ajax.googleapis.com">
    <!-- Global CSS -->
    <link href="assets/css/style.css" media="all" rel="stylesheet" />
    <link href="assets/css/dropzone.css" media="all" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="assets/css/style.css?v=1" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/fancybox/2.1.5/jquery.fancybox.css" media="screen" />
	<!-- Javascript -->
	<script type="text/javascript" src="//cdn.jsdelivr.net/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[rel=gallery]").fancybox({
          'transitionIn'    : 'none',
          'transitionOut'   : 'none',
          'titlePosition'   : 'over',
          'titleFormat'   : function(title, currentArray, currentIndex, currentOpts) {
            return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
          }
        });
      });
    </script>
    <script type="text/javascript" src="assets/js/dropzone.js"></script>
	<script type="text/javascript" src="<?=PROTOCOL?>ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <?php
	// JS that is hotlinked from a full server path
	for($i=0;$i<count($jsExternal);$i++){
		echo '<script type="text/javascript" src="'.PROTOCOL.$jsLib[$i].'"></script>';
	}
	// Load page specific dynamic JS
	for($i=0;$i<count($js);$i++){
		echo '<script type="text/javascript" src="/js/'.$js[$i].'.js?v='.CACHEBUST.'"></script>';
	}
	// CSS
	for($i=0;$i<count($css);$i++){
		echo '<link rel="stylesheet" type="text/css" href="/css/'.$css[$i].'.css?v='.CACHEBUST.'" />';
	}
?>
</head>
<body>
    <div id="header" class="center"><?=isset($siteTitle)?'<h1>&#10023; '.$siteTitle.' &#10023;</h1>':''?></div>

	<div class="center">
		<nav>
			<a href="index.php">Home</a> | <a href="upload.php">Upload</a></li> | <a href="showcase.php">Showcase</a> (<a href="showcase.php?gallery=verified">Verfied</a> | <a href="showcase.php?gallery=new">New</a>) | <a href="contact.php">Contact</a>
		</nav>
	</div>

	<div class="center">
		<h2><strong>Make book publishing more simplified and more democratised</strong></h2>
	</div>

	<hr>
