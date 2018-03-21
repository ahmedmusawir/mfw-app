<?php 
/**
 *
 * MODULE: Hero Story Block ACF 001
 *
 */
?>

<style type="text/css">
	
	#hero-story-block-mfw-001 {

	background: url("<?php the_field('hero-story-block-mfw-001-background_image'); ?>") no-repeat center center fixed;

	  -webkit-background-size: cover;

	  -moz-background-size: cover;

	  -o-background-size: cover;

	  background-size: cover;				
	}

</style>
<main id="hero-story-block-mfw-001" class="d-flex align-items-center">
	<section class="container">
		<div class="row justify-content-md-center">
			<div class="col-sm-12 col-md-10 offset-md-2 col-lg-11 offset-lg-1 col-xl-11 offset-xl-1">
				<article class="block-content p-5 wow slideInUp">
					<h1 class="block-title"><?php the_field('hero-story-block-mfw-001-block_title'); ?></h1>
					<p>
						<?php the_field('hero-story-block-mfw-001-top_text'); ?>
					</p>

					<div class="row">
						<div class="col-sm-6">
							<img class="img-fluid" src="<?php the_field('hero-story-block-mfw-001-left-box-icon'); ?>" alt="">
							<h2 class="block-subtitle text-capitalize"><?php the_field('hero-story-block-mfw-001-left-box-title'); ?></h2>
							<p>
								<?php the_field('hero-story-block-mfw-001-left-box-text'); ?> 
							</p>
						</div>
						<div class="col-sm-6">
							<img class="img-fluid" src="<?php the_field('hero-story-block-mfw-001-right-box-icon'); ?>" alt="">
							<h2 class="block-subtitle text-capitalize"><?php the_field('hero-story-block-mfw-001-right-box-title'); ?></h2>
							<p>
								<?php the_field('hero-story-block-mfw-001-right-box-text'); ?> 
							</p>
							
						</div>
					</div>
				</article>
			</div>
		</div>
	</section>
</main>