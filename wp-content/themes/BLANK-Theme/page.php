<?php get_header(); ?>

<div class="post" id="post-<?php the_ID(); ?>">
<?php 	global $post;
	if (is_tree(7) OR is_tree(9)){?>
	
    <div id="content">
        <div id="content_wrap">
            <div id="content_hold">
                <div id="left">
                    <div id="meer">
                        <h1>Meer <?php if(is_tree(7)){ ?>Diensten <?php }else{ ?>Activiteiten <?php } ?></h1>
                        <?php	global $post; // Setup the global variable $post
							if ( is_page() && $post->post_parent ) // Make sure we are on a page and that the page is a parent
								$kiddies = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
							else
								$kiddies = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
 
							if ( $kiddies ) {
								echo '<ul class="meerdiensten">';
									echo $kiddies;
								echo '</ul>';
							}
						?>
                    </div>
                    <div id="subpage_text">
                    	<?php 
						$id=$post; 
						$post = get_post($id); 
						$content = apply_filters('the_content', $post->post_content); 
						$titel = apply_filters('the_title', $post->post_title); 
						?>
                        <h1><?=$titel?></h1>
                        <p><?=$content?></p>
                    </div>
                </div>
                <?php include('right.php'); ?>
            </div>
        </div>
	</div>
    

<?php }elseif(is_page('actueel')){ ?>
    <div id="content">
        <div id="content_wrap">
            <div id="content_hold">
                <div id="left">
                    <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FZorg-Co%25C3%25B6peratie-Barlo%2F304957139673750%3Fref_type%3Dbookmark&amp;width=680&amp;height=590&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=true&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:680px; height:590px;" allowTransparency="true"></iframe>
                </div>
                <?php include('right.php'); ?>
            </div>
        </div>
	</div>

<?php }else{ ?>
    <div id="content">
        <div id="content_wrap">
            <div id="content_hold">
                <div id="left">	                    	
				<?php 
						$id=$post; 
						$post = get_post($id); 
						$content = apply_filters('the_content', $post->post_content); 
						$titel = apply_filters('the_title', $post->post_title); 
				?>
                        <h1><?=$titel?></h1>
                        <p><?=$content?></p>
                </div>
                <?php include('right.php'); ?>
            </div>
        </div>
	</div>
<?php } ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>