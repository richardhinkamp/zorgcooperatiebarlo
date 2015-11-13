<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	<meta name="keywords" content="barlo, zorg, zorgcoöperatie, helpen, klussen, ouderen, huishouden, coöperatie" />
    <meta name="author" content="Jochem Veldboom" />
    <meta name="robots" content="index, follow" />	\
    <meta name="revisit-after" content="5 days" />
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
   	
	<link rel="shortcut icon" href="/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
    
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53856560-1', 'auto');
  ga('send', 'pageview');

</script>  
</head>

<body <?php body_class(); ?>>
	
<div id="header">
	<div id="header_wrap">
    	<img src="http://www.zorgcooperatiebarlo.nl/images/logo.png" class="logo" />
		<ul class="topnav">
        	<li><?php wp_nav_menu(array('menu' => 'Main Navigation Menu'));?></li>
        </ul>
    </div>
</div>

<?php if (is_home()) { ?>
<div id="slider">
    <div id="slider_wrap">
        <?php if ( function_exists( "easingsliderlite" ) ) { easingsliderlite(); } ?>
    </div>
</div>
<? } ?>    
