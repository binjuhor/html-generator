<?php
require_once "vendor/autoload.php";

use Binjuhor\Blade\BladeTemplate as Blade;

$compileDir = __DIR__ . '/compiles';
$viewDirectory = __DIR__ . '/resources/views';
$cacheDirectory = __DIR__ . '/cache';

$page = isset($_REQUEST['f']) ? $_REQUEST['f'] : 'index';
$build = isset($_REQUEST['build']) && $_REQUEST['build'];

$blade = new Blade([
	'view' => $viewDirectory,
	'cache' => $cacheDirectory,
	'compileDir' => $compileDir,
	'url' => 'http://html-generator.test'
]);

if (!file_exists('./resources/views/' . $page . '.blade.php')) {
	$page = '404';
}

echo $blade->render($page);

if ($build) {
	$blade->compiles();
}