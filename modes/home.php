<?php
include 'main_table_def.php';
dbconnect();
if (isset($_SESSION['search'])) {
	$rows = getRows($_SESSION['search']);	
} else {
	$rows = getRows();
}
$fields = $main_table_definition;

$columnnames = [];
foreach ($fields as $f => $p) {
	if ($p['table_head']) {
		$columnnames[] = $p['table_head'];
	}
}
?>
<button><a href="<?php echo SITE_URL;?>/index.php?mode=add">Add</a></button>
<form method="post" action="index.php">
	Search: 
	<input type="text" name="search">
	<input type="submit" value="Go">
	<input type="hidden" name="mode" value="search">
</form>
<button><a href="<?php echo SITE_URL;?>">All</a></button>
<button><a href="<?php echo SITE_URL;?>/index.php?mode=logout">Logout</a></button>
<div id="rows">
	<table>
		<thead>
			<tr>
				<?php
				foreach ($columnnames as $c) {
					echo "<th>$c</th>";
				}
				?>
				<th>Edit</th>
				<th>Del</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($rows as $row) {
				echo "<tr>";
				foreach ($fields as $f => $p) {
					if ($p['table_head']) {
						if ($f == 'id') {
							$id = $row['id'];
							$href = SITE_URL . "/index.php?mode=view&id=$id";
							echo '<td><a href="'.$href.'">'.$id.'</a></td>';
						} else {
							echo "<td>".$row[$f]."</td>";
						}
					}
				}
				echo '<td><a href="'.SITE_URL.'/index.php?mode=edit&id='.$row['id'].'">Edit</a></td>';
				echo '<td><a href="'.SITE_URL.'/index.php?mode=delete&id='.$row['id'].'">Del</a></td>';
				echo "</tr>";
			}
			?>
		</tbody>
	</table>
</div>