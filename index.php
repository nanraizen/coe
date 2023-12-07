<?php

$uri = $_SERVER['REQUEST_URI'];
$uri = trim($uri, '/');
$segments = explode('/', $uri);

$filePath = 'views/home.php';

if (file_exists($filePath)) {
	include $filePath;
} else {
	http_response_code(404);
	echo '404 Not Found';
}
