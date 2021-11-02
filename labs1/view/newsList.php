<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		include '../model/news.php';
		$n = new news();
		$r = $n->getList();

		
		while($set = $r->fetch()):

	?>
	<table>
		<tr>
			<td rowspan="3"><img src="<?php echo $set[4]; ?>" width="400" height="250"/></td>
			<td><span><a href="#"style="color: red;font-size: 20pt;font-weight:bold;"><?php echo $set[1]; ?></a></span></td>
		</tr>
		<tr>
			<td><span style="color:gray;font-size: 10pt;"><?php echo $set[3] ?></span></td>
		</tr>
		<tr>
			<td><?php echo $set[2] ?></td>

		</tr>
	</table>
	<p></p>
	<hr>
	<?php 
		endwhile;
	?>
</body>
</html>