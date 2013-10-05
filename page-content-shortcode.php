<?php
/*
Plugin Name: Simple Page Contnent Shortcode
Plugin URI: http://viktoriya.tsymbal.ws/opensource/simplepagecontentshortcode
Description: Show page content in another page
Version: 0.0.2
Author: Viktoriya Tsymbal
Author URI: http://viktoriya.tsymbal.ws
License: GPL2
*/
// [spcs id=10] or [spcs title='Test']
function simple_page_content_shortcode( $atts ) {
	extract( shortcode_atts( array(
		'id' => 0,
        'title' => 'NA'
	), $atts ) );
    
    if($id != 0){
        $page = get_post($id);
    }
    if($title != 'NA'){
        $page = get_page_by_title( $title);
    }
    if(!empty($page)){
        $ret = $page->post_content;
    }
	return $ret;
}

add_shortcode( 'spcs', 'simple_page_content_shortcode' );

?>