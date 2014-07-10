		</div>
		<!-- /wrapper -->	

			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div class="wrapper">

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?> <br>
				</p>
				<!-- /copyright -->

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
