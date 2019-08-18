<?php
include 'main_table_def.php';
$operation = $_SESSION['operation'];
$fields = $main_table_definition;
$heading = ucfirst($operation) . " " . RECORD_NAME;

if ($operation == 'add') {
	dbconnect();
	$id = getNewID();
} else {
	dbconnect();
	$id = $_SESSION['record_id'];
	$row = getRowById($id);
}
?>
<h1><?php echo $heading;?></h1>

<form method="POST" action="operations/<?php echo $operation;?>record.php">
	<?php
		foreach($fields as $f => $p) {
			echo '<label for ="'.$f.'">'.$p['form_label'].' </label>';
			switch ($p['form_type']) {
				case 'input_text':
					$value = null;
					if ($operation == 'add' and $f == 'id') {
						$value = $id;
					} elseif ($operation == 'edit') {
						$value = $row[$f];
					}
					echo '<input type ="text" name="'.$f.'" value="'.$value.'">';
					break;
				case 'date':
					$value = null;
					if ($operation == 'edit') {
						$value = $row[$f];
					}
					echo '<input type ="text" name="'.$f.'" value="'.$value.'">';
					break;
				case 'textarea':
					$value = null;
					echo '<textarea name ="'.$f.'">'.$value.'</textarea>';
					break;
				case 'select' :
					echo '<select name = "'.$f.'">';
					$options = $p['select_source'];
					foreach ($options as $option) {
						$selected = null; 
						if ($operation == 'edit' and $option == $row[$f]){
							$selected = 'selected';
						}
						echo '<option label = "'.$option.'" value ="'.$option.'" '.$selected.'>'.$option.'</option>';
					}
					echo '</select>';
					break;
			}
			echo "<br>";
		}


	?>
	<input type = "submit" value ="Save">
</form>