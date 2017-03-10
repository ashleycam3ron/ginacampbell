<?php
/*
Template Name: Contact Us
*/

get_header();
get_template_part('/template-parts/banner'); ?>
	<section class="container-fluid">
		<?php while(have_posts()) : the_post();?>

		<header class="title">
			<div class="container">
				<div class="col-md-10 col-md-offset-1">
					<h1><?php the_title();?></h1>
					<a class="btn-default appt pull-right" style="margin-top: 12px;margin-bottom: -5px;" href="https://gina-campbell.clientsecure.me/" target="_blank">Schedule An Appointment</a>
				</div>
			</div>
		</header>
		<div class="container">
			<article class="entry col-md-5 col-md-offset-1">
				<?php the_content();?>
			</article>
			<aside id="form" class="col-md-5">
				<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
			</aside>
		</div>

		<?php endwhile;?>
	</section>
<?php get_footer();?>