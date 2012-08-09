<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<title><?php bloginfo('name'); ?> <?php if ( is_single() || is_page() ) { ?> <?php } ?> <?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="screen" />
	<!--[if IE 6]>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie6.css" type="text/css" media="screen" />
	<![endif]-->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>

<body>
	<div id="wrapper">
		<div id="main-nav" class="col span-12">
			<ul>
				<li 
				  class="page_item page-item-2 <?php if(is_home()){echo 'current_page_item';}?>">
				  <a href="<?php bloginfo('siteurl'); ?>" title="Home">Home</a>
				</li>        
				<?php wp_list_pages('&title_li='); ?>
			</ul>			
		</div>		
		
		<div id="header" class="col last span-12">
			<h1><a href="<?php bloginfo('url'); ?>">public boolean wirkFunktion (int quotient)</a></h1>
			<h2>&nbsp;&nbsp;{ return quotient < 60; }</h2>
		</div>

		<hr />
