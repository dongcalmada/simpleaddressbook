<?php
// Utility functions

function html_top($title = SITE_NAME) {
	$html = '<!DOCTYPE html>
<html lang="en">
	<head>
		<title>'.$title.'</title>
		<meta charset="UTF-8">
	</head>
	<body>
';
	return $html;
}

function html_banner() {
	$html = '
		<div id="banner" class="container">
			<h1>'.SITE_NAME.'</h1>
		</div>
';
	return $html;
}

function html_bottom() {
	$html = '
	</body>
</html>
';
	return $html;
}

function dbconnect() {
	$db = DB;
	$user = DB_USER;
	$pass = DB_PASS;
	$host = DB_HOST;
	$dbconnect = mysqli_connect($host,$user,$pass,$db);
	$_SESSION['dblink'] = $dbconnect;
	return $_SESSION['dblink'];
}