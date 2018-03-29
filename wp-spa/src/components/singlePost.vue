<template>

  
  <main class="single-post  wow fadeInRight">

    <h4>{{postTitle}}</h4>
    <!-- <h4>{{post.title.rendered}}</h4> -->
    <article v-html="postContent">
    <!-- <article v-html="post.content.rendered"> -->
    </article>
    <p>
      {{ post.id }}
    </p>
    
  </main>


</template>

<script>
export default {
  data () {
    return {
      id: this.$route.params.id,
      post:         "",
      postTitle:    "",
      postContent:  "", 
      
    }
  },
  methods: {

    fetchPost(id) {

      var app = this;

      // console.log( wp_rest_api.base_url );

      jQuery.get( wp_rest_api.base_url + 'posts/' + id ).always((response) => {
      // jQuery.get( '/wp-json/wp/v2/' + 'posts/' + id ).always((response) => {

        app.post = response;
        app.postTitle = response.title.rendered;
        app.postContent = response.content.rendered;

        return app.post;

        console.log(app.post);

      });

    }
  },
  mounted: function() {

    var app = this;

    console.log( "this is coming from Mounted: " + wp_rest_api.base_url );

    app.fetchPost( app.id );     

  } 
}
</script>


<style lang="scss">

.single-post {
  border: 4px double gray; 
  margin-top: 4rem;
  margin-bottom: 4rem;
  padding: 2rem;
}


</style>