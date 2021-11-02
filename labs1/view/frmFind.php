<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<a href="usercontroller.php?act=frmFind">aaaaaaa</a>
	<a href="tgcontroller.php?act=frmFind">Tam Giac</a>
	<h1><?php echo $tile ?></h1>
	<form action="<?php echo rtrim($_SERVER['REQUEST_URI'],"?act=frmFind"); ?>" method="post">
		<input type="hidden" name="act" value="result">
		<table>
			<tr>
				<td><?php echo $txt1 ?></td>
				<td><input type="text" name="txtNumber1" id="txtNumber1"></td>
			</tr>
			<tr>
				<td><?php echo $txt2 ?></td>
				<td><input type="text" name="txtNumber2" id="txtNumber2"></td>
			</tr>
			<tr>
				<td><input type="submit" value="OK"></td>
			</tr>
		</table>		
	</form>
</body>
</html>