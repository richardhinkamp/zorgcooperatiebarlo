<?php get_header(); ?>

<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <div id="content">
        <div id="content_wrap">
            <div id="content_hold">
                <div id="left">
                    <h1>Welkom bij de Zorgcoöperatie Barlo</h1>
                    <?php 
						$id=5; 
						$post = get_post($id); 
						$content = apply_filters('the_content', $post->post_content); 
						echo $content;

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
    <div id="menu">
        <div id="menu_wrap">
            <div id="menu_hold">
                <h1>Voorbeelden van Diensten en Activiteiten</h1>
					<?php
						$count = 0; 
						$pages = get_pages(array('child_of' => 7)); 
						shuffle($pages);?>
    					<?php foreach ($pages as $page): 
						$count ++;
						if ( $count < 2 ) {  // only process 1 ?>
                        <a href="<?php echo get_page_link($page->ID) ?>">
                        <div id="menu_item">
            				<a href="<?php echo get_page_link($page->ID) ?>"><?php echo get_the_post_thumbnail($page->ID, array(300,169)); ?></a>
            				<a href="<?php echo get_page_link($page->ID) ?>"><h1><?php echo $page->post_title; ?></h1></a>
                            <?php $text = $page->post_content;
            				    $your_desired_width = 100;
                                $string = $text;
                                if (strlen($string) > $your_desired_width)
                                {
                                    $string = wordwrap($string, 200);
                                    $i = strpos($string, "\n");
                                    if ($i) {
                                        $string = substr($string, 0, $i);
                                    }
                                }

                                echo $string;?>
						</div>
                        </a>
						<? } ?>
    					<?php endforeach; ?>
                <div id="menu_item">
					<?php
						$count = 0; 
						$pages = get_pages(array('child_of' => 9)); 
						shuffle($pages);?>
    					<?php foreach ($pages as $page): 
						$count ++;
						if ( $count < 2 ) {  // only process 1 ?>
                        <a href="<?php echo get_page_link($page->ID) ?>">
                        <div id="menu_item">
            				<a href="<?php echo get_page_link($page->ID) ?>"><?php echo get_the_post_thumbnail($page->ID, array(300,169)); ?></a>
            				<a href="<?php echo get_page_link($page->ID) ?>"><h1><?php echo $page->post_title; ?></h1></a>
            				<?php $text = $page->post_content;
            				    $your_desired_width = 200;
                                $string = $text;
                                if (strlen($string) > $your_desired_width)
                                {
                                    $string = wordwrap($string, 150);
                                    $i = strpos($string, "\n");
                                    if ($i) {
                                        $string = substr($string, 0, $i);
                                    }
                                }

                                echo $string;?>  
						</div>
                        </a>
						<? } ?>
    					<?php endforeach; ?>
                </div>
                <div id="menu_item">
                    <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=260&amp;wkst=1&amp;hl=nl&amp;bgcolor=%23FFFFFF&amp;src=website%40zorgcooperatiebarlo.nl&amp;color=%232952A3&amp;ctz=Europe%2FAmsterdam" style=" border-width:0 " width="300" height="260" frameborder="0" scrolling="no"></iframe>
                </div>
            </div>
        </div>
</div>
</div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>