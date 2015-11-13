<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	<meta name="keywords" content="barlo, zorg, zorgcoöperatie, helpen, klussen, ouderen, huishouden, coöperatie" />
    <meta name="author" content="Jochem Veldboom, Richard Hinkamp" />
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
   	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/BLANK-Theme/fancyBox/source/jquery.fancybox.css" media="screen" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
<div id="header">
	<div id="header_wrap">
    	<img src="/images/logo.png" class="logo" />
		<ul class="topnav">
        	<li><?php wp_nav_menu(array('menu' => 'Main Navigation Menu'));?></li>
        </ul>
    </div>
</div>

<?php if (is_home()) { ?>
<div id="slider">
    <div id="slider_wrap">
		<?php
		global $wpdb;
		$query = $wpdb->prepare("SELECT * FROM ".$wpdb->prefix."huge_itslider_images where slider_id = '%d' order by ordering ASC",1);
		$images = $wpdb->get_results($query);
		foreach($images as $image) {
			printf('<div class="slide"><img src="%s" alt="%s"></div>', $image->image_url, $image->name);
		}
		?>
    </div>
</div>
<?php } ?>    
