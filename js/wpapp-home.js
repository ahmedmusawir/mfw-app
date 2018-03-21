new Vue ({

  el: '#general-post',

  data(){

  	return {

    	posts:      '',
      postTitle:  '',
      postBody:   '',
      postId:     ''
	}

  },  
  mounted: function() {

    // console.log(wp_rest_api.base_url);
    var app = this;

    jQuery.get( wp_rest_api.base_url + 'posts' ).always((response) => {
      app.posts = response;

      return app.posts;


    });          

  },
  created: function() {

    // this.getNews();

  },
  methods: {
     submitPosts: function() {

        jQuery.ajax({
          url:    wp_rest_api.base_url + 'posts',
          method: 'POST',
          beforeSend:   function( xhr ) {
            xhr.setRequestHeader( 'X-WP-Nonce', wp_rest_api.nonce );
          },
          data: {
            title:    this.postTitle,
            content:  this.postBody,
            status:   "publish"
          }

        }).always( (response) => {
            console.log("Post Inserted");
        });

     },
     deletePost: function(postId) {

        console.log(postId);

        jQuery.ajax({
          url:    wp_rest_api.base_url + 'posts/' + postId,
          method: 'DELETE',
          beforeSend:   function( xhr ) {
            xhr.setRequestHeader( 'X-WP-Nonce', wp_rest_api.nonce );
          }

        }).always( (response) => {

           console.log("DELETE success"); 
            
        }); 

     }
  }

});



























