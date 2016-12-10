<?php get_header();?>
<?php get_template_part('/template-parts/banner'); ?>
	<section class="container">
		<?php while(have_posts()) : the_post();?>
			<article class="entry col-md-8">
				<h1><?php the_title();?></h1>
				<?php the_content();?>

				<?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>
				<div id="pagination">
					<?php the_post_navigation( array(
						'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'ashleycameron' ) . '</span>
						<span class="nav-title prev">%title</span>',
						'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'ashleycameron' ) . '</span><span class="nav-title next">%title</span>',
					)); ?>
				</div>
			</article>
		<?php endwhile;?>
		<?php get_sidebar('blog'); ?>
	</section>
<?php get_footer();?>