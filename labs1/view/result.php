<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 	
		$n1 = $_POST['txtNumber1'];
		$n2 = $_POST['txtNumber2'];

		$poly = new Poly();
		$poly->getlist($n1,$n2);
	?>
</body>
</html>