<?php //if (is_single()){
     $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
     if (has_post_thumbnail()){ ?>
        <div id="banner" style="background:url(<?php echo $image[0];?>) no-repeat center; background-size:cover;min-height: 40vh;">
     <?php } else { ?>
<!-- 	    <div id="banner" style="background: url(http://placehold.it/2200x400) no-repeat center;background-size: cover;min-height: 40vh;"> -->
		    <div id="banner" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/bg-sea.jpg) no-repeat center;background-size: cover;">
     <?php } ?>
     	</div>
<?php //} ?>