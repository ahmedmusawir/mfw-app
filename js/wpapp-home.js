new Vue ({

  el: '#general-post',

  data(){

  	return {

    	posts:      '',
	}

  },  
  mounted: function() {

    var app = this;

    // jQuery.get( 'http://wpapp.local/wp-json/wp/v2/posts' ).always((response) => {
  	jQuery.get( wp_rest_api.base_url + 'posts' ).always((response) => {
  		app.posts = response;

  		return app.posts;


  	});

    // console.log(wp_rest_api.base_url);

  },
  created: function() {

    // this.getNews();

  },
  methods: {
     getNews: function() {

        var app = this;

     },
  }

});