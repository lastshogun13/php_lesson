<!doctype html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>

<?php
# connect database
$mysqli = new mysqli("localhost", "root", "12345678", "test");

# mysqli
$query = "SELECT * FROM lesson06";

# run SQL
$result = $mysqli->query($query);

# get result
$row_count = $result->num_rows;
?>

<table border=1>
<tr>
<td>no</td>
<td>name</td>
</tr>

<?php
for($i = 0; $i < $row_count; $i ++){
	$data = $result->fetch_assoc();
 ?>
<tr>
<td><?php echo $data["no"] ?></td>
<td><?php echo $data["name"] ?></td>
</tr>
<?php
}
?>
</table>

</body>
</html>
