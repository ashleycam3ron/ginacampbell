<?php get_header();?>
<?php get_template_part('/template-parts/banner'); ?>
	<section class="container">
		<h2 class="hide"><?php the_title();?></h2>
		<div class="col-md-8">
		<?php while(have_posts()) : the_post();?>
			<article class="entry">
				<h1><?php the_title();?></h1>
				<?php the_post_thumbnail('medium'); ?>
				<?php the_content();?>
			</article>

			<div id="pagination">
				<?php the_post_navigation( array(
					'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'ashleycameron' ) . '</span>
					<span class="nav-title prev">%title</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'ashleycameron' ) . '</span><span class="nav-title next">%title</span>',
				)); ?>
				<div class="clear"></div>
			</div>
			<?php //if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>
		<?php endwhile;?>
		</div>
		<?php get_sidebar('blog'); ?>
	</section>
<?php get_footer();?>