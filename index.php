<?php
session_start();
$mode = 'home';
if (isset($_GET['mode'])) {
	$mode = $_GET['mode'];
}

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