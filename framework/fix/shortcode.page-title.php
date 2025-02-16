<?php

//shortocde
add_shortcode( 'page-title', function($atts, $content = null){

	return get_the_title();
     
}); 