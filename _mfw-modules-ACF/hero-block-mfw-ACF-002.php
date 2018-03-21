<?php 
/**
 *
 * MODULE: Hero Block 002
 *
 */
?>

<main id="hero-block-mfw-002" class="">
	<style type="text/css">
		#hero-block-mfw-002 {
			background: url("<?php the_field('hero-block-mfw-002-background_image'); ?>") no-repeat center center fixed;

			  -webkit-background-size: cover;

			  -moz-background-size: cover;

			  -o-background-size: cover;

			  background-size: cover;				
		}
	</style>
	<article id="hero-content" class="d-flex align-items-center mx-auto">
		<section class="container">
			<div class="col-sm-12 col-md-12 co-lg-12">
				<div class="item  wow fadeIn">
					<article class="hero-info-box text-center">
						<h1 class="hero-title"><?php the_field('hero-block-mfw-002-hero_title'); ?></h1>
						<p class="lead">
							<?php the_field('hero-block-mfw-002-hero_subtitle'); ?>
						</p>

						<?php if (get_field('hero-block-mfw-002-hero_button_text')) : ?>

						<aside class="hero-btn-holder">
							<a class="btn btn-secondary btn-lg" href="<?php the_field('hero-block-mfw-002-hero_button_link') ?>">
								<?php the_field('hero-block-mfw-002-hero_button_text') ?>
							</a>
						</aside>
						
						<?php endif; ?>

					</article> <!-- END HERO INFO BOX -->
				</div>
			</div>
		</section> <!-- END CONTAINER -->
	</article>
</main>