<?php 
/**
 *
 * MODULE: Hero Story ACF Block 002
 *
 */
?>
<main id="hero-story-block-mfw-002" class="d-flex align-items-start">

	<style type="text/css">
		#hero-story-block-mfw-002 {
			background: url("<?php the_field( 'hero-story-block-mfw-002-background_image' ); ?>") no-repeat center center fixed;

			  -webkit-background-size: cover;

			  -moz-background-size: cover;

			  -o-background-size: cover;

			  background-size: cover;				
		}
	</style>

	<section class="container-fluid">
		<div class="col-sm-10 col-md-7 co-lg-7">
			<div class="item">
				<article class="hero-info-box wow fadeIn">
					<div class="card">
						<div class="card-block">
							<article class="card-content pl-4 pt-5">
								<h3 class="card-text text-white"><?php the_field( 'hero-story-block-mfw-002-hero_title' ); ?></h3>
								<p class="text-white pr-2">
									<?php the_field( 'hero-story-block-mfw-002-hero_content_text' ); ?>
								</p>
								<a href="<?php the_field( 'hero-story-block-mfw-002-hero_button_link' ); ?>" class="btn btn-secondary btn-lg mb-2 px-4"><?php the_field( 'hero-story-block-mfw-002-hero_button_text' ); ?></a>
							</article>
						</div>
					</div>
				</article>
			</div>
		</div>
	</section>

</main>