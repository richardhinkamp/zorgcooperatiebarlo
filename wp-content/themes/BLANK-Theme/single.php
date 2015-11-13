<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
        
        	<?php if( has_term('profielen','category') ) : ?>
        	
            <div id="content_wrapper">
    			<div id="breadcrumbs">
    				<?php if(function_exists('bcn_display') && !is_front_page())
					{
					bcn_display();
					}?>
				</div>
            
           	 	<div id="content">
            	<div id="main">
					<div id="main_title"><?php the_title(); ?></div>
							<div id="main_content">
                                <div id="profiel_image">
                                <?php the_post_thumbnail( array(200,300,true) );?>
                                </div>
                                <div id="profiel_tekst">
								<?php the_content(); ?>
								<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
								<?php the_tags( 'Tags: ', ', ', ''); ?>
                                </div>
							</div>
				</div>
    			</div>
    		</div>
            
            <?php elseif (has_term('succes-verhalen','category') ): ?>
            <div id="content_wrapper">
            	<div id="breadcrumbs">
    				<?php if(function_exists('bcn_display') && !is_front_page())
					{
					bcn_display();
					}?>
				</div>
            	<div id="content_wrapper">
                	<div id="content">
                        <div id="main">
							<div id="main_title"><?php the_title(); ?></div>
							<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
							<div id="main_content">
								<?php the_content(); ?>
								<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
								<?php the_tags( 'Tags: ', ', ', ''); ?>
							</div>
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
            	<div id="main">
					<div id="main_title"><?php the_title(); ?></div>
						<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
							<div id="main_content">
								<?php the_content(); ?>
								<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
								<?php the_tags( 'Tags: ', ', ', ''); ?>
							</div>
				</div>
				
				
      			<?php comments_template(); ?>
  				
        

    			</div>
    		</div>
            
	<?php endif; ?>

	<?php endwhile; endif; ?>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>