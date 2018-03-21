<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Moose_Framework_2
 */

get_header(); ?>

	<section id="general-page-header">
		<img class="img-fluid" src="/wp-content/uploads/2018/02/general-page-header-2400x300.jpg">
	</section>

	<div id="primary" class="content-area container">

		<div class="row">
			<div class="col-sm-12 col-md-9 col-lg-8 col-xl-6  mx-auto">
				<main id="main" class="site-main">

					<section class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'moose-framework-2' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'moose-framework-2' ); ?></p>

							<?php
								get_search_form();

							?>

							<div class="row">
								<div class="col-sm-6">
								
									<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

								</div>
								<div class="col-sm-6">
									<div class="widget widget_categories">
										<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'moose-framework-2' ); ?></h2>
										<ul>
										<?php
											wp_list_categories( array(
												'orderby'    => 'count',
												'order'      => 'DESC',
												'show_count' => 1,
												'title_li'   => '',
												'number'     => 10,
											) );
										?>
										</ul>
									</div><!-- .widget -->								
									
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									
									<?php

										/* translators: %1$s: smiley */
										$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'moose-framework-2' ), convert_smilies( ':)' ) ) . '</p>';
										the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

										the_widget( 'WP_Widget_Tag_Cloud' );
									?>

								</div>
							</div>





						</div><!-- .page-content -->
					</section><!-- .error-404 -->

				</main><!-- #main -->
			</div>
			<!-- <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4"> -->
				<?php //get_sidebar(); ?>
			<!-- </div>				 -->
		</div> <!-- end row -->	
	</div><!-- #primary -->

<?php
get_footer();
