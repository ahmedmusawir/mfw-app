<?php 
/**
 *
 * MODULE: Slider Block ACF 001
 *
 */
?>
<main id="slider-block-mfw-001" class="d-flex align-items-center">

	<section class="container-fluid">
			
			<?php 
			$gallery_1 = get_field('slider_block_mfw_001_gallery');

			if ($gallery_1) :
			?>
			<article class="slider-holder wow slideInUp">

			  <div class="home-slider">
				
	            <?php if ($gallery_1) : ?>

	                <?php foreach ( $gallery_1 as $image ) : ?>
	                    
			    		<div>
			    			<img class="img-responsive center-block" src="<?php echo $image['sizes']['large'] ?>" alt="" />
			    		</div>
	                        
	                <?php endforeach; ?>    

	            <?php endif; ?>    

			  </div> 

			</article>

		<?php endif; ?>     

	</section>
	
</main>	