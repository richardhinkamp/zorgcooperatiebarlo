<?php get_header(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
		<div id="content_wrapper">
    		<div id="breadcrumbs">
    			<?php if(function_exists('bcn_display') && !is_front_page())
				{
				bcn_display();
				}?>
			</div>
            
            <div id="content">
				<div id="main_title">Deze pagina bestaat niet.</div>
                <div id="main_content">Klik <a href="<?php echo get_option('home'); ?>"/>hier</a> om terug te gaan naar de Homepage.</div>   	
        	</div>
        </div>
    </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>