<div id="footer">Copyright © <?=date("Y")?>  -  Zorgcoöperatie Barlo.  -  Alle rechten voorbehouden </div>

	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<?php if (is_home()) { ?>
	<script src="/wp-content/themes/BLANK-Theme/js/jquery.carouFredSel-6.2.1-packed.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			// Using default configuration
			$('#slider_wrap').carouFredSel({
				width: 1000,
				scroll: {
					fx: "crossfade",
					duration: 2000
				}
			});
		});
	</script>
	<?php } ?>
	<script type="text/javascript" src="/wp-content/themes/BLANK-Theme/fancyBox/source/jquery.fancybox.pack.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#subpage_text a[href]:has(img)")
					.attr('rel', 'gallery')
					.fancybox({});
		});
	</script>

	<?php wp_footer(); ?>

	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-53856560-1', 'auto');
	ga('send', 'pageview');
	</script>

</body>

</html>
