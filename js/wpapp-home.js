Vue.config.devtools = true;

new Vue ({

  el: '#general-post',

  data(){

  	return {

    	posts:      '',
      postTitle:  '',
      postBody:   '',
      postCode:   '',
      postId:     '',
      error:      false,
      editView:   false,
      isActive:   true,
      title:      '',
      content:    '',
      editable:   true,
      editTitle:  '',
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

      var app = this;


      jQuery.ajax({
        url:    wp_rest_api.base_url + 'posts',
        type: 'POST',
        beforeSend:   function( xhr ) {
          xhr.setRequestHeader( 'X-WP-Nonce', wp_rest_api.nonce );
        },
        dataType : "html",
          contentType: "application/x-www-form-urlencoded; charset=UTF-8", 
        data: {
          title:    this.postTitle,
          content:  this.postBody,
          status:   "publish",
          "fields[sass_or_css]": app.postCode,
        },
        success: function(response) {
          console.log("Insert Post Successful!");
          location.reload();
          console.log(app.postCode);


          app.postId = response.id;

          console.log(app.postId);


          // jQuery.ajax({
          //   url:    'http://wpapp.local/wp-json/acf/v3/posts/' + app.postId,
          //   type: 'PUT',
          //   beforeSend:   function( xhr ) {
          //     xhr.setRequestHeader( 'X-WP-Nonce', wp_rest_api.nonce );
          //   },
          //   data: {
          //     'fields': {
          //       'sass_or_css': app.postCode 
          //     }
          //   },
          //   success: function() {
          //     console.log("Insert ACF Successful!");
          //     // location.reload();
          //   },
          //   error: function() {
          //     console.log("Insert ACF Failed!");
          //     // app.error = postId;
          //   }


          // }).always( (response) => {
          //     console.log("Click ACF Success");
          //     console.log(app.postId);  
          // });                    


        },
        error: function() {
          console.log("Insert Post Failed!");
        }


      }).always( (response) => {
          console.log("Click Success");
      });

      /**
       *
       * ACF Insert
       *
       */

       console.log('http://wpapp.local/wp-json/acf/v3/posts/' + app.postId);


      

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

     },
     editPost: function(postId){

        var app = this;

        app.editView = postId;
        app.isActive = false;
        app.editable = false;

     },
     savePost: function(postId) {

        var editTitle = jQuery('#editTitle').val();
        var editContent = jQuery('#editContent').val();
        var editCode = jQuery('#editCode').val();

        // console.log(editTitle);
        // console.log(editContent);  
        console.log(editCode);      
        
        var updatedPost = {
          'title':            editTitle,
          'content':          editContent,
        }

        var app = this;

        app.editView = false;
        app.isActive = true;  
        app.editable = true;

        jQuery.ajax({
          url:    wp_rest_api.base_url + 'posts/' + postId,
          type: 'POST',
          beforeSend:   function( xhr ) {
            xhr.setRequestHeader( 'X-WP-Nonce', wp_rest_api.nonce );
          },
          data: updatedPost,
          success: function() {
            console.log("Edit Post Successful!");
            // location.reload();
          },
          error: function() {
            console.log("Edit Post Failed!");
            app.error = postId;
          }


        }).always( (response) => {
            console.log("Click Success");
        });    

        /**
         *
         * ACF Edit
         *
         */
        
        jQuery.ajax({
          url:    'http://wpapp.local/wp-json/acf/v3/posts/' + postId,
          type: 'PUT',
          beforeSend:   function( xhr ) {
            xhr.setRequestHeader( 'X-WP-Nonce', wp_rest_api.nonce );
          },
          data: {
            'fields': {
              'sass_or_css': editCode 
            }
          },
          success: function() {
            console.log("Edit ACF Successful!");
            location.reload();
          },
          error: function() {
            console.log("Edit ACF Failed!");
            app.error = postId;
          }


        }).always( (response) => {
            console.log("Click Success");
        });                    

     }
  }

});



























