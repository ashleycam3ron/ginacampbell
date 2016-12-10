<?php get_header();?>
<?php get_template_part('/template-parts/banner'); ?>
	<section class="container">
	  <?php if (is_home()) {
		  get_template_part('content');
	    } else { ?>
		<?php while(have_posts()) : the_post();?>

			<article class="entry col-md-8">
				<h1><?php the_title();?></h1>
				<?php the_content();?>
			</article>

		<?php endwhile;?>
		<?php get_sidebar();
		} ?>
	</section>
<?php get_footer();?>