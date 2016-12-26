<?php get_header(); ?>

<div id="home">
	<?php get_template_part('/template-parts/banner'); ?>
    <section id="intro">
	    <h1 class="hidden"><?php bloginfo('name')?> – <?php bloginfo('description');?></h1>

		<div class="container">
			<?php $profile = get_field('profile');
			  if( !empty($profile) ): ?>
			  <div class="col-md-3">
				<img class="img-responsive img-circle profile" src="<?php echo $profile['url']; ?>" alt="<?php echo $profile['alt']; ?>" />
			  </div>
			<?php endif; ?>
			<?php $intro = get_field('intro');
			  if( !empty($intro) ): ?>
			  <div class="intro col-md-4">
				<h2><?php echo $intro; ?></h2>
			  </div>
			<?php endif; ?>

			<div class="col-md-5" style="padding-top:5%;">
				<?php the_excerpt(); ?>
			</div>
		</div>
		<div class="clear"></div>
    </section>

    <section class="cta container text-center">
	    <div class="col-md-4">
		    <img src="<? echo get_stylesheet_directory_uri(); ?>/images/icon-chair.png" alt="chair icon"/>
		    <h3>New to therapy?</h3>
		    <p>Lorem ipsum dolor sit amet, quas vocent lucilius mei at. Corpora platonem his cu, ei erat scripta aperiam est. Appareat accusamus mel an, ei eirmod ocurreret his. Mazim tollit ocurreret ea cum, vis ne ferri molestie percipit, pro no explicari definiebas.</p>
		    <p><a class="btn-default">Learn more</a></p>
		</div>
		<div class="col-md-4">
		    <img src="<? echo get_stylesheet_directory_uri(); ?>/images/icon-chat.png" alt="let's talk icon"/>
		    <h3>Let's Talk</h3>
		    <p>Lorem ipsum dolor sit amet, quas vocent lucilius mei at. Corpora platonem his cu, ei erat scripta aperiam est. Appareat accusamus mel an, ei eirmod ocurreret his. Mazim tollit ocurreret ea cum, vis ne ferri molestie percipit, pro no explicari definiebas.</p>
		    <p><a class="btn-default">Connect</a></p>
		</div>
		<div class="col-md-4">
		    <img src="<? echo get_stylesheet_directory_uri(); ?>/images/icon-cal.png" alt="calendar icon"/>
		    <h3>Schedule Online</h3>
		    <p>Lorem ipsum dolor sit amet, quas vocent lucilius mei at. Corpora platonem his cu, ei erat scripta aperiam est. Appareat accusamus mel an, ei eirmod ocurreret his. Mazim tollit ocurreret ea cum, vis ne ferri molestie percipit, pro no explicari definiebas.</p>
		    <p><a class="btn-default">Make An Appointment</a></p>
		</div>
    </section>

	<section id="map">
	    <h2 class="hide">Get Directions</h2>
	    <img class="img-responsive" src="<? echo get_stylesheet_directory_uri(); ?>/images/map.jpg" alt="google map"/>
    </section>

    <section id="quote" class="text-center">
	    <h2 class="hide">Inspirational Quote</h2>
	    <div class="col-md-6 col-md-offset-3">
		    <p class="quote">You are more than the choices that you've made, You are more than the sum of your past mistakes, You are more than the problems you create, You've been remade.</p>
		    <p class="author">— The Lights Meet The Dark</p>
	    </div>
	    <div class="clear"></div>
    </section>

</div>

<?php get_footer(); ?>