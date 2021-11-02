<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<a href="usercontroller.php?act=frmFind">aaaaaaa</a>
	<a href="usercontroller.php?act=triangle">Tam Giac</a>
	<h1>So nguyen to</h1>
	<form action="usercontroller.php" method="post">
		<input type="hidden" name="act" value="result">
		<table>
			<tr>
				<td><? echo $txt1 ?></td>
				<td><input type="text" name="dai" id="dai"></td>
			</tr>
			<tr>
				<td><? echo $txt2 ?></td>
				<td><input type="text" name="H" id="H"></td>
			</tr>
			<tr>
				<td><input type="submit" value="OK"></td>
			</tr>
		</table>	
	</form>
</body>
</html>