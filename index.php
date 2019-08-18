<?php
session_start();
require '.config.php';
include 'utilities.php';

$mode = 'home';

if (isset($_GET['mode'])) {
	$mode = $_GET['mode'];
}

echo html_top();
echo html_banner();

switch ($mode) {
	case 'login':
		include 'modes/login.php';
		break;
	case 'home':
		// home page
		include 'modes/home.php';
		break;
	case 'add':
		// form in add context
		break;
	case 'edit':
		// form in edit context
		break;
	case 'delete':
		// record view with delete button
		break;
	case 'view':
		// record view
		break;
}

echo html_bottom();