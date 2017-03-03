<?php


function get_excerpt($content, $length=40){
	if(strlen($content)<= $length){
		return $content;
	}

	$excerpt= substr($content, 0,$length);
	return $excerpt;
}


?>