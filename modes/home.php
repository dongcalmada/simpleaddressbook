<?php
include 'main_table_def.php';
dbconnect();
$rows = getRows();
$fields = $main_table_definition;

$columnnames = [];
foreach ($fields as $f => $p) {
	if ($p['table_head']) {
		$columnnames[] = $p['table_head'];
	}
}
?>
<div id="rows">
	<table>
		<thead>
			<tr>
				<?php
				foreach ($columnnames as $c) {
					echo "<th>$c</th>";
				}
				?>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($rows as $row) {
				echo "<tr>";
				foreach ($fields as $f => $p) {
					if ($p['table_head']) {
						echo "<td>".$row[$f]."</td>";
					}
				}
				echo "</tr>";
			}
			?>
		</tbody>
	</table>
</div>