<?php
/*
Plugin Name: Get Page Link By ID
Plugin URI: http://www.aconix-infotech.com/
Description: This plugin is created to get page/post link by page/post id
Author: Jitendra Singh Dikhit
Version: 1.0
Author URI: http://www.jitendrasinghdikhit.com
Author Email: jitendra5984@gmail.com
*/

function shortcode_get_page_link($attributes, $linkcontent=null)
{
	$pagelink="";
	if(!empty($attributes["id"]))
	{
		$pagelink="<a href='";
		
		if(empty($linkcontent))
		{
			$linkcontent = get_post($attributes['id'])->post_title;
		}
		
		$pagelink.= get_permalink($attributes['id']);
		$pagelink.="'>".$linkcontent."</a>";
		
	}
	return $pagelink;
}

add_shortcode('pagelink', 'shortcode_get_page_link');

?>