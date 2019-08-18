<?php
session_start();
include 'utilities.php';
$mode = 'home';
if (isset($_GET['mode'])) {
	$mode = $_GET['mode'];
}

echo html_top();
echo html_banner();
switch ($mode) {
	case 'home':
		echo "home page here!";
		break;
	case 'add':
		echo "add contact form here!";
		break;
	case 'edit':
		echo "edit contact form here!";
		break;
	case 'delete':
		echo "delete contact form here!";
		break;
	case 'view':
		echo "view contact form here!";
		break;
}
echo html_bottom();