<template>


  <main class="add-post  wow fadeIn">

    <h5>
    {{ pageTitle }}
    <a @click="sendHome" class="btn btn-warning float-right" style="color: white;">BACK</a>
    
    </h5>
    <a @click="deletePost( post.id )" class="btn btn-danger float-right m-5" style="color: white;">DELETE POST</a><br>
   
    <form class="mt-5">
      <div class="form-group row">
        <label for="inputTitle" class="col-sm-2 form-control-label">Title</label>
        <div class="col-sm-10">
          <input v-model="post.title.rendered" type="email" class="form-control" id="inputTitle">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputContent" class="col-sm-2 form-control-label">Content</label>
        <div class="col-sm-10">
          <textarea v-model="post.content.rendered" class="form-control" id="inputContent" cols="15"></textarea>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-12">
          <button type="submit" class="btn btn-secondary" @click.prevent="insertPost( post.id )">Submit Post Edits</button>
        </div>
      </div>
    </form>

    <div v-if="submitted" class="alert alert-success" role="alert">
      <p>Thanx for adding your post ...</p>
    </div>
    <div v-if="submitFailed" class="alert alert-danger" role="alert">
      <p>You don't have permission to EDIT this post ...</p>
    </div>
    <div v-if="deleteFailed" class="alert alert-danger" role="alert">
      <p>You don't have permission to DELETE this post ...</p>
    </div>

    <article class="preview">

      <h5>Preview Post</h5>
      <p>
        Post Title: <span class="output">{{ post.title.rendered }} </span>
      </p>
      <p>
        Post Content: <span class="output">{{ post.content.rendered }} </span>
      </p>
      
    </article>
    
  </main>


</template>

<script>
export default {
  data () {
    return {
      pageTitle:    'Edit New Blog Post',
      post:         {
        title:      "",
        content:    "",
      },
      submitted:    false,
      submitFailed: false,
      deleteFailed: false,
      id:           this.$route.params.id,

    }
  },
  methods: {
    sendHome() {
      this.$router.push({path: '/'});
    },
    fetchPost(id) {

      var app = this;

      // console.log( wp_rest_api.base_url );

      // jQuery.get( wp_rest_api.base_url + 'posts/' + id ).always((response) => {
      jQuery.get( '/wp-json/wp/v2/' + 'posts/' + id ).always((response) => {
        app.post = response;

        return app.post;

        console.log(app.post);

      });

    },
    deletePost(id) {

      var app = this;

      jQuery.ajax({
        url:    wp_rest_api.base_url + 'posts/' + id,
        type: 'DELETE',
        beforeSend:   function( xhr ) {
          xhr.setRequestHeader( 'X-WP-Nonce', wp_rest_api.nonce );
        },
        success: function() {
          console.log("Delete Post Successful!");
          app.$router.push({path: '/', query: { alert: 'Customer Deleted with ID: ' + id }});
        },
        error: function() {
          console.log("Delete Failed!");
          app.deleteFailed = true;
          // app.error = postId;
        }

      }).always( (response) => {

         console.log("Click Success"); 
          
      }); 

    },    
    insertPost: function( id ) {
      // return 'This is a test method';
      console.log("Clicked Insert");
      let app = this;

      console.log(app.post.title.rendered);
      console.log(app.post.content.rendered);

      jQuery.ajax({
        url:    wp_rest_api.base_url + 'posts/' + id,
        type: 'POST',
        beforeSend:   function( xhr ) {
          xhr.setRequestHeader( 'X-WP-Nonce', wp_rest_api.nonce );
        },
        data: {
          title:    app.post.title.rendered,
          content:  app.post.content.rendered,
          status:   "publish",
        },
        success: function(response) {
          console.log("Insert Post Successful!");
          // location.reload();

          app.postId = response.id;
          console.log(app.postId);

          app.submitted = true;

        },
        error: function() {
          console.log("Insert Post Failed!");
          app.submitFailed = true;
        }


      }).always( (response) => {
          console.log("Click Success");
      }); 

           
    }
  },
  mounted: function() {
    
    // console.log( "this is coming from Mounted: " + wp_rest_api.base_url );
    
    this.fetchPost( this.id );
  } 
}
</script>

<style lang="scss">

.add-post {
  border: 4px double gray; 
  margin-top: 4rem;
  margin-bottom: 4rem;
  padding: 2rem;

  .output {
    margin-left: 4rem;
    padding: .5rem;
    background-color: #e3e3e3;
    width: 10rem;

  }

}


</style>
