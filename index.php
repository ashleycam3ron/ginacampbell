<?php get_header();?>
<?php get_template_part('/template-parts/banner'); ?>
	<section class="container-fluid">
	  <?php if (is_home()) {
		  get_template_part('content');
	    } else { ?>
		<?php while(have_posts()) : the_post();?>

		<header class="row title">
			<div class="container">
				<div class="col-md-10 col-md-offset-1">
					<h1><?php the_title();?></h1>
					<?php if (is_page(47)){
						echo '<a class="btn-default appt pull-right" style="margin-top: 12px;margin-bottom: -5px;" href="https://gina-campbell.clientsecure.me/" target="_blank">Schedule An Appointment</a>';
						} ?>
				</div>
			</div>
		</header>
		<div class="container">
			<article class="entry col-md-10 col-md-offset-1">
				<?php the_content();?>
			</article>
			<?php //get_sidebar(); ?>
		</div>

		<?php endwhile;?>
		<?php } ?>
	</section>

	<?php if (is_home()){ ?>
	<section id="subscribe">
			<h3>Subscribe To My Blog</h3>
			<p>Receive an email when there are new posts.</p>
		<form action="//ginacampbellcounseling.us14.list-manage.com/subscribe/post?u=2e177595f3a99c49edd4e052f&amp;id=2296838633" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
		    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_2e177595f3a99c49edd4e052f_2296838633" tabindex="-1" value=""></div>
		    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
		</form>
		<p><small><em>We respect your privacy</em></small></p>
	</section>
	<?php } ?>

<?php get_footer();?>