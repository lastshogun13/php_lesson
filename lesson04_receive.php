<!doctype html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>

table test<br>

<?php
	$num = $_POST["num"];
	print("num = $num<br>");
?>

<table style="border:solid 1px #ff00ff; border-collapse: collapse;">

<?php
	for($i = 1; $i <= $num; $i ++){
?>
	<tr>
		<td style="border:solid 1px #ff00ff; border-collapse: collapse;"><?php print $i; ?></td>
		<td style="border:solid 1px #ff00ff; border-collapse: collapse;"><?php print $i*$i; ?></td>
	</tr>
<?php
	}
?>

</table>


</body>
</html>
