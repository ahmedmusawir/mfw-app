<template>

  
  <main class="contact-pg">

    <h5>
      {{ contactPg.title.rendered }}
    </h5>
    <div v-html="contactPg.content.rendered"></div>

    
  </main>


</template>

<script>
export default {
  data () {
    return {
      contactPg: ""
    }
  },
  mounted: function() {

    // console.log(wp_rest_api.base_url);
    var app = this;

    // jQuery.get( wp_rest_api.base_url + 'posts' ).always((response) => {
    jQuery.get( '/wp-json/wp/v2/' + 'pages/248'  ).always((response) => {
      app.contactPg = response;

      return app.contactPg;

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
  .contact-pg {
    border: 4px double gray; 
    margin-top: 4rem;
    margin-bottom: 4rem;
    padding: 2rem;
  }

</style>