<?php
// Utility functions
function html_top($title = SITE_NAME) {
	$html = '<!DOCTYPE html>
<html lang="en">
	<head>
		<title>'.$title.'</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="assets/style.css">
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

function getRows() {
	$table = MAIN_TABLE;
	$order_field = MAIN_TABLE_DEFAULT_ORDER_FIELD;
	$query = "SELECT * FROM $table ORDER BY $order_field";
	$result = mysqli_query($_SESSION['dblink'],$query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function isLoggedIn() {
	$loggedin = FALSE;
	if (isset($_SESSION['loggedin']) and $_SESSION['loggedin'] == TRUE) {
		$loggedin = TRUE;
	}
	return $loggedin;
}

function getRowByID($id) {
	$table = MAIN_TABLE;
	$query = "SELECT * FROM $table WHERE id = $id";
	$result = mysqli_query($_SESSION['dblink'],$query);
	$row = mysqli_fetch_assoc($result);
	return $row;
}

function getNewID() {
	$table = MAIN_TABLE;
	$query = "SELECT MAX(id)+1 as id FROM $table";
	$result = mysqli_query($_SESSION['dblink'],$query);
	$row = mysqli_fetch_assoc($result);
	$id = $row['id'];
	return $id;
}