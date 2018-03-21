<?php 
/**
 *
 * MODULE: Hero Block ACF 001
 *
 */
?>

<main id="hero-block-mfw-001" class="d-flex align-items-end">
	<style type="text/css">
		#hero-block-mfw-001 {
			background: url("<?php the_field('hero-block-mfw-001-background_image'); ?>") no-repeat center center fixed;

			  -webkit-background-size: cover;

			  -moz-background-size: cover;

			  -o-background-size: cover;

			  background-size: cover;				
		}
	</style>

	<section class="container">
		<div class="col-sm-10 col-md-7 co-lg-7">
			<div class="item wow fadeIn">
				<article class="hero-info-box">
					<div class="card">
						<div class="card-block">
							<h5 class="card-title pl-4"><?php the_field('hero-block-mfw-001-hero_tag'); ?></h5>
							<article class="card-content pl-4 pt-5">
								<h3 class="card-text text-white"><?php the_field('hero-block-mfw-001-hero_title'); ?></h3>
								<p class="text-white pr-2">
									<?php the_field('hero-block-mfw-001-hero_content_text'); ?>
									
								</p>
								<a href="<?php the_field('hero-block-mfw-001-hero_button_link') ?>" class="btn btn-secondary btn-lg mb-2 px-4">
									<?php the_field('hero-block-mfw-001-hero_button_text'); ?>
								</a>
							</article>
						</div>
					</div>
				</article>
			</div>
		</div>
	</section>

</main>