<template>
  <main class="primary-app-box container">

    <app-header></app-header>

    <h4 class="text-center">{{ title }}</h4>
    <h5 class="text-center">{{ greeting() }}</h5>
 
    <router-view></router-view>

    <app-footer></app-footer>
    
  </main>
</template>

<script>

import showPosts from './components/showPosts.vue' 

export default {
  components: {
    'show-posts': showPosts,
  },
  data () {
    return {
      title: 'Welcome to WP SPA'
    }
  },
  methods: {
    greeting: function() {
      return 'The 1st SPA in the world that lives inside WordPress!';
    }
  } 
}
</script>

<style lang="scss">

.primary-app-box {
  border: 4px double gray;
  min-height: 500px; 
  margin-top: 5rem;
  margin-bottom: 5rem;

  h4 {
    padding-top: 4rem;
  }
}


</style>
