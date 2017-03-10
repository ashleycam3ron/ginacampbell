<?php get_header(); ?>

<div id="home">
	<?php get_template_part('/template-parts/banner'); ?>
    <section id="intro">
	    <h1 class="hidden"><?php bloginfo('name')?> – <?php bloginfo('description');?></h1>

		<div class="container">
			<?php $profile = get_field('profile');
			  if( !empty($profile) ): ?>
			  <div class="col-xs-6 col-md-3">
				<img class="img-responsive img-circle profile" src="<?php echo $profile['url']; ?>" alt="<?php echo $profile['alt']; ?>" />
			  </div>
			<?php endif; ?>
			<?php $intro = get_field('intro');
			  if( !empty($intro) ): ?>
			  <div class="intro col-md-4">
				<h2><?php echo $intro; ?></h2>
			  </div>
			<?php endif; ?>

			<div class="col-md-5">
				<?php echo get_excerpt_by_id(414); ?>
			</div>
		</div>
		<div class="clear"></div>
    </section>

    <section class="cta container text-center">
	    <div class="col-md-4">
		    <img src="<? echo get_stylesheet_directory_uri(); ?>/images/icon-chair.png" alt="chair icon"/>
		    <h3><?php the_field('headline1'); ?></h3>
		    <p><?php the_field('col1'); ?></p>
		    <p><a target="_blank" class="btn-default" href="<?php the_field('link1'); ?>"><?php the_field('btn1'); ?></a></p>
		</div>
		<div class="col-md-4">
		    <img src="<? echo get_stylesheet_directory_uri(); ?>/images/icon-chat.png" alt="let's talk icon"/>
		    <h3><?php the_field('headline2'); ?></h3>
		    <p><?php the_field('col2'); ?></p>
		    <p><a target="_blank" class="btn-default" href="<?php the_field('link2'); ?>"><?php the_field('btn2'); ?></a></p>
		</div>
		<div class="col-md-4">
		    <img src="<? echo get_stylesheet_directory_uri(); ?>/images/icon-cal.png" alt="calendar icon"/>
		    <h3><?php the_field('headline3'); ?></h3>
		    <p><?php the_field('col3'); ?></p>
		    <p><a target="_blank" class="btn-default" href="<?php the_field('link3'); ?>"><?php the_field('btn3'); ?></a></p>
		</div>
    </section>

	<section id="map">
	    <h2><a target="_blank" href="https://www.google.com/maps/dir//Gina+Campbell+Counseling,+3209+Ingersoll+Ave+%23105,+Des+Moines,+IA+50312/@41.5863412,-93.661018,17z/data=!4m15!1m6!3m5!1s0x87ee992b150131a7:0x608d4add7d79d784!2sGina+Campbell+Counseling!8m2!3d41.5865779!4d-93.6609161!4m7!1m0!1m5!1m1!1s0x87ee992b150131a7:0x608d4add7d79d784!2m2!1d-93.6609161!2d41.5865779">Get Directions</a></h2>
	    <img class="img-responsive" src="<? echo get_stylesheet_directory_uri(); ?>/images/map.jpg" alt="google map"/>
    </section>

	<section id="subscribe" class="newsletter text-center">
		<h3>eNewsletter</h3>
		<p>Sign up to receive periodical e-newsletters</p>
		<form action="//ginacampbellcounseling.us14.list-manage.com/subscribe/post?u=2e177595f3a99c49edd4e052f&amp;id=36e02b16bf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		    <div id="mc_embed_signup_scroll">
			<label for="mce-EMAIL">eNewsletter</label>
			<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
		    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_2e177595f3a99c49edd4e052f_36e02b16bf" tabindex="-1" value=""></div>
		    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
		    </div>
		</form>
		<p><small><em>We respect your privacy</em></small></p>
	</section>


<!--
    <section id="quote" class="text-center">
	    <h2 class="hide">Inspirational Quote</h2>
	    <div class="col-md-6 col-md-offset-3">
		    <?php get_template_part('/template-parts/quote'); ?>
	    </div>
	    <div class="clear"></div>
    </section>
-->

</div>

<?php get_footer(); ?>