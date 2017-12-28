<!doctype html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>

<form action="lesson03_receive.php" method="POST">
text<input type="text" name="text1" value=""><br>
password<input type="password" name="pass1" value=""><br>
<hr>
checkbox1<input type="checkbox" name="c1" value="1"><br>
checkbox2<input type="checkbox" name="c1" value="2" checked><br>
checkbox3<input type="checkbox" name="c1" value="3"><br>
<hr>
radio1<input type="radio" name="r1" value="1"><br>
radio2<input type="radio" name="r1" value="2"><br>
radio3<input type="radio" name="r2" value="3"><br>
radio3<input type="radio" name="r2" value="3" checked><br>
radio3<input type="radio" name="r2" value="3" checked><br>
<hr>
textarea<textarea name="ta" cols="50" rows="1">test</textarea><br>
<hr>
select
<select name="sel">
<option value="s1">s1ああああ</option>
<option value="s2" >s2いいいい</option>
<option value="s3" selected>s3ううううう</option>
</select>
<hr>
<input type="submit" value="next">
</form>

</body>
</html>
