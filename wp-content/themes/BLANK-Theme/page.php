<?php get_header(); ?>

<div class="post" id="post-<?php the_ID(); ?>">
<? 	global $post;
	if (is_tree(7) OR is_tree(9)){?>
	
    <div id="content">
        <div id="content_wrap">
            <div id="content_hold">
                <div id="left">
                    <div id="meer">
                        <h1>Meer <? if(is_tree(7)){ ?>Diensten <? }else{ ?>Activiteiten <? } ?></h1>
                        <?	global $post; // Setup the global variable $post
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
                    	<? 
						$id=$post; 
						$post = get_post($id); 
						$content = apply_filters('the_content', $post->post_content); 
						$titel = apply_filters('the_title', $post->post_title); 
						?>
                        <h1><?=$titel?></h1>
                        <p><?=$content?></p>
                    </div>
                </div>
                <div id="right">
                    <h1>Aanmelden?</h1>
                    <p>
                    Wilt u zich aanmelden als lid van de Zorgcoöperatie Barlo klik dan <a href="https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxiYXJsb3dlYnNpdGV8Z3g6NmIxZmNlOWRiOGI0YTA5Yg" target="_blank">hier</a><br><br>
                    Daarnaast kunt u zich ook als vrijwilliger aanmelden door op <a href="https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxiYXJsb3dlYnNpdGV8Z3g6Mjk1ZTc3YjEyY2YyZjNkNg" target="_blank">deze link</a> te klikken!
                    </p>
                </div>
            </div>
        </div>
	</div>
    

<? }elseif(is_page('actueel')){ ?>
    <div id="content">
        <div id="content_wrap">
            <div id="content_hold">
                <div id="left">
                    <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FZorg-Co%25C3%25B6peratie-Barlo%2F304957139673750%3Fref_type%3Dbookmark&amp;width=680&amp;height=590&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=true&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:680px; height:590px;" allowTransparency="true"></iframe>
                </div>
                <div id="right">
                    <h1>Aanmelden?</h1>
                    <p>
                    Wilt u zich aanmelden als lid van de Zorgcoöperatie Barlo klik dan <a href="https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxiYXJsb3dlYnNpdGV8Z3g6NmIxZmNlOWRiOGI0YTA5Yg" target="_blank">hier</a><br><br>
                    Daarnaast kunt u zich ook als vrijwilliger aanmelden door op <a href="https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxiYXJsb3dlYnNpdGV8Z3g6Mjk1ZTc3YjEyY2YyZjNkNg" target="_blank">deze link</a> te klikken!
                    </p>
                </div>
            </div>
        </div>
	</div>

<? }else{ ?>
    <div id="content">
        <div id="content_wrap">
            <div id="content_hold">
                <div id="left">	                    	
				<? 
						$id=$post; 
						$post = get_post($id); 
						$content = apply_filters('the_content', $post->post_content); 
						$titel = apply_filters('the_title', $post->post_title); 
				?>
                        <h1><?=$titel?></h1>
                        <p><?=$content?></p>
                <?		if(is_tree(13)){
					
							if($_POST['Verzenden']=="Verzenden"){
	    						$from = $_POST['naam']; // sender
    							$subject = 'Bericht via de website (www.zorgcooperatiebarlo.nl)';
    							$message = 'Bericht
											Naam: '.$_POST['naam'].'>
											Telefoon: '.$_POST['telefoon'].'
											E-mail: '.$_POST['email'].'
											Bericht:
											'.$_POST['opmerking'].'
											';
    							// send mail
    							mail("info@zorgcooperatiebarlo.nl",$subject,$message,"From: $from\n");
    							echo "Bedankt voor uw bericht, we zullen zo spoedig mogelijk reageren.";
								
							}else{
							?>
                                <form method="post">
                                Naam<br />
                                <input type="text" name="naam" class="inputtext" required/><br />
                                Telefoon<br />
                                <input type="text" name="telefoon" class="inputtext" required/><br />
                                E-mail<br />
                                <input type="text" name="email" class="inputtext"  required/><br />
                                Opmerking<br />
                                <textarea name="opmerking" class="inputtext" rows="4" cols="50" required/></textarea><br />
                                <input type="submit" class="submit" value="Verzenden" name="Verzenden" />
                                </form>
							<?
							}
							
							
						}
				?>
                </div>
                <div id="right">
                    <h1>Aanmelden?</h1>
                    <p>
                    Wilt u zich aanmelden als lid van de Zorgcoöperatie Barlo klik dan <a href="https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxiYXJsb3dlYnNpdGV8Z3g6NmIxZmNlOWRiOGI0YTA5Yg" target="_blank">hier</a><br><br>
                    Daarnaast kunt u zich ook als vrijwilliger aanmelden door op <a href="https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxiYXJsb3dlYnNpdGV8Z3g6Mjk1ZTc3YjEyY2YyZjNkNg" target="_blank">deze link</a> te klikken!
                    </p>
                </div>
            </div>
        </div>
	</div>
<? } ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>