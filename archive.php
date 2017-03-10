<?php get_header();?>
<?php get_template_part('/template-parts/banner'); ?>
	<section class="container-fluid">
<header class="row title">
	<div class="container"><h1><?php single_cat_title('Category: '); ?></h1></div>
</header>
<div class="container">
	<div class="col-md-8">
	<?php
		if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

		<article class="entry row">
			<?php if ( is_home() && has_post_thumbnail() ) { ?>
			  <div class="col-md-5 feature">
			    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			        <?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>
			    </a>
			    <div class="clear"></div>
			  </div>
			  <div class="col-md-7">
				<h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h1>
				<time><?php the_time('l, F m'); ?></time>
				<?php the_excerpt();?>
			  </div>
			<?php } else { ?>
			  <div class="col-md-12">
				<h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h1>
				<time><?php the_time('l, F m'); ?></time>
				<?php the_excerpt();?>
			  </div>
			<?php } ?>
		</article>

	<?php endwhile; ?>
	<?php endif; ?>

	<?php if (function_exists("wp_bs_pagination")){  wp_bs_pagination(); } ?>
	</div>

	<?php get_sidebar('blog');?>
</div>
	</section>
<?php get_footer();?>