<?php
include 'main_table_def.php';
$operation = $_SESSION['operation'];
$fields = $main_table_definition;
$heading = ucfirst($operation) . " " . RECORD_NAME;
dbconnect();
$id = $_SESSION['record_id'];
$row = getRowById($id);
?>
<div id="recordview">
	<h2><?php echo $heading;?></h2>
	<?php
	foreach ($fields as $f => $p) {
		echo '<div class="row">
		<span class="label">'.$p['form_label'].': </span>
		<span class="data">'.$row[$f].'</span>
		</div>';
	}
	?>
</div>
<?php
if ($operation == 'delete') {
	echo '<button><a href="'.SITE_URL.'/operations/deleterecord.php?id='.$id.'">Delete</button>';
}