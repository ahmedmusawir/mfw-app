new Vue ({

  el: '#general-post',

  data(){

  	return {

    	posts:      '',
      postTitle:  '',
      postBody:   '',
      postId:     '',
      error:      false
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
          type: 'POST',
          beforeSend:   function( xhr ) {
            xhr.setRequestHeader( 'X-WP-Nonce', wp_rest_api.nonce );
          },
          data: {
            title:    this.postTitle,
            content:  this.postBody,
            status:   "publish"
          },
          success: function() {
            console.log("Insert Post Successful!");
          },
          error: function() {
            console.log("Insert Post Failed!");
          }


        }).always( (response) => {
            console.log("Click Success");
        });

     },
     deletePost: function(postId) {

        var app = this;

        var thisNote = jQuery( "#" + postId ).parents("article");
        // console.log(thisNote);
        // console.log(postId);

        jQuery.ajax({
          url:    wp_rest_api.base_url + 'posts/' + postId,
          type: 'DELETE',
          beforeSend:   function( xhr ) {
            xhr.setRequestHeader( 'X-WP-Nonce', wp_rest_api.nonce );
          },
          success: function() {
            console.log("Delete Post Successful!");
            thisNote.slideUp();
          },
          error: function() {
            console.log("Delete Failed!");
            app.error = postId;
          }

        }).always( (response) => {

           console.log("Click Success"); 
            
        }); 

     }
  }

});



























