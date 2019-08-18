<?php
include '../.config.php';
include '../utilities.php';
if ($_GET['id']) {
	$id = $_GET['id'];
	$table = MAIN_TABLE;
	$query = "DELETE FROM $table WHERE id = $id";
	dbconnect();
	mysqli_query($_SESSION['dblink'],$query);
	header("Location: " . SITE_URL);
}