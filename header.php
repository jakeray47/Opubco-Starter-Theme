<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo of_get_option( 'favicon' ); ?>" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

				<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php if(of_get_option( 'logo_upload' )){ echo of_get_option( 'logo_upload' );}else{ echo get_template_directory_uri().'/img/logo.png'; } ?>" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->


			<div class="flexslider main_slider">
				<ul class="slides">
					<?php
				
					$args = array( 'posts_per_page' => -1, 'post_type' => 'slider' );

					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
						<li>
							<!-- post thumbnail -->
								<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
									<?php the_post_thumbnail('slider'); ?>
								<?php endif; ?>
								<!-- /post thumbnail -->
						</li>
					<?php endforeach; 
					wp_reset_postdata();?>

				</ul>

			</div>

			</header>
			<!-- /header -->


