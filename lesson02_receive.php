<!doctype html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>

<?php
	$id = $_POST["id"];
	$pw = $_POST["pw"];
	if($id == "minami" && $pw == "keisuke"){
		print("login complete.");
	} else {
		print("login failed.");
	}
?>

</body>
</html>
