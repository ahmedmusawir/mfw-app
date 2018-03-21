<?php 
/**
 *
 * MODULE: Contact Block 001
 *
 */
?>
<main id="contact-block-mfw-001">

	<section class="container">

		<article class="block-content">
			
			<h3 class="block-title text-center pb-5">
				<?php the_field( 'contact-block-mfw-001-contact_title' ); ?>
			</h3>

			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-6">
					<article class="left-content text-center">
						<figure>
							<?php echo do_shortcode( '[contact-form-7 id="80" title="Contact form 1"]' ); ?>
						</figure>
						
					</article>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<article class="right-content text-center">
						<figure>
							<img class="img-fluid" src="<?php the_field( 'contact_right_image' ); ?>">
						</figure>
					</article>
				</div>
				

			</div>
		</article>
		
	</section>

</main>