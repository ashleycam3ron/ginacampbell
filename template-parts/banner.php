<?php if (is_page()){
     $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
     if (has_post_thumbnail()){ ?>
        <div id="banner" style="background:url(<?php echo $image[0];?>) no-repeat center; background-size:cover;">
     <?php } else { ?>
		<div id="banner" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/poppies.jpg) no-repeat center;background-size: cover;">
     <?php } ?>
     	</div>
<?php }
	if (is_home() || is_single()){ ?>
		<div id="banner" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/poppies.jpg) no-repeat center;background-size: cover;"></div>
	<?php } ?>