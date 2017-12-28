<!doctype html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>

<?php
	$num = rand(1, 10);
	print $num;

	
	if($num == 1){
		print "Today is very lucky.";
	}else if($num == 2){
		print "Today is lucky.";
	}else{
		print "Today is unlucky.";
	}
?>

</body>
</html>

