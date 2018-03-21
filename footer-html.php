<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moose_Framework_2
 */

?>

	</div><!-- #content -->

	<footer id="footer-mfw-001" class="site-footer">


		<div class="container widgets_wrapper">
		   <div class="row">
		      <div class="col-sm-4">
		         <aside id="text-2" class="widget widget_text">
		            <div class="textwidget">
		                  <div class="image_wrapper"><img class="img-fluid" src="/wp-content/uploads/2018/02/LaCasa-footer-Logo-300x200.png" alt="home_garden2_footer_logo"></div>
		            </div>
		         </aside>
		      </div>
		      <div class="col-sm-4">
		         <aside id="text-3" class="widget widget_text">
		            <h4>CONTACT WITH US</h4>
		            <div class="textwidget">
		               <p class="big">Quisque nec nunc libero fringilla mollis. Nulla quisorci luctus augue.</p>
		               <p class="big themecolor">telephone: +61 (0) 3 8376 6284</p>
		               <p class="big themecolor">e-mail: noreply@lacasa.com</p>
		            </div>
		         </aside>
		      </div>
		      <div class="col-sm-4">
		         <aside id="text-4" class="widget widget_text">
		            <h4>ADDRESS</h4>
		            <div class="textwidget">
		               <p>Morbi nisl risus, consequat tempor vel, sapien. Praesent feugiat. Proin dolor. Vestibulum egestas quam ante nec. Sed lobortis facilisis.</p>
		               <a href="#">FAQ</a> &nbsp;&nbsp;&nbsp; <a href="#">Send us a message</a>
		            </div>
		         </aside>
		      </div>
		   </div> <!-- END ROW -->
		   <div class="row">
				<div class="copyright d-none">
				<a href="<?php echo esc_url( __( 'https://cyberizegroup.com/', 'moose-framework-2' ) ); ?>"><?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'moose-framework-2' ), 'MooseFramework 2.0' );
				?></a>
				<span class="sep"> | </span>
				All Rights Reserved <a href="https://cyberizegroup.com" target="_blank">Cyberizegroup.com</a> &copy;2018
				
				</div><!-- .copyright -->	
			</div>		
		</div> <!-- END WIDGET WRAPPER -->
		<section class="site-info">

			<div class="">
				<div class="copyright  d-flex align-items-center">
					<div class="text-center mx-auto">

						<a href="<?php echo esc_url( __( 'https://cyberizegroup.com/', 'moose-framework-2' ) ); ?>"><?php
							printf( esc_html__( 'Proudly powered by %s', 'moose-framework-2' ), 'MooseFramework 2.0' );
						?></a>
						<span class="sep"> | </span>
						All Rights Reserved <a href="https://cyberizegroup.com" target="_blank">Cyberizegroup.com</a> &copy;2018

					</div>	
						
				</div>						
			</div>
			
		</section>

				<!--==============================================================================
				=            THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH            =
				===============================================================================-->
				
				<!-- <div style="color: white"><strong>Current template:</strong> <?php echo get_current_template( true ); ?></div> -->
				
				<!--====  End of THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH  ====-->
						
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
