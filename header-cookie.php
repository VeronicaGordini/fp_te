<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="description" content="Federica Placci, cantante Faenza, concorso Solarolo, imitazioni, imitatrice, piano bar, Karaoke, cerimonie, matrimoni, intrattenimento"/>
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url');?>"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/prettyPhoto.css"/>
<link href='http://fonts.googleapis.com/css?family=Redressed' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico"/>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<script language="javascript" type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.6.1.min.js"> </script>
<script language="javascript" type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.slidingGallery-1.2.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.prettyPhoto.js"> </script>
<script language="javascript" type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.validate.js"></script>
<script language="javascript" type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/myscript.js"></script>
<script language="javascript" type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/formcontatti.js"> </script>

<!--script social media-->
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "ff1c19f7-4281-4a5b-8781-f183baef543c"}); </script>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	/*wp_head();*/
?>
</head>

<body id="body2" <?php body_class(); ?>>
  <div id="page" class="hfeed">
   <div id="bordoz">
        </div>

	<header id="branding" role="banner">
	  <div id="header">
      </div> <!--fine div header-->
	  
			<nav id="access_pagine" role="navigation">
				<a href="http://localhost:8888/federicaplacci/" title="ritorna alla home del sito">&nbsp;&nbsp;Home&nbsp;&nbsp;</a>
			</nav><!-- #access -->		
		</header><!-- #branding --> 
		

	<div id="main">