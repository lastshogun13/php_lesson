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
$query = "SELECT * FROM lesson06 WHERE no = 1";

# run SQL
$result = $mysqli->query($query);

# get result
$data = $result->fetch_assoc();

?>

no = <?php echo $data["no"] ?><br />
name = <?php echo $data["name"] ?><br />

</body>
</html>
