<?php
/**
 * Template Name: Home Page Template
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

<section id="SECTION-1">
					
	<?php //get_template_part( '_mfw-modules/hero-block-mfw-001' ); ?>
	<?php get_template_part( '_mfw-modules-ACF/hero-block-mfw-ACF-001' ); ?>
	
</section>


<section id="SECTION-2">

	<?php //get_template_part( '_mfw-modules/hero-story-block-mfw-001' ); ?>
	<?php get_template_part( '_mfw-modules-ACF/hero-story-block-mfw-ACF-001' ); ?>
	
</section>


<section id="SECTION-3">

	<?php // get_template_part( '_mfw-modules/info-block-mfw-001' ); ?>
	<?php get_template_part( '_mfw-modules-ACF/info-block-mfw-ACF-001' ); ?>
	
</section>


<section id="SECTION-4">

	<?php //get_template_part( '_mfw-modules/slider-block-mfw-001' ); ?>
	<?php get_template_part( '_mfw-modules-ACF/slider-block-mfw-ACF-001' ); ?>
	
</section>

<?php
get_footer();
























