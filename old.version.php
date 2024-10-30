<?php 

// Begin Make shortcode for Counter wpmen.ir
function Counter_wpmen_3333()
{
	global $postid;
	$postid = get_the_ID();
	if (is_single()) {
		add_count($postid);
		echo show_count($postid);
	}


}
add_shortcode( 'Counter_wpmen_3333', 'Counter_wpmen_3333' );
// END Make shortcode for Counter wpmen.ir

/* Begin add function */
function add_count($postid) {
	$getmeta = get_post_meta($postid,'Counter_wpmen_3333'); 
	if (empty($getmeta)) {
		add_post_meta($postid,'Counter_wpmen_3333' ,1,TRUE);
	}
	else{
		$like_count =  get_post_meta($postid,'Counter_wpmen_3333');
		update_post_meta($postid,'Counter_wpmen_3333',++$like_count[0]);
	}
}
/* End Add function */

/* Begin Show count function */
function show_count($postid) {
	$like_count =  get_post_meta($postid,'Counter_wpmen_3333');
	return $like_count[0];
}

?>