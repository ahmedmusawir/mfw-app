<?php
/**
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

get_header(); 

$current_user = wp_get_current_user();

?>

<style type="text/css">
	.flex-container .flex-item {
		border:  1px solid brown;
		margin-bottom: 1rem;
		padding-top: 3rem;
	}
	.flex-container .flex-item .btn {
		width: 6rem;
		margin-bottom: 1rem;
	}
</style>
<h4 class="float-right badge badge-secondary m-3"><?php echo "Welcome " . $current_user->user_login; ?></h4>

<h1 class="text-center" style="padding-top: 5rem;">Moose Application Framework 1.0</h1>

      
<!--==========================================
=            VIDEO PRAISE SECTION            =
===========================================-->
<section id="general-post" class="container">

	<main class="container" style="min-height: 500px;">

		<hr>

		<p class="text-center">
		  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
		    CREATE NEW POST
		  </a>
		</p>
		<div class="collapse" id="collapseExample" style="margin-bottom: 5rem;">
		  <div class="card card-body">
		    
				<h3 class="text-center">Submit A Post</h3>
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

		  </div>
		</div>


		
		<div class="flex-container" style="margin-bottom: 5rem;">

			<article class="text-box flex-item text-center" v-for="post in posts">

				<figure class="row">
					<div class="col-sm-11 col-md-11 col-lg-11" :id="post.id">

					<h5 class="subheading">{{ post.title.rendered }}</h5>

					<p>{{ post.id }}</p>

					<h1 v-if="error === post.id">Permission Denied!</h1>
					
					</div>
					<div class="col-sm-1 col-md-1 col-lg-1">
						<a class="btn btn-danger" style="color: white;" @click="deletePost(post.id)">DELETE</a>
						<a class="btn btn-secondary" style="color: white;" @click="deletePost(post.id)">EDIT</a>
					</div>
				</figure>


			</article>
			
		</div>

	</main>	

</section> <!-- End Container -->	

<script type="text/javascript">



</script>





<?php
get_footer();
























