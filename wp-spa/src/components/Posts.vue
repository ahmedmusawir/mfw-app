<template>
  <main class="post-list">

    <h6>{{title}}</h6>
    <ul>
      <li v-for="item in ninjas">{{ item }}</li>
    </ul>
    
  </main>


</template>

<script>
export default {
  data () {
    return {
      title: 'Posts Component - Declared Locally',
      ninjas: ['aaa', 'bbb', 'ccc']
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

.post-list {
  border: 4px dotted white; 
  margin-top: 4rem;
  margin-bottom: 4rem;
  padding: 2rem;

}


</style>
