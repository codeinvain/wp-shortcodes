<?php
/*
Plugin Name: WP Shortcodes
Plugin URI: http://www.github.com/codeinvain/wp-shortcodes
Description: Adds different shortcods to wp
Version: 0.1
Author: Daniel Cohen
Author URI: http://www.codeinvain.com/

*/
function gist_shortcode($atts, $content = null) {
	extract(shortcode_atts(array(
		'id' => '468329'
	), $atts));

	$html =  "<script src=\"http://gist.github.com/".trim($id).".js\"></script>";
	$html = $html."<noscript><code class=\"gist\"><pre><a href=\"http://gist.github.com/".trim($id)."\">gist code snippet</a>".$content."</pre></code></noscript>";

	
	return $html;
	
}
add_shortcode('gist', 'gist_shortcode');


function iframe_shortcode($atts, $content = null) {
	extract(shortcode_atts(array(
		'src' => 'about:blank',
		'width' => '480',
		'height' => '320'
	), $atts));

	$html =  '<iframe src="'.trim($src).'" style="width:'.trim($width).'px;height:'.trim($height).'px"></iframe>';
	$html = $html."<noscript><pre><a href=\"".trim($src)."\">frame content</a>".$content."</pre></noscript>";
	
	return $html;
	
}
add_shortcode('iframe', 'iframe_shortcode');


?>