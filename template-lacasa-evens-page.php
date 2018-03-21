<?php
/**
 * Template Name: La Casa Events Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moose_Framework_2
 */

get_header(); ?>

<section id="BLOCK1">
					
	<?php //get_template_part( '_mfw-modules/hero-block-mfw-002' ); ?>
	<?php get_template_part( '_mfw-modules-ACF/hero-block-mfw-ACF-002' ); ?>
	
</section>


<section id="BLOCK2">

	<?php //get_template_part( '_mfw-modules/hero-story-block-mfw-002' ); ?>
	<?php get_template_part( '_mfw-modules-ACF/hero-story-block-mfw-ACF-002' ); ?>
	
</section>


<section id="BLOCK3">

	<?php //get_template_part( '_mfw-modules/hero-story-block-mfw-003' ); ?>
	<?php get_template_part( '_mfw-modules-ACF/hero-story-block-mfw-ACF-003' ); ?>

</section>

<section id="BLOCK4">

	<?php //get_template_part( '_mfw-modules/hero-story-block-mfw-004' ); ?>
	<?php get_template_part( '_mfw-modules-ACF/hero-story-block-mfw-ACF-004' ); ?>
	
</section>


<section id="BLOCK5">

	<?php //get_template_part( '_mfw-modules/info-block-mfw-003' ); ?>
	<?php get_template_part( '_mfw-modules-ACF/info-block-mfw-ACF-003' ); ?>

	
</section>

<section id="BLOCK6">

	<?php //get_template_part( '_mfw-modules/optin-block-mfw-001' ); ?>
	<?php get_template_part( '_mfw-modules-ACF/optin-block-mfw-ACF-001' ); ?>
	
</section>

<section id="BLOCK7">

	<?php //get_template_part( '_mfw-modules/slider-block-mfw-001' ); ?>
	<?php get_template_part( '_mfw-modules-ACF/slider-block-mfw-ACF-001' ); ?>

</section>

<?php
get_footer();
























