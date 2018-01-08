<?php



	session_name("login");
	session_start();
echo "string";
	if (isset($_SESSION['but'])) {
		session_destroy();
		echo "done";
	header("location: page.php");
	exit();
	}
	
	// session_name


	
?>