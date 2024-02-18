<?php
require_once "vendor/autoload.php";

use Binjuhor\Blade\BladeTemplate as Blade;

$page = isset($_REQUEST['f']) ? $_REQUEST['f'] : 'index';
$build = isset($_REQUEST['build']);
$domain = getVar('APP_URL');

$blade = new Blade([
	'view' => __DIR__ . '/resources/views',
	'cache' => __DIR__ . '/cache',
	'compileDir' => __DIR__ . '/compiles',
	'url' => $domain,
]);

if (!file_exists('./resources/views/' . $page . '.blade.php')) {
	$page = '404';
}

echo $blade->render($page);

if ($build) {
	$blade->compiles();
}