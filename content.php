<header class="row title">
	<div class="container"><h1>Blog</h1></div>
</header>
<div class="container">
	<div class="col-md-9">
	<?php
		$big = 999999999; // need an unlikely integer
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		$args = array(
			'posts_per_page' => 4,
			'paged' => $paged,
			'orderby' => 'date',
			'category__not_in' => array( 13 ),
			'order' => 'DESC' );
		$wp_query = new WP_Query( $args );
		while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

		<article class="entry row">
			<?php if ( is_home() && has_post_thumbnail() ) { ?>
			  <div class="col-sm-5 feature">
			    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			        <?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>
			    </a>
			    <div class="clear"></div>
			  </div>
			  <div class="col-sm-7">
				<h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h1>
				<time><?php the_time('l, F j'); ?></time>
				<?php the_excerpt();?>
			  </div>
			<?php } else { ?>
			  <div class="col-md-12">
				<h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h1>
				<time><?php the_time('l, F j'); ?></time>
				<?php the_excerpt();?>
			  </div>
			<?php } ?>
		</article>

	<?php endwhile; ?>

	<?php if ($wp_query->max_num_pages > 1) { if (function_exists("wp_bs_pagination")){  wp_bs_pagination(); } } ?>
	</div>

	<?php get_sidebar('blog');?>
</div>