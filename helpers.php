<?php
function asset($file, $show = true)
{
	$file_url = "resources/assets/{$file}";
	if (!$show) {
		return $file_url;
	}
	echo $file_url;
	return '';
}

function getVar($key, $default = null)
{
	$env = file_get_contents('.env');
	$env = explode("\n", $env);
	foreach ($env as $line) {
		if (strpos($line, $key) !== false) {
			return explode('=', $line)[1];
		}
	}
	return $default;
}


function url($part = '')
{
	if($part !== '') {
		return getVar('APP_URL').'/?f='.$part;
	}
	return getVar('APP_URL');
}

function setActive($part = '')
{
	$page = $_REQUEST['f'];
	if ($page === $part) {
		return 'active';
	}
	
	return  '';
}