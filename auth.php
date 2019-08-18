<?php
include '.config.php';
if (isset($_POST['user']) and isset($_POST['password'])) {
	$admin_user = ADMIN;
	$admin_pass = strtoupper(ADMIN_PASS);
	$post_user = $_POST['user'];
	$post_pass = strtoupper(sha1($_POST['password']));
	if ($admin_user == $post_user and $admin_pass == $post_pass) {
		$_SESSION['loggedin'] = TRUE;
	}
}