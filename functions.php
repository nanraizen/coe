<?php session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$jsonData = file_get_contents('../users.json');
	$data = json_decode($jsonData, true);

	foreach ($data['users'] as $user) {
		if ($user['username'] == $username && $user['password'] == $password) {
			$_SESSION['user'] = $user;

			$role = $user['role'];
			header("location: /$role/index");
			exit();
		}
	}

	$error = "Gagal. Kredensial tidak valid.";
}

function isLoggedIn() {
	return isset($_SESSION['user']);
}

function getUserRole() {
	return isset($_SESSION['user']['role']) ? $_SESSION['user']['role'] : null;
}

function hasUserRole($role) {
	return isLoggedIn() && getUserRole() === $role;
}

function getRoot() {
	return $_SERVER['DOCUMENT_ROOT'];
}

function getPath() {
	return getRoot() . '/';
}

function getPart() {
    return getRoot() . '/parts/';
}

function getUrl($path = '', $allowedPage = null) {
	if ($allowedPage === null || thisUrl($allowedPage)) {
		$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
		$url = $protocol . '://' . $_SERVER['HTTP_HOST'] . '/' . ltrim($path, '/');

		return $url;
	} else {
		return '';
	}
}

function thisUrl($allowedPage) {
	return $_SERVER['REQUEST_URI'] === $allowedPage;
}

function checkRoleSession($role) {
	if (!isLoggedIn() || getUserRole() !== $role) {
		header("location: /404");
		exit();
	}

	return $_SESSION['user'];
}

$name = isset($_SESSION['user']['name']) ? $_SESSION['user']['name'] : '';
$email = isset($_SESSION['user']['email']) ? $_SESSION['user']['email'] : '';
$username = isset($_SESSION['user']['username']) ? $_SESSION['user']['username'] : '';
$role = isset($_SESSION['user']['role']) ? $_SESSION['user']['role'] : '';

function minfy_html($output) {
	$search = ['/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s', '/<!--(.|\s)*?-->/'];
	$replace = ['>', '<', '\\1', ''];
	$output = preg_replace($search, $replace, $output);

	return $output;
}

ob_start('minfy_html');

$sitename = 'Center of Excellence';