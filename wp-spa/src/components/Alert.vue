<template>

  
  <main class="alert-component wow bounceIn">

   <div class="alert alert-warning alert-dismissible" role="alert">
     <button type="button" class="close" data-dismiss="alert">
       <span>
         X
       </span>
     </button>

     {{ message }}
   </div>
    
  </main>


</template>

<script>
export default {
  name:         'alert',
  props:        ['message'], 
  data () {
    return {
    }
  },
  mounted: function() {



  },    
  methods: {
    greeting: function() {
      // return 'This is a test method';
    }
  } 
}
</script>

<style lang="scss">
  .alert-component {
    // border: 4px double gray; 
    // margin-top: 4rem;
    // margin-bottom: 4rem;
    // padding: 2rem;
  }

</style>