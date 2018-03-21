<?php 
/**
 *
 * MODULE: Info Block ACF 001
 *
 */
?>
<main id="info-block-mfw-001">

	<section class="container">

		<article class="block-content">
			
			<h1 class="block-title">
				<?php the_field('info-block-mfw-001-block-title'); ?>
			</h1>

			<div class="row">
				<div class="col-sm-4">
					<article class="left-content">
						<ul class="list-unstyled mt-5">
							<li class="row">
								<div class="col-2">
									<i class="fa fa-adjust"></i>	
								</div>
								<div class="col-10">
									<?php the_field('info-block-mfw-001-left-list-item-1'); ?>
								</div>
							</li>
							<li class="row">
								<div class="col-2">
									<i class="fa fa-adjust"></i>	
								</div>
								<div class="col-10">
									<?php the_field('info-block-mfw-001-left-list-item-2'); ?>
								</div>
							</li>
							<li class="row">
								<div class="col-2">
									<i class="fa fa-adjust"></i>	
								</div>
								<div class="col-10">
									<?php the_field('info-block-mfw-001-left-list-item-3'); ?>
								</div>
							</li>
						</ul>							
					</article>
				</div>
				<div class="col-sm-8">
					<article class="right-content p-2">

						<img class="img-fluid rounded-circle wow slideInUp" src="<?php the_field('info-block-mfw-001-right_image'); ?>">
											
					</article>
				</div>

			</div>
		</article>
		
	</section>

</main>