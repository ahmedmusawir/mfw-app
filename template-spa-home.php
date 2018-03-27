<?php
/**
 * Template Name: Customer SPA Home Template
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

//THE FOLLOWING REDIRECT BLOCK MUST BE BEFORE GET_HEADER()

if ( !is_user_logged_in() ) {
	wp_redirect( esc_url(site_url('/')) );
	exit;
}

get_header('customer-spa'); 

$current_user = wp_get_current_user();

?>

<style type="text/css">

	[v-cloak] {
		display: none;
	}

</style>
<h4 class="float-right badge badge-secondary m-3"><?php echo "Welcome " . $current_user->user_login; ?></h4>

<h1 class="text-center" style="padding-top: 5rem;">MAF Customer SPA 1.0</h1>

      
<!--==========================================
=            SPA MAIN SECTION            =
===========================================-->
<section id="general-post" class="container">

	<main id="customer-spa" v-cloak ></main>

</section> <!-- End Container -->	

<?php
get_footer();
























