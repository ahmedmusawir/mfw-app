<?php
/**
 * Template Name: App Home Template
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


<h1>This is APP HOME</h1>


  

      
<!--==========================================
=            VIDEO PRAISE SECTION            =
===========================================-->
<section id="general-post" class="container">

	<main class="container" style="min-height: 500px;">
		
		<div class="flex-container">

			<article class="text-box flex-item text-center" v-for="post in posts">

				<h4 class="subheading">{{ post.title.rendered }}</h4>

			</article>
			

		</div>

	</main>	

</section> <!-- End Container -->	

<script type="text/javascript">



</script>





<?php
get_footer();
























