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

function getPage()
{
	$env = getVar('ENV', 'development');
	if($env === 'development') { return isset($_REQUEST['f']) ? $_REQUEST['f'] : 'index'; }
	if(isset($_REQUEST['f'])) { return $_REQUEST['f'] === '' ? 'index' : $_REQUEST['f'];}
	
	$file = basename($_SERVER['REQUEST_URI']);
	$page = pathinfo($file, PATHINFO_FILENAME);
	return $page === '' ? 'index' : $page;
}

function url($part = '')
{
	$env = getVar('ENV', 'development');
	if($env === 'development' && ($part === 'index' || $part === '')) { return getVar('APP_URL'); }
	if($env === 'development') { return getVar('APP_URL').'/?f='.$part; }
	return $part !== '' ? $part.'.html' : 'index.html';
}

function active($part = '')
{
	return getPage() === $part ? 'active' : '';
}