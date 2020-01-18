<?php
session_start();
include '.config.php';
if (isset($_POST['user']) and isset($_POST['password'])) {
	$admin_user = ADMIN;
	$admin_pass = strtoupper(ADMIN_PASS);
	$post_user = $_POST['user'];
	$post_pass = strtoupper(sha1($_POST['password']));
	// echo $admin_user;
	// echo $admin_pass;
	if ($admin_user == $post_user and $admin_pass == $post_pass) {
		$_SESSION['loggedin'] = TRUE;
	}
	header('Location: ' . SITE_URL);
}