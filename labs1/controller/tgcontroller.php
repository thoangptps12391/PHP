<?php 
	include '../model/Poly.php';

	$tile="Dien tich tam giac";
	$txt1="Dai";
	$txt2="H";
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
			include "../view/Stg.php";
			break;
	}
?>