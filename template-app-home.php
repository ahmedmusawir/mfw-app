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


<h1 class="text-center" style="padding-top: 5rem;">Moose Application Framework 1.0</h1>


  

      
<!--==========================================
=            VIDEO PRAISE SECTION            =
===========================================-->
<section id="general-post" class="container">

	<main class="container" style="min-height: 500px;">



		<hr>

		<h3 class="text-center">Submit A Post</h3>
		<div class="alert"></div>
		<form @submit.prevent="submitPosts()">
			<div class="form-group">
		        <input v-model="postTitle" type="text" class="form-control" placeholder="Post Title">
		    </div>
		    <div class="form-group">
		        <textarea v-model="postBody" class="form-control" rows="10" placeholder="Post Content"></textarea>
		    </div>
		    <div class="form-group">
		        <button type="submit" class="btn btn-success">Submit Post</button>
		    </div>
		</form>

		<h2 class="text-center">Published Posts</h2>
		<hr>
		<hr>
		<!-- <div class="panel panel-default">
		    <div class="panel-heading">
		        <h3 class="panel-title">Submitted by Admin</h3>
		    </div>
		    <div class="panel-body">
		        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		        Pellentesque sollicitudin quam nisl, lobortis ultricies
		        lectus condimentum id. Fusce vel tincidunt dui, at bibendum
		        enim. Vivamus efficitur fringilla tempus.
		    </div>
		</div>		 -->
		
		<div class="flex-container">

			<article class="text-box flex-item text-center" v-for="post in posts" :post="post">

				<div class="col-sm-11 col-md-11 col-lg-11" postId="post.id">

					<h5 class="subheading">{{ post.title.rendered }}</h5>

					<p>{{ post.id }}</p>
					
				</div>
				<div class="col-sm-1 col-md-1 col-lg-1">
					<a class="btn btn-danger" style="color: white;" @click="deletePost(post.id)">DELETE</a>
				</div>


			</article>
			

		</div>

	</main>	

</section> <!-- End Container -->	

<script type="text/javascript">



</script>





<?php
get_footer();
























