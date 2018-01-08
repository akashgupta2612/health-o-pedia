<?php



	session_name("signup");
	session_start();
echo "string";
	if (isset($_SESSION['sign'])) {
		session_destroy();
		echo "done";
	header("location: page.php");
	exit();
	}
	
	// session_name


	
?>