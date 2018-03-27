<template>

  
  <main class="single-post">

    <h4>{{post.title.rendered}}</h4>
    <article v-html="post.content.rendered">
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
      post: {}
      
    }
  },
  created() {

    var app = this;

    jQuery.get( '/wp-json/wp/v2/' + 'posts/' + app.id ).always((response) => {
      app.post = response;

      return app.post;

      console.log(app.id);
      console.log(app.post);

    });         

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