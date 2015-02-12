add_action( 'wp_ajax_my_action', 'my_action_callback' );
add_action( 'wp_ajax_nopriv_my_action', 'my_action_callback' );

function my_action_callback() {
	global $wpdb; // this is how you get access to the database

	$whatever = intval( $_POST['whatever'] );

	$whatever += 10;

        echo $whatever;

	wp_die(); // this is required to terminate immediately and return a proper response
}


// Here is functgion how to calll the wordpress Aajx
<script>
var data = {
   'action': 'my_action',
   'cell_no': $("#mobile").val(),
   'from_page':'<?php echo site_url();?>'
  };

  // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
  jQuery.post(ajaxurl, data, function(response) {
  
  
  });
  </script>
  
