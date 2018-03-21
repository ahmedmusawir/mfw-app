<?php
/**
 * Template Name: Contact Page Template
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
					
	<?php //get_template_part( '_mfw-modules/hero-block-mfw-003' ); ?>
	<?php get_template_part( '_mfw-modules-ACF/hero-block-mfw-ACF-003' ); ?>
	
</section>


<section id="BLOCK2">

	<?php //get_template_part( '_mfw-modules/contact-block-mfw-001' ); ?>
	<?php get_template_part( '_mfw-modules-ACF/contact-block-mfw-ACF-001' ); ?>
	
</section>


<?php
get_footer();
























