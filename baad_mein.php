<?php
	$i=$_POST['fname'];

	$j=$_POST['email'];
	date_default_timezone_set('Asia/Kolkata');
	$o=getdate();
	$d=$o['year']."-".$o["mon"]."-".$o["mday"];
	$t=$o['hours'].":".$o["minutes"].":".$o["seconds"];
	
	print_r($_POST);
	$con= mysqli_connect("localhost","root","aman","fi");
	if($con){
		echo "connected";
	}
	echo (mysqli_error($con));
	mysqli_query($con,"INSERT INTO info VALUES('$i','$j','$d','$t')");
	echo (mysqli_error($con));
	

	header('Location: page.php');
	exit;

	
	
	?>