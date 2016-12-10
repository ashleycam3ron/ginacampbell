<h1>Blog</h1>
<div class="col-md-8">
<?php
	$big = 999999999; // need an unlikely integer
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$args = array(
		'posts_per_page' => 1,
		'paged' => $paged,
		'orderby' => 'date',
		'order' => 'DESC' );
	$wp_query = new WP_Query( $args );
	while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

	<article class="entry row">
		<?php if ( is_home() && has_post_thumbnail() ) : ?>
		  <div class="col-md-4 feature">
		    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		        <?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>
		    </a>
		  </div>
		<?php endif; ?>

		  <div class="col-md-8">
			<h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h1>
			<time><?php the_time('l, F m'); ?> at <?php the_time('g:ia'); ?></time>
			<?php the_excerpt();?>
		  </div>
	</article>

<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) { if (function_exists("wp_bs_pagination")){  wp_bs_pagination(); } } ?>
</div>

<?php get_sidebar('blog');?>