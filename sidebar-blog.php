<div id="sidebar" class="col-md-3 col-lg-offset-1">
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Blog Sidebar')) :
	    else : ?>

        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

    	<?php get_search_form(); ?>

	<?php endif; ?>

</div>