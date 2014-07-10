		</div>
		<!-- /wrapper -->	

			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div class="wrapper">

				<!-- Address Schema / Copyright -->
						<div itemscope itemtype="http://schema.org/LocalBusiness">	
							<p>
								<span itemprop="name">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></span>
							
								<?php if(of_get_option( 'street-address' )){ 
									echo '<br /><span itemprop="streetAddress">' . of_get_option( 'street-address' ) . '</span><br />';
								} ?>  		
								<?php if(of_get_option( 'city' )){ 
									echo '<span itemprop="addressLocality">' . of_get_option( 'city' ) . '</span>, ';
								} ?> 							
								<?php if(of_get_option( 'state' )){ 
									echo '<span itemprop="addressRegion">' . of_get_option( 'state' ) . '</span>';
								} ?>
								<?php if(of_get_option( 'zip' )){ 
									echo '<span itemprop="postalcode">' . of_get_option( 'zip' ) . '</span>';
								} ?>
							
								<?php if(of_get_option( 'phone' )){ 
									echo '<br /><span itemprop="telephone">' . of_get_option( 'phone' ) . '</span>';
								} ?>
							</p>
						</div>
				<!-- /Address Schema / Copyright -->

				<!-- Footer Menu -->
				<?php //wp_nav_menu( array('theme_location' => 'footer-menu' )); ?>
				<!-- Footer Menu -->

					</div>
				<!-- /wrapper -->

			</footer>
			<!-- /footer -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
			// Can also be used with $(document).ready()
			jQuery(window).load(function() {
			  jQuery('.main_slider').flexslider({
			    animation: "slide"
			  });

			  jQuery('.testimonial_slider').flexslider({
			    animation: "slide"
			  });

	    		jQuery('header nav').meanmenu({
	    			meanMenuContainer: 'body',
	    			meanRevealPosition: "right",
	    			meanRemoveAttrs: false,
	    			meanScreenWidth: "640"
	    		});


    		});


	    		/*--- SPLIT LOGO 

	    		var logo = "<?php echo logo();?>";
	    		var link = '<?php echo home_url(); ?>';
	    		
	    		split_menu(link,logo,'Logo');

	    		*/
		


		</script>

	</body>
</html>
