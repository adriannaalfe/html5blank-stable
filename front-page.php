<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<img src="<?php the_field('hero'); ?>" alt="hero image" class="hero" />
			<?php the_content(); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
