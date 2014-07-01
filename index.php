<?php get_header(); ?>


	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->

		<?php get_sidebar(); ?>

		<div class="clear"></div>
	</main>



<?php get_footer(); ?>
