<?php get_header(); ?>

		<?php if (have_posts()) : ?>
        	<div id="content_wrapper">
            	<div id="breadcrumbs">
    				<?php if(function_exists('bcn_display') && !is_front_page())
					{
					bcn_display();
					}?>
				</div>
					<div id="content">
                    	<div id="main">
                    		<div id="main_title">
							<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                            <?php /* If this is a category archive */ if (is_category()) { ?>
                            Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category
                            <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
                            Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;
                            <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                            Archive for <?php the_time('F jS, Y'); ?>
                            <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                            Archive for <?php the_time('F, Y'); ?>
                            <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                            Archive for <?php the_time('Y'); ?>
                            <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                            Author Archive
                            <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                            Blog Archives
                            
                            <?php } ?>
                    		</div>
                            
                            <div id="main_content">                
							<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
                            <?php while (have_posts()) : the_post(); ?>
                            	<div <?php post_class() ?>>
                                    <div id="archive_post_title">
									<a href="<?php the_permalink() ?>"><?php the_title(); ?></a> (<?php the_time('d F Y') ?>) 
                                    </div>
                                </div>
                
                            <?php endwhile; ?>
                
                            <?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
                            </div>
                    	</div>
            		</div>
           	</div>
			
	<?php else : ?>
    		<div id="content_wrapper">
            	<div id="breadcrumbs">
    				<?php if(function_exists('bcn_display') && !is_front_page())
					{
					bcn_display();
					}?>
				</div>
					<div id="content">
                    	</div id="main">
                    		<div id="main_title">Nothing found</div>
                        	<div id="main_content">
                        	</div>                      
                        </div>
                    </div>
                </div>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>