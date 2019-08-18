<?php
session_start();
include '../.config.php';
include '../utilities.php';
include '../main_table_def.php';
$table = MAIN_TABLE;
$fields = $main_table_definition;

if ($_POST) {
	$query = "INSERT INTO $table (";
	foreach ($fields as $f => $p) {
		$query .= "$f,";
	}
	$query = rtrim($query,",");
	$query .= ") VALUES (";
	foreach ($fields as $f => $p) {
		$value = $_POST[$f];
		$query .= "'$value',";
	}
	$query = rtrim($query,",");
	$query .= ")";
	dbconnect();
	mysqli_query($_SESSION['dblink'],$query);
	header("Location: " . SITE_URL);
}