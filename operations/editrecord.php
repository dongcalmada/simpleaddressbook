<?php
include '../.config.php';
include '../utilities.php';
include '../main_table_def.php';
$table = MAIN_TABLE;
$fields = $main_table_definition;

if ($_POST) {
	$query = "UPDATE $table SET ";
	foreach ($fields as $f => $p) {
		if (isset($_POST[$f])) {
			$query .= "$f = '" . $_POST[$f] . "',";
		}
	}
	$query = rtrim($query,",");
	$query .= " WHERE id = " . $_POST['id'];
	dbconnect();
	mysqli_query($_SESSION['dblink'],$query);
	header("Location: " . SITE_URL);
}