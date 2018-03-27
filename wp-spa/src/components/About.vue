<template>

  
  <main class="about-pg">

    <h5>
      {{ aboutPg.title.rendered }}
    </h5>
    <div v-html="aboutPg.content.rendered"></div>

    
  </main>


</template>

<script>
export default {
  data () {
    return {
      aboutPg: ""
    }
  },
  mounted: function() {

    // console.log(wp_rest_api.base_url);
    var app = this;

    // jQuery.get( wp_rest_api.base_url + 'posts' ).always((response) => {
    jQuery.get( '/wp-json/wp/v2/' + 'pages/243'  ).always((response) => {
      app.aboutPg = response;

      return app.posts;

    });     

  },    
  methods: {
    greeting: function() {
      // return 'This is a test method';
    }
  } 
}
</script>

<style lang="scss">
  .about-pg {
    border: 4px double gray; 
    margin-top: 4rem;
    margin-bottom: 4rem;
    padding: 2rem;
  }

</style>