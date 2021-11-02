<?php 
	include '../model/Poly.php';

	$tile="So Nguyen To";
	$txt1="n1";
	$txt2="n2";
	if (isset($_GET['act'])){
		$action=$_GET['act'];
	}
	else if(isset($_POST['act'])){
		$action=$_POST['act'];
	}
	else{
		$action="frmFind";
	}

	switch ($action){
		case "frmFind":
			include "../view/frmFind.php";
			break;
		case "result":
			include "../view/result.php";
			break;
	}
?>