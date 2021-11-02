<?php 
	$action='home';

	if (isset($_GET['act'])) {
		$action= $_GET['act'];
	}

	switch ($action) {
		case 'home':
			include "../view/home.php";
			break;
		case 'newsList':
			include "../view/newsList.php";
			break;
	}