<?php
session_start();
require '.config.php';
include 'utilities.php';

$mode = 'home';

if (isset($_GET['mode'])) {
	$mode = $_GET['mode'];
}

if (isset($_POST['search'])) {
	$mode = 'search';	
}

echo html_top();
echo html_banner();

switch ($mode) {
	case 'login':
		include 'modes/login.php';
		break;
	case 'search':
		$_SESSION['search'] = $_POST['search'];
		include 'modes/home.php';
		break;
	case 'home':
		// home page
		if (isLoggedIn()) {
			include 'modes/home.php';
		} else {
			include 'modes/login.php';
		}
		break;
	case 'add':
		$_SESSION['operation'] = 'add';
		include 'modes/form.php';
		break;
	case 'edit':
		$_SESSION['operation'] = 'edit';
		$_SESSION['record_id'] = $_GET['id'];
		include 'modes/form.php';
		break;
	case 'delete':
		$_SESSION['operation'] = 'delete';
		$_SESSION['record_id'] = $_GET['id'];
		include 'modes/view.php';
		break;
	case 'view':
		$_SESSION['operation'] = 'view';
		$_SESSION['record_id'] = $_GET['id'];
		include 'modes/view.php';
		break;
}

echo html_bottom();