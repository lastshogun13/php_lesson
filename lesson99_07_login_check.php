<!doctype html>
<html>
<head>
	<meta charset="utf-8">
</head>
<style>
table {
	border-collapse: collapse;
}
table, th, td {
	border: solid 1px #ff00ff;
}
</style>
<body>

table test<br>
<?php
	$num = $_POST["num"];
	print("num = $num<br>");
?>

<table>
<?php
	for($i = 1; $i <= $num; $i ++){
?>
	<tr>
		<td><?php print $i; ?></td>
		<td><?php print $i*$i; ?></td>
	</tr>
<?php
	}
?>
</table>

</body>
</html>
