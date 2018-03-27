<template>


  <main class="header">

    <header>

      <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->
      <nav class="navbar navbar-expand-lg navbar-inverse">
        <a class="navbar-brand" href="#">{{ title }}</a>
        

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active" >
              <div class="nav-link"><router-link to="/">Home</router-link></div>
            </li>
            <li class="nav-item" >
              <div class="nav-link"><router-link to="/about">About</router-link></div>
            </li>
            <li class="nav-item">
              <div class="nav-link"><router-link to="/add">Add Post</router-link></div>
            </li>
            <li class="nav-item">
              <div class="nav-link"><router-link to="/contact">Contact Us</router-link></div>
            </li>
          </ul>
          
        </div>
      </nav>      
    </header>
    
  </main>


</template>

<script>
export default {
  data () {
    return {
      title: 'SPA'
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

header {

  // padding: 10px;
  background: gray;

  h1 {
    color: white;
  }

  .navbar {
    background-color: lighten(black, 20%);
    // border-right: 3rem solid black;

    ul {
      li {
        margin-left: 1rem;
      }
    }
  }

}


</style>
