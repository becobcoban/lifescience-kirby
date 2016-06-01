<?php
/**
 * Youtube Embed URL
 */
field::$methods['ytembed'] = function($field) {
	preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $field->value, $matches);
	$url = isset($matches[0]) ? 'https://www.youtube.com/embed/' . $matches[0] : false;
	return $url;
};