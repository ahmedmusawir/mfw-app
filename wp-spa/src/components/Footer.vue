<template>

  <main class="footer  wow fadeInUpBig">

    <footer>
      <h6>
        {{ title }}
      </h6>
    </footer>
    
  </main>

</template>

<script>
export default {
  data () {
    return {
      title: 'App Footer, Copyright 2018'
    }
  },
  methods: {
    greeting: function() {
      // return 'This is a test method';
    }
  } 
}
</script>

<style lang="scss">

footer {

  padding: 10px;
  background: darken(gray, 0%);

  h6 {
    color: lightgray;
  }

}


</style>
