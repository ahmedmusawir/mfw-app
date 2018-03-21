<?php 
/**
 *
 * MODULE: Roadmap Block ACF 001
 *
 */
?>
<main id="roadmap-block-mfw-001">

	<section class="container">

		<article class="block-content">
			
			<h1 class="block-title text-center">
				<?php the_field('roadmap-block-mfw-001-block-title'); ?>
			</h1>

			<div class="row">
				<div class="col-sm-4 col-md-4 col-lg-4">
					<article class="roadmap-content text-center wow slideInLeft">
						<figure>

							<a href="<?php the_field( 'roadmap-block-mfw-001-left-box-icon-link' ); ?>">
								<?php the_field( 'roadmap-block-mfw-001-left-box-icon' ); ?>
							</a>
							
						</figure>
						<h3 class="title">
						
							<?php the_field( 'roadmap-block-mfw-001-left-box-title' ); ?>
								
						</h3>
						<p class="description">
							
							<?php the_field( 'roadmap-block-mfw-001-left-box-text' ); ?>
							
						</p>
					</article>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4">
					<article class="roadmap-content text-center wow slideInUp">
						<figure>
							<a href="<?php the_field( 'roadmap-block-mfw-001-middle-box-icon-link' ); ?>">
								<?php the_field( 'roadmap-block-mfw-001-middle-box-icon' ); ?>
							</a>
						</figure>
						<h3 class="title">

							<?php the_field( 'roadmap-block-mfw-001-middle-box-title' ); ?>								
							
						</h3>
						<p class="description">
							<?php the_field( 'roadmap-block-mfw-001-middle-box-text' ); ?>
						</p>
					</article>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4">
					<article class="roadmap-content text-center wow slideInRight">
						<figure>
							<a href="<?php the_field( 'roadmap-block-mfw-001-right-box-icon-link' ); ?>">
								<?php the_field( 'roadmap-block-mfw-001-right-box-icon' ); ?>
							</a>
						</figure>
						<h3 class="title">

							<?php the_field( 'roadmap-block-mfw-001-right-box-title' ); ?>	
							
						</h3>
						<p class="description">
							<?php the_field( 'roadmap-block-mfw-001-right-box-text' ); ?>
						</p>
					</article>
				</div>

			</div>
		</article>
		
	</section>

</main>