<template>


  <main class="post-list  wow bounceInUp">

    <h5 class="text-center">{{title}}</h5>

    <input v-model="search" class="search form-control mb-4" type="text" placeholder="Search">

    <div v-for="post in filteredPosts" class="row">
      <div class="col-sm-10">

        <router-link v-bind:to="'/post/' + post.id"><h5 class="post-title">{{ post.title.rendered }}</h5></router-link>
        
      </div>
      <div class="col-sm-2">
        <router-link v-bind:to="'/postEdit/' + post.id" class="btn btn-warning">EDIT POST</router-link>
      </div>
      <p>{{ post.id }}</p>
    </div>
    
  </main>


</template>

<script>
export default {
  data () {
    return {
      title:    'Show Blog Post',
      posts:    [],
      search:   '',   
    }
  },
  mounted: function() {

    var app = this;

    // jQuery.get( wp_rest_api.base_url + 'posts' ).always((response) => {
    jQuery.get( '/wp-json/wp/v2/' + 'posts' ).always((response) => {
      app.posts = response;

      return app.posts;

    });     

  },  
  methods: {
    greeting: function() {
      // return 'This is a test method';
    }
  },
  computed: {
    filteredPosts: function() {
      return this.posts.filter((post) => {
         return post.title.rendered.match(this.search); 
      });
    }
  } 
}
</script>

<style lang="scss">

.post-list {
  border: 4px double gray; 
  margin-top: 4rem;
  margin-bottom: 4rem;
  padding: 2rem;

  .post-title {
    padding: 1rem;
    background-color: lighten(gray, 30%);
    box-shadow: 2px 2px 6px gray;

    &:hover {
      box-shadow: none;
    }
  }
  .search {
    box-shadow: 2px 2px 6px gray;
  }

}


</style>
