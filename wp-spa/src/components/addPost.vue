<template>


  <main class="add-post wow bounceInUp">

    <h5>{{ pageTitle }}</h5>
   
    <form>
      <div class="form-group row">
        <label for="inputTitle" class="col-sm-2 form-control-label">Title</label>
        <div class="col-sm-10">
          <input v-model="post.title" type="email" class="form-control" id="inputTitle">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputContent" class="col-sm-2 form-control-label">Content</label>
        <div class="col-sm-10">
          <textarea v-model="post.content" class="form-control" id="inputContent" cols="15"></textarea>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-12">
          <button type="submit" class="btn btn-secondary float-right" @click.prevent="insertPost">Submit Post</button>
        </div>
      </div>
    </form>

    <div v-if="submitted" class="alert alert-success" role="alert">
      <p>Thanx for adding your post ...</p>
    </div>

    <article class="preview">

      <h5>Preview Post</h5>
      <p>
        Post Title: <span class="output">{{ post.title }} </span>
      </p>
      <p>
        Post Content: <span class="output">{{ post.content }} </span>
      </p>
      
    </article>
    
  </main>


</template>

<script>
export default {
  data () {
    return {
      pageTitle:    'Add New Blog Post',
      post:         {
        title:    "",
        content:  "",
      },
      submitted: false,
      
    }
  },
  methods: {
    insertPost: function() {
      // return 'This is a test method';
      console.log("Clicked Insert");
      let app = this;

      console.log(app.post.title);
      console.log(app.post.content);

      jQuery.ajax({
        url:    wp_rest_api.base_url + 'posts',
        type: 'POST',
        beforeSend:   function( xhr ) {
          xhr.setRequestHeader( 'X-WP-Nonce', wp_rest_api.nonce );
        },
        data: {
          title:    app.post.title,
          content:  app.post.content,
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
        }


      }).always( (response) => {
          console.log("Click Success");
      }); 

           
    }
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
