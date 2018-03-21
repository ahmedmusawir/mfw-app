<?php 
/**
 *
 * MODULE: Optin Block ACF 001
 *
 */
?>
<main id="optin-block-mfw-001">

	<section class="container">

		<article class="block-content wow slideInRight">

			<figure class="text-center">
				<img class="img-fluid" src="<?php the_field( 'optin-block-mfw-001-top_image' ); ?>">
			</figure>
			
			<h1 class="block-title text-center">
				<?php the_field( 'optin-block-mfw-001-optin_title' ); ?>
			</h1>

			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<article class="optin-content text-center">
						
						<aside class="optin-btn-holder">

							<a class="btn btn-secondary btn-lg" href="<?php the_field( 'optin-block-mfw-001-optin_button_link' ); ?>"><?php the_field( 'optin-block-mfw-001-optin_button_text' ); ?></a>
							
						</aside>

					</article>
				</div>
				
			</div>
		</article>
		
	</section>

</main>