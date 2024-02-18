<?php
function assets($file, $show = true)
{
	$file_url = "resources/assets/{$file}";
	if (!$show) {
		return $file_url;
	}
	echo $file_url;
	return '';
}