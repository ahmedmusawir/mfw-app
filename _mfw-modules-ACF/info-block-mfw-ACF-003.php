<?php 
/**
 *
 * MODULE: Info Block ACF 003
 *
 */
?>
<main id="info-block-mfw-003">

	<section class="container">

		<article class="block-content wow slideInUp">

			<figure class="text-center">
				<img class="img-fluid" src="<?php the_field( 'info-block-mfw-003-top-icon-image' ); ?>">
			</figure>
			
			<h1 class="block-title text-center">
				<?php the_field( 'info-block-mfw-003-block-title' ); ?>
			</h1>

			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<article class="info-content">
						
						<?php the_field( 'info-block-mfw-003-left-box-content' ); ?>

					</article>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<article class="info-content">
						
						<?php the_field( 'info-block-mfw-003-right-box-content' ); ?>

					</article>
				</div>
				
				
			</div>
		</article>
		
	</section>

</main>