<?php $args = array(
			'post_type' => 'post',
			'category_name' => 'quotes',
			'orderby' => 'rand',
			'posts_per_page' => 1
			);
		$quotes = new WP_Query( $args );
		while ( $quotes->have_posts() ) : $quotes->the_post(); ?>

		<p class="quote"><?php the_field('quote');?></p>
		<p class="author">— <?php the_field('author');?></p>

<?php endwhile; ?>