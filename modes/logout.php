<?php
ini_set('display_errors',1);
session_start();
include '../.config.php';
if ($_SESSION['loggedin']) {
	session_destroy();
	header('Location: ' . SITE_URL);
} else {
	die("not loggedin?");
}