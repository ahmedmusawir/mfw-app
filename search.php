<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Moose_Framework_2
 */

get_header(); ?>

<section id="BLOCK1">
					
	<?php get_template_part( '_mfw-modules/search-index-block-mfw-001' ); ?>
	<?php get_template_part( '_mfw-modules/search-index-block-with-sidebar-mfw-001' ); ?>
	
</section>

<?php
get_footer();
