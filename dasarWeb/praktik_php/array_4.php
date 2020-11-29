<!DOCTYPE html>
<html>
<head>
	<style>
		table, tr, td{
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<h2>Associative Array</h2>
	<?php
		$mobil['merk'] = 'Toyota';
		$mobil['type'] = 'Fortuner';
		$mobil['year'] = 2018;

		echo '<table>
					<tr>
						<th>Key</th>
						<th>Value</th>
					</tr>';
			foreach ($mobil as $key => $value) {
				echo '<tr>
						<td>'. $key . '</td>
						<td>'. $value . '</td>
						</tr>';
			}
			echo '</table>';
		?>

</body>
</html>